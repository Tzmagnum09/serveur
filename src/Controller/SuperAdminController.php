<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminPermissionsFormType;
use App\Repository\UserRepository;
use App\Service\AdminPermissionService;
use App\Service\AuditLogService;
use App\Service\EmailTemplateService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/super-admin')]
class SuperAdminController extends AbstractController
{
    private AdminPermissionService $permissionService;
    private UserRepository $userRepository;
    private TranslatorInterface $translator;
    private EmailTemplateService $emailService;
    private AuditLogService $auditLogService;
    
    // Définir l'ID du super admin principal qui ne peut pas être modifié
    private const MAIN_SUPER_ADMIN_EMAIL = 'admin@dmqode.be';

    public function __construct(
        AdminPermissionService $permissionService,
        UserRepository $userRepository,
        TranslatorInterface $translator,
        EmailTemplateService $emailService,
        AuditLogService $auditLogService
    ) {
        $this->permissionService = $permissionService;
        $this->userRepository = $userRepository;
        $this->translator = $translator;
        $this->emailService = $emailService;
        $this->auditLogService = $auditLogService;
    }

    #[Route('', name: 'app_super_admin_dashboard')]
    public function dashboard(Request $request): Response
    {
        $admin = $this->getUser();
        
        if (!$admin || !$admin->isSuperAdmin()) {
            return $this->redirectToRoute('app_login');
        }
        
        // Paramètres de filtrage
        $filter = $request->query->get('filter', '');
        $search = $request->query->get('q', '');
        
        // Variables pour le template
        $admins = [];
        $searchResults = [];
        
        // Appliquer les filtres pour les administrateurs
        switch ($filter) {
            case 'admins_only':
                $admins = $this->userRepository->findAdminsOnly();
                break;
            case 'super_admins':
                $admins = $this->userRepository->findSuperAdmins();
                break;
            case 'recent':
                $admins = $this->userRepository->findRecentAdmins(30);
                break;
            default:
                $admins = $this->userRepository->findAllAdministrators();
        }
        
        // Recherche d'utilisateurs pour promotion (seulement si une recherche est demandée)
        if (!empty($search)) {
            $searchResults = $this->userRepository->searchUsers($search);
            
            // Filtrer pour ne garder que les utilisateurs qui ne sont pas administrateurs
            $searchResults = array_filter($searchResults, function($user) {
                return !$user->isAdmin();
            });
        }
        
        // Nombre total d'utilisateurs
        $userCount = $this->userRepository->count([]);
        
        // Nombre de super admins
        $superAdminCount = $this->userRepository->countSuperAdmins();
        
        // Nombre de permissions disponibles
        $permissionCount = count($this->permissionService->getAvailablePermissions());
        
        // Log de l'accès au tableau de bord super admin
        $this->auditLogService->log(
            $admin,
            'view_super_admin',
            'Accès au tableau de bord super admin'
        );
        
        return $this->render('super_admin/dashboard.html.twig', [
            'admins' => $admins,
            'filter' => $filter,
            'search' => $search,
            'search_results' => $searchResults,
            'user_count' => $userCount,
            'super_admin_count' => $superAdminCount,
            'permission_count' => $permissionCount,
        ]);
    }

    #[Route('/permissions/{id}', name: 'app_super_admin_permissions')]
    public function managePermissions(User $user, Request $request, EntityManagerInterface $entityManager): Response
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
        
