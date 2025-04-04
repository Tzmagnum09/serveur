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
        
        // Récupérer les utilisateurs en attente d'approbation 
        // Seulement si l'admin a la permission
        $pending_approvals = [];
        if ($this->permissionService->hasPermission($admin, 'approve_users')) {
            $pending_approvals = $userRepository->findPendingApproval();
        }
        
        return $this->render('admin/dashboard.html.twig', [
            'pending_approvals' => $pending_approvals,
            'user_count' => $userRepository->count([]),
            'approved_count' => $userRepository->count(['isVerified' => true, 'isApproved' => true]),
            'template_count' => $emailTemplateRepository->count([]),
            'permission_service' => $this->permissionService
        ]);
    }
    
    #[Route('/users', name: 'app_admin_users')]
    public function users(UserRepository $userRepository): Response
    {
        $admin = $this->getUser();
        
        if (!$admin || !$admin->isAdmin()) {
            return $this->redirectToRoute('app_login');
        }
        
        // Vérifier la permission de gestion des utilisateurs
        if (!$this->permissionService->hasPermission($admin, 'manage_users')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }
        
        $users = $userRepository->findBy([], ['lastName' => 'ASC', 'firstName' => 'ASC']);
        
        return $this->render('admin/users.html.twig', [
            'users' => $users,
            'permission_service' => $this->permissionService
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
        
        // Vérifier la permission de gestion des utilisateurs
        if (!$this->permissionService->hasPermission($admin, 'manage_users')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }
        
        // Empêcher la modification d'un super admin par un admin standard
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
            'permission_service' => $this->permissionService
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
        
        // Vérifier la permission d'approbation des utilisateurs
        if (!$this->permissionService->hasPermission($admin, 'approve_users')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }
        
        // Valider que l'utilisateur est vérifié mais pas encore approuvé
        if (!$user->isVerified() || $user->isApproved()) {
            $this->addFlash('error', 'Cet utilisateur ne peut pas être approuvé.');
            return $this->redirectToRoute('app_admin_dashboard');
        }
        
        // Approuver l'utilisateur
        $user->setIsApproved(true);
        $user->setApprovedAt(new \DateTimeImmutable());
        $userRepository->save($user, true);
        
        // Envoyer un email d'approbation
        $this->emailService->sendEmailToUser('account_approved', $user);
        
        $this->addFlash('success', $translator->trans('admin.user.flash.approved'));
        
        // Rediriger vers la page précédente
        $referer = $request->headers->get('referer');
        if ($referer) {
            return $this->redirect($referer);
        }
        
        return $this->redirectToRoute('app_admin_dashboard');
    }
}