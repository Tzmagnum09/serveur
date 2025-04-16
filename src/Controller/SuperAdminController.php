<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\AuditLogService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/super-admin')]
class SuperAdminController extends AbstractController
{
    private TranslatorInterface $translator;
    private AuditLogService $auditLogService;

    public function __construct(
        TranslatorInterface $translator,
        AuditLogService $auditLogService
    ) {
        $this->translator = $translator;
        $this->auditLogService = $auditLogService;
    }

    #[Route('', name: 'app_super_admin_dashboard')]
    public function index(UserRepository $userRepository): Response
    {
        // Vérifier que l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin || !$admin->isSuperAdmin()) {
            return $this->redirectToRoute('app_login');
        }

        // Récupérer tous les administrateurs
        $admins = $userRepository->findAllAdministrators();
        
        // Nombre total d'utilisateurs
        $user_count = $userRepository->count([]);
        
        // Nombre de super admins
        $super_admin_count = $userRepository->countSuperAdmins();
        
        // Nombre de permissions (fixe pour l'instant)
        $permission_count = 6;

        // Log de l'accès
        $this->auditLogService->log(
            $admin,
            'view_super_admin_dashboard',
            'Accès au tableau de bord super administrateur'
        );

        return $this->render('admin/super_admin/dashboard.html.twig', [
            'admins' => $admins,
            'user_count' => $user_count,
            'super_admin_count' => $super_admin_count,
            'permission_count' => $permission_count
        ]);
    }

    #[Route('/{id}/permissions', name: 'app_super_admin_permissions')]
    public function permissions(User $user): Response
    {
        // Vérifier que l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin || !$admin->isSuperAdmin()) {
            return $this->redirectToRoute('app_login');
        }

        // Vérifier que l'utilisateur cible est un admin
        if (!$user->isAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.user_not_admin'));
            return $this->redirectToRoute('app_super_admin_dashboard');
        }

        // Log de l'accès
        $this->auditLogService->log(
            $admin,
            'view_permissions',
            sprintf('Consultation des permissions de l\'utilisateur %s (ID: %d)', $user->getUsername(), $user->getId())
        );

        return $this->render('admin/super_admin/permissions.html.twig', [
            'user' => $user
        ]);
    }

    #[Route('/{id}/promote', name: 'app_super_admin_promote', methods: ['POST'])]
    public function promoteToAdmin(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier que l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin || !$admin->isSuperAdmin()) {
            return $this->redirectToRoute('app_login');
        }

        if ($this->isCsrfTokenValid('promote'.$user->getId(), $request->request->get('_token'))) {
            // Ne pas promouvoir un utilisateur qui a déjà le rôle Admin
            if (!$user->isAdmin()) {
                $roles = $user->getRoles();
                $roles[] = 'ROLE_ADMIN';
                $user->setRoles(array_unique($roles));
                $entityManager->flush();

                // Log de l'action
                $this->auditLogService->log(
                    $admin,
                    'promote_user',
                    sprintf('Promotion de l\'utilisateur %s (ID: %d) au rôle d\'administrateur', $user->getUsername(), $user->getId())
                );

                $this->addFlash('success', $this->translator->trans('super_admin.flash.user_promoted'));
            } else {
                $this->addFlash('error', $this->translator->trans('admin.flash.user_already_admin'));
            }
        }

        return $this->redirectToRoute('app_super_admin_dashboard');
    }

    #[Route('/{id}/demote', name: 'app_super_admin_demote', methods: ['POST'])]
    public function demoteFromAdmin(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier que l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin || !$admin->isSuperAdmin()) {
            return $this->redirectToRoute('app_login');
        }

        // Empêcher la rétrogradation du premier super admin
        if ($user->getId() == 5 && $user->isSuperAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.cannot_demote_first_admin'));
            return $this->redirectToRoute('app_super_admin_dashboard');
        }

        if ($this->isCsrfTokenValid('demote'.$user->getId(), $request->request->get('_token'))) {
            // Ne rétrograder que s'il est admin mais pas super admin
            if ($user->isAdmin() && !$user->isSuperAdmin()) {
                $roles = array_diff($user->getRoles(), ['ROLE_ADMIN']);
                $user->setRoles($roles);
                $entityManager->flush();

                // Log de l'action
                $this->auditLogService->log(
                    $admin,
                    'demote_user',
                    sprintf('Rétrogradation de l\'utilisateur %s (ID: %d) du rôle d\'administrateur', $user->getUsername(), $user->getId())
                );

                $this->addFlash('success', $this->translator->trans('super_admin.flash.admin_demoted'));
            } else {
                $this->addFlash('error', $this->translator->trans('admin.flash.cannot_demote_user'));
            }
        }

        return $this->redirectToRoute('app_super_admin_dashboard');
    }

    #[Route('/{id}/promote-super', name: 'app_super_admin_promote_super', methods: ['POST'])]
    public function promoteToSuperAdmin(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier que l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin || !$admin->isSuperAdmin()) {
            return $this->redirectToRoute('app_login');
        }

        if ($this->isCsrfTokenValid('promote-super'.$user->getId(), $request->request->get('_token'))) {
            // Ne pas promouvoir un utilisateur qui a déjà le rôle Super Admin
            if (!$user->isSuperAdmin()) {
                // S'assurer qu'il a aussi le rôle ADMIN
                $roles = $user->getRoles();
                if (!in_array('ROLE_ADMIN', $roles)) {
                    $roles[] = 'ROLE_ADMIN';
                }
                $roles[] = 'ROLE_SUPER_ADMIN';
                $user->setRoles(array_unique($roles));
                $entityManager->flush();

                // Log de l'action
                $this->auditLogService->log(
                    $admin,
                    'promote_super',
                    sprintf('Promotion de l\'utilisateur %s (ID: %d) au rôle de super administrateur', $user->getUsername(), $user->getId())
                );

                $this->addFlash('success', $this->translator->trans('super_admin.flash.user_promoted_super'));
            } else {
                $this->addFlash('error', $this->translator->trans('admin.flash.user_already_super_admin'));
            }
        }

        return $this->redirectToRoute('app_super_admin_dashboard');
    }
}