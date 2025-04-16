<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminPermissionsFormType;
use App\Repository\UserRepository;
use App\Service\AdminPermissionService;
use App\Service\EmailTemplateService;
use App\Service\AuditLogService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/super-admin')]
class MainSuperAdminController extends AbstractController
{
    private UserRepository $userRepository;
    private AdminPermissionService $permissionService;
    private EntityManagerInterface $entityManager;
    private TranslatorInterface $translator;
    private EmailTemplateService $emailService;
    private AuditLogService $auditLogService;

    public function __construct(
        UserRepository $userRepository,
        AdminPermissionService $permissionService,
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        EmailTemplateService $emailService,
        AuditLogService $auditLogService
    ) {
        $this->userRepository = $userRepository;
        $this->permissionService = $permissionService;
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->emailService = $emailService;
        $this->auditLogService = $auditLogService;
    }

    #[Route('/dashboard', name: 'app_super_admin_dashboard')]
    public function dashboard(Request $request): Response
    {
        // Vérifié que l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin || !$admin->isSuperAdmin()) {
            return $this->redirectToRoute('app_login');
        }

        // Récupérer les administrateurs
        $search = $request->query->get('q', '');
        $filter = $request->query->get('filter', '');

        // Filtrer les administrateurs selon les critères
        switch ($filter) {
            case 'admins_only':
                $admins = $this->userRepository->findAdminsOnly();
                break;
            case 'super_admins':
                $admins = $this->userRepository->findSuperAdmins();
                break;
            case 'recent':
                $admins = $this->userRepository->findRecentAdmins(30); // les 30 derniers jours
                break;
            default:
                $admins = $this->userRepository->findAllAdministrators();
        }

        // Si une recherche est effectuée, filtrer les résultats
        if (!empty($search)) {
            $admins = array_filter($admins, function($admin) use ($search) {
                return (
                    stripos($admin->getEmail(), $search) !== false ||
                    stripos($admin->getFullName(), $search) !== false ||
                    stripos($admin->getUsername(), $search) !== false
                );
            });
        }

        // Recherche d'utilisateurs pour promotion si une requête est soumise
        $search_results = [];
        if ($request->query->has('q') && $request->query->get('action') === 'search_users') {
            $search_query = $request->query->get('q');
            $search_results = $this->userRepository->searchUsers($search_query);
        }

        // Statistiques
        $user_count = $this->userRepository->count([]);
        $super_admin_count = $this->userRepository->countSuperAdmins();
        
        // Nombre de permissions disponibles
        $permission_count = 6; // Nombre fixe de permissions définies dans le système

        // Logger l'accès au tableau de bord super admin
        $this->auditLogService->log(
            $admin,
            'view_super_admin_dashboard',
            'Consultation du tableau de bord super administrateur'
        );

