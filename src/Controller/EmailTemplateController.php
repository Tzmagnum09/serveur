<?php

namespace App\Controller;

use App\Entity\EmailTemplate;
use App\Form\EmailTemplateFormType;
use App\Repository\EmailTemplateRepository;
use App\Service\AdminPermissionService;
use App\Service\EmailTemplateService;
use App\Service\AuditLogService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/admin/email-templates')]
class EmailTemplateController extends AbstractController
{
    private AdminPermissionService $permissionService;
    private EmailTemplateService $emailService;
    private AuditLogService $auditLogService;

    public function __construct(
        AdminPermissionService $permissionService,
        EmailTemplateService $emailService,
        AuditLogService $auditLogService
    ) {
        $this->permissionService = $permissionService;
        $this->emailService = $emailService;
        $this->auditLogService = $auditLogService;
    }

    #[Route('', name: 'app_admin_email_templates')]
    public function index(EmailTemplateRepository $templateRepository): Response
    {
        $admin = $this->getUser();

        if (!$admin || !$admin->isAdmin()) {
            return $this->redirectToRoute('app_login');
        }

        // Check if admin has permission
        if (!$this->permissionService->hasPermission($admin, 'edit_email_templates')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }

        // Get templates grouped by code
        $templates = $templateRepository->findAllGroupedByCode();

        // Log action
        $this->auditLogService->log(
            $admin,
            'view_email_templates',
            'Consultation de la liste des templates d\'email'
        );

        return $this->render('admin/email_templates/index.html.twig', [
            'templates' => $templates,
            'permission_service' => $this->permissionService
        ]);
    }

    #[Route('/new', name: 'app_admin_email_template_new')]
    public function new(Request $request, EmailTemplateRepository $templateRepository, TranslatorInterface $translator): Response
    {
        $admin = $this->getUser();

        if (!$admin || !$admin->isAdmin()) {
            return $this->redirectToRoute('app_login');
        }

        // Check if admin has permission
        if (!$this->permissionService->hasPermission($admin, 'edit_email_templates')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }

        $template = new EmailTemplate();
        
        // Préremplir les champs si les paramètres sont fournis
        $code = $request->query->get('code');
        $locale = $request->query->get('locale');
        
        if ($code) {
            $template->setCode($code);
        }
        
        if ($locale) {
            $template->setLocale($locale);
        }
        
        $form = $this->createForm(EmailTemplateFormType::class, $template);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $template->setCreatedAt(new \DateTimeImmutable());
            $templateRepository->save($template, true);

            // Log action
            $this->auditLogService->log(
                $admin,
                'create_email_template',
                sprintf('Création du template d\'email "%s" pour la langue "%s"', $template->getCode(), $template->getLocale())
            );

            $this->addFlash('success', $translator->trans('admin.email_template.flash.created'));

            return $this->redirectToRoute('app_admin_email_templates');
        }

        return $this->render('admin/email_templates/new.html.twig', [
            'form' => $form->createView(),
            'permission_service' => $this->permissionService
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_email_template_edit')]
    public function edit(
        EmailTemplate $template,
        Request $request,
        EmailTemplateRepository $templateRepository,
        TranslatorInterface $translator
    ): Response {
        $admin = $this->getUser();

        if (!$admin || !$admin->isAdmin()) {
            return $this->redirectToRoute('app_login');
        }

        // Check if admin has permission
        if (!$this->permissionService->hasPermission($admin, 'edit_email_templates')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }

        $form = $this->createForm(EmailTemplateFormType::class, $template);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $template->setUpdatedAt(new \DateTimeImmutable());
            $templateRepository->save($template, true);

            // Log action
            $this->auditLogService->log(
                $admin,
                'update_email_template',
                sprintf('Modification du template d\'email "%s" pour la langue "%s" (ID: %d)', 
                    $template->getCode(), 
                    $template->getLocale(),
                    $template->getId()
                )
            );

            $this->addFlash('success', $translator->trans('admin.email_template.flash.updated'));

            return $this->redirectToRoute('app_admin_email_templates');
        }

        // Récupérer les langues disponibles
        $availableLocales = $this->getParameter('app.locales') ?? ['fr', 'en', 'nl', 'de'];
        
        // Récupérer les langues déjà existantes pour ce template (code)
        $existingTemplates = $templateRepository->findByCode($template->getCode());
        $existingLocales = array_map(function($t) {
            return $t->getLocale();
        }, $existingTemplates);

        return $this->render('admin/email_templates/edit.html.twig', [
            'template' => $template,
            'form' => $form->createView(),
            'availableLocales' => $availableLocales,
            'existingLocales' => $existingLocales,
            'permission_service' => $this->permissionService
        ]);
    }

    #[Route('/{id}/edit/{locale}', name: 'app_admin_email_template_edit_locale')]
    public function editLocale(
        EmailTemplate $template,
        string $locale,
        EmailTemplateRepository $templateRepository
    ): Response {
        // Récupérer le template dans la langue demandée
        $localizedTemplate = $templateRepository->findByCodeAndLocale($template->getCode(), $locale);
        
        // Si le template existe dans cette langue, rediriger vers son édition
        if ($localizedTemplate) {
            return $this->redirectToRoute('app_admin_email_template_edit', [
                'id' => $localizedTemplate->getId()
            ]);
        }
        
        // Sinon, rediriger vers la création d'un nouveau template
        return $this->redirectToRoute('app_admin_email_template_new', [
            'code' => $template->getCode(),
            'locale' => $locale
        ]);
    }

    #[Route('/{id}/preview', name: 'app_admin_email_template_preview')]
    public function preview(EmailTemplate $template): Response
    {
        $admin = $this->getUser();

        if (!$admin || !$admin->isAdmin()) {
            return $this->redirectToRoute('app_login');
        }

        // Check if admin has permission
        if (!$this->permissionService->hasPermission($admin, 'preview_email_templates')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }

        // Log action
        $this->auditLogService->log(
            $admin,
            'preview_email_template',
            sprintf('Prévisualisation du template d\'email "%s" pour la langue "%s" (ID: %d)', 
                $template->getCode(), 
                $template->getLocale(),
                $template->getId()
            )
        );

        // Preview template with sample data
        $htmlContent = $this->emailService->previewTemplate($template);

        return new Response($htmlContent);
    }

    #[Route('/{id}/delete', name: 'app_admin_email_template_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        EmailTemplate $template,
        EmailTemplateRepository $templateRepository,
        TranslatorInterface $translator
    ): Response {
        $admin = $this->getUser();

        if (!$admin || !$admin->isAdmin()) {
            return $this->redirectToRoute('app_login');
        }

        // Check if admin has permission
        if (!$this->permissionService->hasPermission($admin, 'edit_email_templates')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }

        if ($this->isCsrfTokenValid('delete'.$template->getId(), $request->request->get('_token'))) {
            // Log action before deletion
            $this->auditLogService->log(
                $admin,
                'delete_email_template',
                sprintf('Suppression du template d\'email "%s" pour la langue "%s" (ID: %d)', 
                    $template->getCode(), 
                    $template->getLocale(),
                    $template->getId()
                )
            );

            $templateRepository->remove($template, true);

            $this->addFlash('success', $translator->trans('admin.email_template.flash.deleted'));
        }

        return $this->redirectToRoute('app_admin_email_templates');
    }
}