<?php

namespace App\Controller;

use App\Service\AdminPermissionService;
use App\Service\DynamicTranslatorService;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/admin/translations')]
class TranslationController extends AbstractController
{
    private AdminPermissionService $permissionService;
    private DynamicTranslatorService $translatorService;
    private TranslatorInterface $translator;
    private Connection $connection;

    public function __construct(
        AdminPermissionService $permissionService,
        DynamicTranslatorService $translatorService,
        TranslatorInterface $translator,
        EntityManagerInterface $entityManager
    ) {
        $this->permissionService = $permissionService;
        $this->translatorService = $translatorService;
        $this->translator = $translator;
        $this->connection = $entityManager->getConnection();
    }

    #[Route('/', name: 'app_admin_translations')]
    public function index(): Response
    {
        $tables = $this->getTranslatableTables();
        return $this->render('admin/translations/index.html.twig', [
            'tables' => $tables,
        ]);
    }

    #[Route('/table/{table}', name: 'app_admin_translations_table')]
    public function table(string $table): Response
    {
        // Vérification de la validité de la table
        $tables = $this->getTranslatableTables();
        if (!in_array($table, $tables)) {
            $this->addFlash('error', 'Cette table n\'existe pas ou ne peut pas être traduite.');
            return $this->redirectToRoute('app_admin_translations');
        }

        // Récupération des champs et des items de la table
        $fields = $this->getTranslatableFields($table);
        $items = $this->getTableItems($table);

        return $this->render('admin/translations/table.html.twig', [
            'table' => $table,
            'fields' => $fields,
            'items' => $items, // Transmission des items au template
        ]);
    }

    #[Route('/edit/{table}/{id}/{field}', name: 'app_admin_translations_edit')]
    public function edit(string $table, int $id, string $field, Request $request): Response
    {
        // Vérification des permissions et des accès utilisateur
        $admin = $this->getUser();
        if (!$admin || !$admin->isAdmin()) {
            return $this->redirectToRoute('app_login');
        }

        if (!$this->permissionService->hasPermission($admin, 'translate_content')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }

        // Validation de la table et du champ
        $tables = $this->getTranslatableTables();
        if (!in_array($table, $tables)) {
            $this->addFlash('error', 'Cette table n\'existe pas ou ne peut pas être traduite.');
            return $this->redirectToRoute('app_admin_translations');
        }

        $fields = $this->getTranslatableFields($table);
        if (!in_array($field, $fields)) {
            $this->addFlash('error', 'Ce champ n\'existe pas ou ne peut pas être traduit.');
            return $this->redirectToRoute('app_admin_translations_table', ['table' => $table]);
        }

        // Obtenir le contenu original
        $originalContent = $this->translatorService->fetchOriginalContent($table, $id, $field);
        if ($originalContent === null) {
            $this->addFlash('error', 'L\'élément demandé n\'existe pas.');
            return $this->redirectToRoute('app_admin_translations_table', ['table' => $table]);
        }

        // Obtenir les traductions existantes
        $translations = $this->translatorService->getAllTranslations($table, $id, $field);
        $locales = $this->getParameter('app.locales');

        // Gestion des traductions via formulaire
        if ($request->isMethod('POST')) {
            $csrfToken = $request->request->get('_token');
            if ($this->isCsrfTokenValid('edit-translations' . $id, $csrfToken)) {
                foreach ($locales as $locale) {
                    $content = $request->request->get('translation_' . $locale);
                    if ($content) {
                        $this->translatorService->updateTranslation($table, $id, $field, $locale, $content);
                    }
                }
                $this->addFlash('success', $this->translator->trans('admin.translations.flash.updated'));
                return $this->redirectToRoute('app_admin_translations_edit', [
                    'table' => $table,
                    'id' => $id,
                    'field' => $field,
                ]);
            }
        }

        return $this->render('admin/translations/edit.html.twig', [
            'table' => $table,
            'id' => $id,
            'field' => $field,
            'originalContent' => $originalContent,
            'translations' => $translations,
            'locales' => $locales,
        ]);
    }

    private function getTranslatableTables(): array
    {
        $excludedTables = [
            'messenger_messages',
            'doctrine_migration_versions',
            'reset_password_request',
            'admin_permission',
        ];

        $sql = "SHOW TABLES";
        $stmt = $this->connection->prepare($sql);
        $result = $stmt->executeQuery();

        $tables = [];
        while ($tableName = $result->fetchOne()) {
            if (
                !str_ends_with($tableName, '_translation') &&
                !in_array($tableName, $excludedTables) &&
                !preg_match('/^[0-9]/', $tableName)
            ) {
                $tables[] = $tableName;
            }
        }

        return $tables;
    }

    private function getTranslatableFields(string $table): array
    {
        $excludedFields = [
            'id', 'created_at', 'updated_at', 'password', 'roles',
            'email_verified_at', 'approved_at', 'last_login_at', 'is_verified', 'is_approved',
        ];

        $sql = "DESCRIBE $table";
        $stmt = $this->connection->prepare($sql);
        $result = $stmt->executeQuery();

        $fields = [];
        while ($field = $result->fetchAssociative()) {
            $fieldName = $field['Field'];
            $fieldType = $field['Type'];

            if (
                (strpos($fieldType, 'varchar') !== false ||
                    strpos($fieldType, 'text') !== false ||
                    strpos($fieldType, 'char') !== false) &&
                !in_array($fieldName, $excludedFields)
            ) {
                $fields[] = $fieldName;
            }
        }

        return $fields;
    }

    private function getTableItems(string $table): array
    {
        $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT 100";
        $stmt = $this->connection->prepare($sql);
        $result = $stmt->executeQuery();

        return $result->fetchAllAssociative(); // Retourne les lignes sous forme de tableau associatif
    }
}
