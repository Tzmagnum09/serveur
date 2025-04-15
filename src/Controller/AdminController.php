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
        
        // Compter les super admins
        $super_admin_count = 0;
        $allUsers = $userRepository->findAll();
        foreach ($allUsers as $user) {
            if ($user->isSuperAdmin()) {
                $super_admin_count++;
            }
        }
        
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
}