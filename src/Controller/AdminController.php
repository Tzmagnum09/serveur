<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminUserFormType;
use App\Repository\UserRepository;
use App\Repository\EmailTemplateRepository;
use App\Service\AdminPermissionService;
use App\Service\EmailTemplateService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/admin')]
class AdminController extends AbstractController
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
    
    #[Route('', name: 'app_admin_dashboard')]
    public function dashboard(
        UserRepository $userRepository, 
        EmailTemplateRepository $emailTemplateRepository
    ): Response {
        $admin = $this->getUser();
        
        if (!$admin || !$admin->isAdmin()) {
            return $this->redirectToRoute('app_login');
        }
        
        // Get pending approvals if admin has permission
        $pendingApprovals = [];
        if ($this->permissionService->hasPermission($admin, 'approve_users')) {
            $pendingApprovals = $userRepository->findPendingApproval();
        }
        
        // Calculate total user count
        $user_count = $userRepository->count([]);
        
        // Calculate approved user count
        $approved_user_count = $userRepository->count(['isVerified' => true, 'isApproved' => true]);
        
        // Calculate email template count
        $email_template_count = $emailTemplateRepository->count([]);
        
        return $this->render('admin/dashboard.html.twig', [
            'pendingApprovals' => $pendingApprovals,
            'user_count' => $user_count,
            'approved_user_count' => $approved_user_count,
            'email_template_count' => $email_template_count,
        ]);
    }
    
    #[Route('/users', name: 'app_admin_users')]
    public function users(UserRepository $userRepository): Response
    {
        $admin = $this->getUser();
        
        if (!$admin || !$admin->isAdmin()) {
            return $this->redirectToRoute('app_login');
        }
        
        // Check if admin has permission
        if (!$this->permissionService->hasPermission($admin, 'manage_users')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }
        
        $users = $userRepository->findBy([], ['lastName' => 'ASC', 'firstName' => 'ASC']);
        
        return $this->render('admin/users.html.twig', [
            'users' => $users,
        ]);
    }
    
    #[Route('/users/{id}/edit', name: 'app_admin_user_edit')]
    public function editUser(
        User $user,
        Request $request,
        UserRepository $userRepository,
        TranslatorInterface $translator
    ): Response {
        $admin = $this->getUser();
        
        if (!$admin || !$admin->isAdmin()) {
            return $this->redirectToRoute('app_login');
        }
        
        // Check if admin has permission
        if (!$this->permissionService->hasPermission($admin, 'manage_users')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }
        
        // Check if trying to edit a super admin
        if ($user->isSuperAdmin() && !$admin->isSuperAdmin()) {
            $this->addFlash('error', 'Vous ne pouvez pas modifier un super administrateur.');
            return $this->redirectToRoute('app_admin_users');
        }
        
        $form = $this->createForm(AdminUserFormType::class, $user);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);
            
            $this->addFlash('success', $translator->trans('admin.user.flash.updated'));
            
            return $this->redirectToRoute('app_admin_users');
        }
        
        return $this->render('admin/user_edit.html.twig', [
            'user' => $user,
            'userForm' => $form->createView(),
        ]);
    }
    
    #[Route('/users/{id}/approve', name: 'app_admin_user_approve')]
    public function approveUser(
        User $user,
        UserRepository $userRepository,
        TranslatorInterface $translator,
        Request $request
    ): Response {
        $admin = $this->getUser();
        
        if (!$admin || !$admin->isAdmin()) {
            return $this->redirectToRoute('app_login');
        }
        
        // Check if admin has permission
        if (!$this->permissionService->hasPermission($admin, 'approve_users')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }
        
        // Validate user is verified but not approved
        if (!$user->isVerified() || $user->isApproved()) {
            $this->addFlash('error', 'Cet utilisateur ne peut pas être approuvé.');
            return $this->redirectToRoute('app_admin_dashboard');
        }
        
        // Approve user
        $user->setIsApproved(true);
        $user->setApprovedAt(new \DateTimeImmutable());
        $userRepository->save($user, true);
        
        // Send approval email
        $this->emailService->sendEmailToUser('account_approved', $user);
        
        $this->addFlash('success', $translator->trans('admin.user.flash.approved'));
        
        // Redirect back to the referring page
        $referer = $request->headers->get('referer');
        if ($referer) {
            return $this->redirect($referer);
        }
        
        return $this->redirectToRoute('app_admin_dashboard');
    }
}