<?php

namespace App\Controller;

use App\Entity\User;
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
    
    #[Route('', name: 'app_admin_translations')]
    public function index(): Response
    {
        $admin = $this->getUser();
        
        if (!$admin || !$admin->isAdmin()) {
            return $this->redirectToRoute('app_login');
        }
        
        // Check if admin has permission
        if (!$this->permissionService->hasPermission($admin, 'translate_content')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }
        
        // Get all translatable tables
        $tables = $this->getTranslatableTables();
        
        return $this->render('admin/translations/index.html.twig', [
            'tables' => $tables,
        ]);
    }
    
    #[Route('/table/{table}', name: 'app_admin_translations_table')]
    public function table(string $table): Response
    {
        $admin = $this->getUser();
        
        if (!$admin || !$admin->isAdmin()) {
            return $this->redirectToRoute('app_login');
        }
        
        // Check if admin has permission
        if (!$this->permissionService->hasPermission($admin, 'translate_content')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }
        
        // Verify the table exists
        $tables = $this->getTranslatableTables();
        if (!in_array($table, $tables)) {
            $this->addFlash('error', 'Cette table n\'existe pas ou ne peut pas être traduite.');
            return $this->redirectToRoute('app_admin_translations');
        }
        
        // Get translatable fields
        $fields = $this->getTranslatableFields($table);
        
        // Get items from the table
        $items = $this->getTableItems($table);
        
        return $this->render('admin/translations/table.html.twig', [
            'table' => $table,
            'fields' => $fields,
            'items' => $items,
        ]);
    }
    
    #[Route('/edit/{table}/{id}/{field}', name: 'app_admin_translations_edit')]
    public function edit(string $table, int $id, string $field, Request $request): Response
    {
        $admin = $this->getUser();
        
        if (!$admin || !$admin->isAdmin()) {
            return $this->redirectToRoute('app_login');
        }
        
        // Check if admin has permission
        if (!$this->permissionService->hasPermission($admin, 'translate_content')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }
        
        // Verify the table and field exist
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
        
        // Get the original content
        $originalContent = $this->translatorService->getOriginalContent($table, $id, $field);
        if ($originalContent === null) {
            $this->addFlash('error', 'L\'élément demandé n\'existe pas.');
            return $this->redirectToRoute('app_admin_translations_table', ['table' => $table]);
        }
        
        // Get all translations
        $translations = $this->translatorService->getAllTranslations($table, $id, $field);
        
        // Get available locales from services.yaml
        $locales = $this->getParameter('app.locales');
        
        // Handle form submission
        if ($request->isMethod('POST')) {
            $csrfToken = $request->request->get('_token');
            if ($this->isCsrfTokenValid('edit-translations'.$id, $csrfToken)) {
                $translations = [];
                foreach ($locales as $locale) {
                    $content = $request->request->get('translation_'.$locale);
                    if ($content) {
                        $this->translatorService->updateTranslation($table, $id, $field, $locale, $content);
                        $translations[$locale] = $content;
                    }
                }
                
                $this->addFlash('success', $this->translator->trans('admin.translations.flash.updated'));
                
                // Redirect to the same page to refresh translations
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
            // Exclude translation tables and system tables
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
        $excludedFields = ['id', 'created_at', 'updated_at', 'password', 'roles', 'email_verified_at', 'approved_at', 'last_login_at', 'is_verified', 'is_approved'];
        
        $sql = "DESCRIBE $table";
        $stmt = $this->connection->prepare($sql);
        $result = $stmt->executeQuery();
        
        $fields = [];
        while ($field = $result->fetchAssociative()) {
            $fieldName = $field['Field'];
            $fieldType = $field['Type'];
            
            // Only include text/varchar fields and exclude system fields
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
        
        return $result->fetchAllAssociative();
    }
}