        return $this->render('admin/super_admin/dashboard.html.twig', [
            'admins' => $admins,
            'search_results' => $search_results,
            'super_admin_count' => $super_admin_count,
            'user_count' => $user_count,
            'permission_count' => $permission_count,
            'search' => $search,
            'filter' => $filter,
        ]);
    }

    #[Route('/permissions/{id}', name: 'app_super_admin_permissions')]
    public function managePermissions(User $user, Request $request): Response
    {
        // Vérifier si l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin || !$admin->isSuperAdmin()) {
            return $this->redirectToRoute('app_login');
        }

        // Vérifier que l'utilisateur est bien un admin
        if (!$user->isAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.user_not_admin'));
            return $this->redirectToRoute('app_super_admin_dashboard');
        }
        
        // Empêcher la modification des permissions du premier super admin
        if ($user->getId() == 5 && $user->isSuperAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.cannot_edit_first_admin'));
            return $this->redirectToRoute('app_super_admin_dashboard');
        }
        
        // Récupérer les permissions actuelles de l'admin
        $adminPermissions = $this->permissionService->getAdminPermissions($user);
        
        $form = $this->createForm(AdminPermissionsFormType::class, null, [
            'permissions' => $adminPermissions,
        ]);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer les données du formulaire
            $data = $form->getData();
            
            // Mettre à jour les permissions
            $this->permissionService->updatePermissions($user, $data, $admin);
            
            // Ajouter un message flash de succès
            $this->addFlash('success', $this->translator->trans('super_admin.flash.permissions_updated'));
            
            // Log de l'action
            $this->auditLogService->log(
                $admin,
                'update_permissions',
                sprintf('Mise à jour des permissions de l\'administrateur %s (ID: %d)', $user->getUsername(), $user->getId())
            );
            
            // Rediriger vers le tableau de bord
            return $this->redirectToRoute('app_super_admin_dashboard');
        }
        
        return $this->render('admin/super_admin/permissions.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/promote/{id}', name: 'app_super_admin_promote', methods: ['POST'])]
    public function promoteToAdmin(User $user, Request $request): Response
    {
        // Vérifier si l'utilisateur est un super admin
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
                $this->entityManager->flush();

                // Envoyer un email de notification
                $this->emailService->sendEmailToUser('role_change', $user, [
                    'previousRole' => 'Utilisateur',
                    'newRole' => 'Administrateur',
                    'promotedBy' => $admin->getFullName()
                ]);
                
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

    #[Route('/demote/{id}', name: 'app_super_admin_demote', methods: ['POST'])]
    public function demoteFromAdmin(User $user, Request $request): Response
    {
        // Vérifier si l'utilisateur est un super admin
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
                $this->entityManager->flush();

                // Envoyer un email de notification
                $this->emailService->sendEmailToUser('role_change', $user, [
                    'previousRole' => 'Administrateur',
                    'newRole' => 'Utilisateur',
                    'demotedBy' => $admin->getFullName()
                ]);
                
                // Log de l'action
                $this->auditLogService->log(
                    $admin,
                    'demote_user',
                    sprintf('Rétrogradation de l\'administrateur %s (ID: %d) au rôle d\'utilisateur', $user->getUsername(), $user->getId())
                );

                $this->addFlash('success', $this->translator->trans('super_admin.flash.admin_demoted'));
            } else {
                $this->addFlash('error', $this->translator->trans('admin.flash.cannot_demote_user'));
            }
        }

        return $this->redirectToRoute('app_super_admin_dashboard');
    }

    #[Route('/promote-super/{id}', name: 'app_super_admin_promote_super', methods: ['POST'])]
    public function promoteToSuperAdmin(User $user, Request $request): Response
    {
        // Vérifier si l'utilisateur est un super admin
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
                $this->entityManager->flush();

                // Envoyer un email de notification
                $this->emailService->sendEmailToUser('role_change', $user, [
                    'previousRole' => 'Administrateur',
                    'newRole' => 'Super Administrateur',
                    'promotedBy' => $admin->getFullName()
                ]);
                
                // Log de l'action
                $this->auditLogService->log(
                    $admin,
                    'promote_super',
                    sprintf('Promotion de l\'administrateur %s (ID: %d) au rôle de super administrateur', $user->getUsername(), $user->getId())
                );

                $this->addFlash('success', $this->translator->trans('super_admin.flash.user_promoted_super'));
            } else {
                $this->addFlash('error', $this->translator->trans('admin.flash.user_already_super_admin'));
            }
        }

        return $this->redirectToRoute('app_super_admin_dashboard');
    }

    #[Route('/demote-super/{id}', name: 'app_super_admin_demote_super', methods: ['POST'])]
    public function demoteFromSuperAdmin(User $user, Request $request): Response
    {
        // Vérifier si l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin || !$admin->isSuperAdmin()) {
            return $this->redirectToRoute('app_login');
        }

        // Empêcher la rétrogradation du premier super admin
        if ($user->getId() == 5 && $user->isSuperAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.cannot_demote_first_admin'));
            return $this->redirectToRoute('app_super_admin_dashboard');
        }

        if ($this->isCsrfTokenValid('demote-super'.$user->getId(), $request->request->get('_token'))) {
            // Ne rétrograder que s'il est super admin
            if ($user->isSuperAdmin()) {
                $roles = array_diff($user->getRoles(), ['ROLE_SUPER_ADMIN']);
                $user->setRoles($roles);
                $this->entityManager->flush();

                // Envoyer un email de notification
                $this->emailService->sendEmailToUser('role_change', $user, [
                    'previousRole' => 'Super Administrateur',
                    'newRole' => 'Administrateur',
                    'demotedBy' => $admin->getFullName()
                ]);
                
                // Log de l'action
                $this->auditLogService->log(
                    $admin,
                    'demote_super',
                    sprintf('Rétrogradation de l\'utilisateur %s (ID: %d) du rôle de super administrateur', $user->getUsername(), $user->getId())
                );

                $this->addFlash('success', $this->translator->trans('admin.flash.user_demoted_super'));
            } else {
                $this->addFlash('error', $this->translator->trans('admin.flash.user_not_super_admin'));
            }
        }

        return $this->redirectToRoute('app_super_admin_dashboard');
    }
}