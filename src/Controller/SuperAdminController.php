<?php

namespace App\Controller\Admin;

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
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\SecurityBundle\Security;

#[Route('/super-admin')]
#[IsGranted('ROLE_SUPER_ADMIN')]
class SuperAdminController extends AbstractController
{
    private UserRepository $userRepository;
    private AdminPermissionService $permissionService;
    private TranslatorInterface $translator;
    private AuditLogService $auditLogService;
    private EmailTemplateService $emailService;
    private Security $security;

    public function __construct(
        UserRepository $userRepository,
        AdminPermissionService $permissionService,
        TranslatorInterface $translator,
        AuditLogService $auditLogService,
        EmailTemplateService $emailService,
        Security $security
    ) {
        $this->userRepository = $userRepository;
        $this->permissionService = $permissionService;
        $this->translator = $translator;
        $this->auditLogService = $auditLogService;
        $this->emailService = $emailService;
        $this->security = $security;
    }

    #[Route('', name: 'app_super_admin_dashboard')]
    public function dashboard(Request $request): Response
    {
        // Récupérer les paramètres de requête
        $search = $request->query->get('q');
        $filter = $request->query->get('filter');
        
        // Récupérer les administrateurs en fonction des filtres
        $admins = [];
        switch ($filter) {
            case 'admins_only':
                // Uniquement les admins (pas super-admins)
                $admins = $this->userRepository->findAdminsOnly();
                break;
            case 'super_admins':
                // Uniquement les super-admins
                $admins = $this->userRepository->findSuperAdmins();
                break;
            case 'recent':
                // Admins récemment créés (30 derniers jours)
                $admins = $this->userRepository->findRecentAdmins(30);
                break;
            default:
                // Tous les admins et super-admins
                $admins = $this->userRepository->findAllAdministrators();
                break;
        }
        
        // Recherche d'utilisateurs à promouvoir
        $searchResults = null;
        if ($search) {
            $searchResults = $this->userRepository->searchUsers($search);
        }
        
        // Statistiques
        $userCount = $this->userRepository->count([]);
        $superAdminCount = $this->userRepository->countSuperAdmins();
        $permissionCount = count($this->permissionService->getAllPermissionTypes());

        // Log l'accès au dashboard
        $this->auditLogService->log(
            $this->getUser(),
            'view_super_admin_dashboard',
            'Accès au dashboard super admin'
        );

        return $this->render('admin/super_admin/dashboard.html.twig', [
            'admins' => $admins,
            'user_count' => $userCount,
            'super_admin_count' => $superAdminCount,
            'permission_count' => $permissionCount,
            'search' => $search,
            'search_results' => $searchResults,
            'filter' => $filter,
        ]);
    }

    #[Route('/permissions/{id}', name: 'app_super_admin_permissions')]
    public function permissions(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier que l'utilisateur est un admin
        if (!$user->isAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.user_not_admin'));
            return $this->redirectToRoute('app_super_admin_dashboard');
        }

        // Empêcher la modification des permissions du premier super admin
        if ($user->getId() === 5 && $user->isSuperAdmin()) {
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
            $this->permissionService->updatePermissions($user, $data, $this->getUser());
            
            // Ajouter un message flash de succès
            $this->addFlash('success', $this->translator->trans('super_admin.flash.permissions_updated'));
            
            // Log de l'action
            $this->auditLogService->log(
                $this->getUser(),
                'update_permissions',
                sprintf('Mise à jour des permissions de l\'administrateur %s (ID: %d)', $user->getUsername(), $user->getId())
            );
            
            // Rediriger vers le dashboard
            return $this->redirectToRoute('app_super_admin_dashboard');
        }
        
        return $this->render('admin/super_admin/permissions.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/promote/{id}', name: 'app_super_admin_promote', methods: ['POST'])]
    public function promoteToAdmin(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
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
                    'promotedBy' => $this->getUser()->getFullName()
                ]);
                
                // Log de l'action
                $this->auditLogService->log(
                    $this->getUser(),
                    'promote_user',
                    sprintf('Promotion de l\'utilisateur %s (ID: %d) au rôle d\'administrateur', $user->getUsername(), $user->getId())
                );

                $this->addFlash('success', $this->translator->trans('super_admin.flash.user_promoted'));
            } else {
                $this->addFlash('error', $this->translator->trans('admin.flash.user_already_admin'));
            }
        }

        // Revenir en arrière avec les mêmes paramètres de recherche
        $referer = $request->headers->get('referer');
        return $referer ? $this->redirect($referer) : $this->redirectToRoute('app_super_admin_dashboard');
    }

    #[Route('/demote/{id}', name: 'app_super_admin_demote', methods: ['POST'])]
    public function demoteFromAdmin(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Empêcher la rétrogradation du premier super admin
        if ($user->getId() === 5 && $user->isSuperAdmin()) {
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
                    'demotedBy' => $this->getUser()->getFullName()
                ]);
                
                // Log de l'action
                $this->auditLogService->log(
                    $this->getUser(),
                    'demote_user',
                    sprintf('Rétrogradation de l\'administrateur %s (ID: %d)', $user->getUsername(), $user->getId())
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
        if ($this->isCsrfTokenValid('promote-super'.$user->getId(), $request->request->get('_token'))) {
            // Ne promouvoir en super admin que s'il est déjà admin et pas déjà super admin
            if ($user->isAdmin() && !$user->isSuperAdmin()) {
                $roles = $user->getRoles();
                $roles[] = 'ROLE_SUPER_ADMIN';
                $user->setRoles(array_unique($roles));
                $entityManager->flush();
                
                // Envoyer un email de notification
                $this->emailService->sendEmailToUser('role_change', $user, [
                    'previousRole' => 'Administrateur',
                    'newRole' => 'Super Administrateur',
                    'promotedBy' => $this->getUser()->getFullName()
                ]);
                
                // Log de l'action
                $this->auditLogService->log(
                    $this->getUser(),
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
}