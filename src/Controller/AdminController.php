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
use Psr\Log\LoggerInterface;

#[Route('/admin')]
class AdminController extends AbstractController
{
    private AdminPermissionService $permissionService;
    private EmailTemplateService $emailService;
    private LoggerInterface $logger;
    
    public function __construct(
        AdminPermissionService $permissionService,
        EmailTemplateService $emailService,
        LoggerInterface $logger
    ) {
        $this->permissionService = $permissionService;
        $this->emailService = $emailService;
        $this->logger = $logger;
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
        
        // Récupérer les templates d'emails uniques par code et langue
        $templateCodes = $emailTemplateRepository->findAllCodes();
        $template_count = count($templateCodes);
        
        // Calculer les statistiques utilisateurs
        $user_count = $userRepository->count([]);
        $approved_count = $userRepository->count(['isVerified' => true, 'isApproved' => true]);
        $super_admin_count = $userRepository->count(['roles' => '%ROLE_SUPER_ADMIN%']);
        
        // Logger l'accès au tableau de bord
        $this->logger->info('Admin dashboard accessed', [
            'admin_email' => $admin->getEmail(),
            'user_count' => $user_count,
            'approved_count' => $approved_count
        ]);
        
        return $this->render('admin/dashboard.html.twig', [
            'pending_approvals' => $pending_approvals,
            'user_count' => $user_count,
            'approved_count' => $approved_count,
            'super_admin_count' => $super_admin_count,
            'template_count' => $template_count,
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
        
        // Logger la consultation de la liste des utilisateurs
        $this->logger->info('User list viewed', [
            'admin_email' => $admin->getEmail(),
            'total_users' => count($users)
        ]);
        
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
            // Traiter la date de naissance
            $birthDateStr = $request->request->get('birth_date');
            if (!empty($birthDateStr)) {
                try {
                    $birthDate = \DateTime::createFromFormat('d/m/Y', $birthDateStr);
                    if ($birthDate instanceof \DateTime) {
                        $user->setBirthDate($birthDate);
                    }
                } catch (\Exception $e) {
                    // Gestion silencieuse des erreurs
                }
            } else {
                $user->setBirthDate(null);
            }
            
            $userRepository->save($user, true);
            
            // Logger la modification de l'utilisateur
            $this->logger->info('User profile updated', [
                'admin_email' => $admin->getEmail(),
                'user_email' => $user->getEmail()
            ]);
            
            $this->addFlash('success', $translator->trans('admin.user.flash.updated'));
            
            return $this->redirectToRoute('app_admin_users');
        }
        
        return $this->render('admin/user_edit.html.twig', [
            'user' => $user,
            'userForm' => $form->createView(),
            'permission_service' => $this->permissionService
        ]);
    }
}