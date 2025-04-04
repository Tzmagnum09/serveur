<?php

namespace App\Controller;

use App\Entity\EmailTemplate;
use App\Form\EmailTemplateFormType;
use App\Repository\EmailTemplateRepository;
use App\Service\AdminPermissionService;
use App\Service\EmailTemplateService;
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
    
    public function __construct(
        AdminPermissionService $permissionService,
        EmailTemplateService $emailService
    ) {
        $this->permissionService = $permissionService;
        $this->emailService = $emailService;
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
        
        return $this->render('admin/email_templates/index.html.twig', [
            'templates' => $templates,
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
        $form = $this->createForm(EmailTemplateFormType::class, $template);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $templateRepository->save($template, true);
            
            $this->addFlash('success', $translator->trans('admin.email_template.flash.created'));
            
            return $this->redirectToRoute('app_admin_email_templates');
        }
        
        return $this->render('admin/email_templates/new.html.twig', [
            'form' => $form->createView(),
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
            $template->setUpdatedAt();
            $templateRepository->save($template, true);
            
            $this->addFlash('success', $translator->trans('admin.email_template.flash.updated'));
            
            return $this->redirectToRoute('app_admin_email_templates');
        }
        
        return $this->render('admin/email_templates/edit.html.twig', [
            'template' => $template,
            'form' => $form->createView(),
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
            $templateRepository->remove($template, true);
            
            $this->addFlash('success', $translator->trans('admin.email_template.flash.deleted'));
        }
        
        return $this->redirectToRoute('app_admin_email_templates');
    }
}