        // Empêcher la modification des permissions du super admin principal
        if ($user->getEmail() === self::MAIN_SUPER_ADMIN_EMAIL) {
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
        
        return $this->render('super_admin/permissions.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'permissions' => $adminPermissions,
        ]);
    }
    
    #[Route('/promote/{id}', name: 'app_super_admin_promote', methods: ['POST'])]
    public function promoteToAdmin(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin || !$admin->isSuperAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.no_permission'));
            return $this->redirectToRoute('app_super_admin_dashboard');
        }

        if ($this->isCsrfTokenValid('promote'.$user->getId(), $request->request->get('_token'))) {
            // Ne pas promouvoir un utilisateur qui a déjà le rôle Admin
            if (!$user->isAdmin()) {
                $roles = $user->getRoles();
                $roles[] = 'ROLE_ADMIN';
                $user->setRoles(array_unique($roles));
                $entityManager->flush();

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

        return $this->redirectToRoute('app_super_admin_dashboard', ['q' => $request->query->get('q')]);
    }

    #[Route('/demote/{id}', name: 'app_super_admin_demote', methods: ['POST'])]
    public function demoteFromAdmin(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin || !$admin->isSuperAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.no_permission'));
            return $this->redirectToRoute('app_super_admin_dashboard');
        }

        // Empêcher la rétrogradation du super admin principal
        if ($user->getEmail() === self::MAIN_SUPER_ADMIN_EMAIL) {
            $this->addFlash('error', $this->translator->trans('admin.flash.cannot_demote_first_admin'));
            return $this->redirectToRoute('app_super_admin_dashboard');
        }

        if ($this->isCsrfTokenValid('demote'.$user->getId(), $request->request->get('_token'))) {
            // Ne rétrograder que s'il est admin mais pas super admin
            if ($user->isAdmin() && !$user->isSuperAdmin()) {
                $roles = array_diff($user->getRoles(), ['ROLE_ADMIN']);
                $user->setRoles($roles);
                $entityManager->flush();

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
                    sprintf('Rétrogradation de l\'utilisateur %s (ID: %d) du rôle d\'administrateur', $user->getUsername(), $user->getId())
                );

                $this->addFlash('success', $this->translator->trans('super_admin.flash.admin_demoted'));
            } else {
                $this->addFlash('error', $this->translator->trans('admin.flash.cannot_demote_user'));
            }
        }

        return $this->redirectToRoute('app_super_admin_dashboard');
    }

    #[Route('/promote-super/{id}', name: 'app_super_admin_promote_super', methods: ['POST'])]
    public function promoteToSuperAdmin(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin || !$admin->isSuperAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.no_permission'));
            return $this->redirectToRoute('app_super_admin_dashboard');
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
                    sprintf('Promotion de l\'utilisateur %s (ID: %d) au rôle de super administrateur', $user->getUsername(), $user->getId())
                );

                $this->addFlash('success', $this->translator->trans('super_admin.flash.user_promoted_super'));
            } else {
                $this->addFlash('error', $this->translator->trans('admin.flash.user_already_super_admin'));
            }
        }

        return $this->redirectToRoute('app_super_admin_dashboard');
    }

    #[Route('/demote-super/{id}', name: 'app_super_admin_demote_super', methods: ['POST'])]
    public function demoteFromSuperAdmin(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin || !$admin->isSuperAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.no_permission'));
            return $this->redirectToRoute('app_super_admin_dashboard');
        }

        // Empêcher la rétrogradation du super admin principal
        if ($user->getEmail() === self::MAIN_SUPER_ADMIN_EMAIL) {
            $this->addFlash('error', $this->translator->trans('admin.flash.cannot_demote_first_admin'));
            return $this->redirectToRoute('app_super_admin_dashboard');
        }

        if ($this->isCsrfTokenValid('demote-super'.$user->getId(), $request->request->get('_token'))) {
            // Ne rétrograder que s'il est super admin
            if ($user->isSuperAdmin()) {
                $roles = array_diff($user->getRoles(), ['ROLE_SUPER_ADMIN']);
                $user->setRoles($roles);
                $entityManager->flush();

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

                $this->addFlash('success', $this->translator->trans('super_admin.flash.user_demoted_super'));
            } else {
                $this->addFlash('error', $this->translator->trans('admin.flash.user_not_super_admin'));
            }
        }

        return $this->redirectToRoute('app_super_admin_dashboard');
    }
}