<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\UserEditType;
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

#[Route('/admin/users')]
class UserController extends AbstractController
{
    private UserRepository $userRepository;
    private AdminPermissionService $permissionService;
    private TranslatorInterface $translator;
    private EmailTemplateService $emailService;
    private AuditLogService $auditLogService;

    public function __construct(
        UserRepository $userRepository,
        AdminPermissionService $permissionService,
        TranslatorInterface $translator,
        EmailTemplateService $emailService,
        AuditLogService $auditLogService
    ) {
        $this->userRepository = $userRepository;
        $this->permissionService = $permissionService;
        $this->translator = $translator;
        $this->emailService = $emailService;
        $this->auditLogService = $auditLogService;
    }

    #[Route('', name: 'app_admin_users')]
    public function index(Request $request): Response
    {
        // Vérifier si l'utilisateur a la permission de gérer les utilisateurs
        $admin = $this->getUser();
        if (!$admin->isSuperAdmin() && !$this->permissionService->hasPermission($admin, 'manage_users')) {
            $this->addFlash('error', $this->translator->trans('admin.flash.no_permission'));
            return $this->redirectToRoute('app_admin_dashboard');
        }

        // Récupérer les paramètres de filtrage et de recherche
        $filter = $request->query->get('filter', '');
        $search = $request->query->get('q', '');
        $sortField = $request->query->get('sort', 'createdAt');
        $sortDirection = $request->query->get('direction', 'DESC');

        // Construire la requête avec les filtres et la recherche
        $queryBuilder = $this->userRepository->createQueryBuilder('u');

        // Appliquer la recherche si présente
        if (!empty($search)) {
            $queryBuilder
                ->where('u.email LIKE :search')
                ->orWhere('u.username LIKE :search')
                ->orWhere('u.firstName LIKE :search')
                ->orWhere('u.lastName LIKE :search')
                ->orWhere('CONCAT(u.firstName, \' \', u.lastName) LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        // Appliquer le filtre si présent
        switch ($filter) {
            case 'verified':
                $queryBuilder->andWhere('u.isVerified = true');
                break;
            case 'unverified':
                $queryBuilder->andWhere('u.isVerified = false');
                break;
            case 'approved':
                $queryBuilder->andWhere('u.isApproved = true');
                break;
            case 'pending':
                $queryBuilder->andWhere('u.isVerified = true AND u.isApproved = false');
                break;
            case 'admins':
                $queryBuilder->andWhere('JSON_CONTAINS(u.roles, :role) = 1')
                    ->setParameter('role', '"ROLE_ADMIN"');
                break;
            case 'super_admins':
                $queryBuilder->andWhere('JSON_CONTAINS(u.roles, :role) = 1')
                    ->setParameter('role', '"ROLE_SUPER_ADMIN"');
                break;
            case 'users':
                $queryBuilder->andWhere('JSON_CONTAINS(u.roles, :role) = 0 AND JSON_CONTAINS(u.roles, :role2) = 0')
                    ->setParameter('role', '"ROLE_ADMIN"')
                    ->setParameter('role2', '"ROLE_SUPER_ADMIN"');
                break;
        }

        // Appliquer le tri
        $queryBuilder->orderBy('u.' . $sortField, $sortDirection);

        $users = $queryBuilder->getQuery()->getResult();

        // Log des vues des utilisateurs par l'admin
        $this->auditLogService->log(
            $admin,
            'view_users',
            'Consultation de la liste des utilisateurs avec filtre: ' . $filter . ', recherche: ' . $search
        );

        return $this->render('admin/users.html.twig', [
            'users' => $users,
            'filter' => $filter,
            'search' => $search,
            'sort' => $sortField,
            'direction' => $sortDirection,
            'permission_service' => $this->permissionService,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_user_edit')]
    public function edit(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur a la permission de gérer les utilisateurs
        $admin = $this->getUser();
        if (!$admin->isSuperAdmin() && !$this->permissionService->hasPermission($admin, 'manage_users')) {
            $this->addFlash('error', $this->translator->trans('admin.flash.no_permission'));
            return $this->redirectToRoute('app_admin_dashboard');
        }

        // Empêcher la modification du premier super admin sauf par lui-même
        if ($user->getId() == 5 && $user->isSuperAdmin() && $admin->getId() != 5) {
            $this->addFlash('error', $this->translator->trans('admin.flash.cannot_edit_first_admin'));
            return $this->redirectToRoute('app_admin_users');
        }

        // Créer le formulaire
        $form = $this->createForm(UserEditType::class, $user, [
            'is_admin' => true,
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Si l'utilisateur est approuvé mais que la date d'approbation n'est pas définie
            if ($user->isApproved() && $user->getApprovedAt() === null) {
                $user->setApprovedAt(new \DateTimeImmutable());
                
                // Envoyer un email de notification
                $this->emailService->sendEmailToUser('account_approved', $user);
                
                // Log de l'action
                $this->auditLogService->log(
                    $admin,
                    'approve_user',
                    sprintf('Approbation de l\'utilisateur %s (ID: %d)', $user->getUsername(), $user->getId())
                );
            }
            
            // Traitement manuel de la date de naissance
            $birthDateStr = $request->request->get('birth_date');
            if (!empty($birthDateStr)) {
                try {
                    $birthDate = \DateTime::createFromFormat('d/m/Y', $birthDateStr);
                    if ($birthDate) {
                        $user->setBirthDate($birthDate);
                    }
                } catch (\Exception $e) {
                    // En cas d'erreur, on ne fait rien
                }
            } else {
                // Si le champ est vide, on met la date de naissance à null
                $user->setBirthDate(null);
            }

            $entityManager->flush();
            
            // Log de l'action
            $this->auditLogService->log(
                $admin,
                'edit_user',
                sprintf('Modification de l\'utilisateur %s (ID: %d)', $user->getUsername(), $user->getId())
            );

            $this->addFlash('success', $this->translator->trans('admin.flash.user_updated'));
            return $this->redirectToRoute('app_admin_users');
        }

        // Log de l'action
        $this->auditLogService->log(
            $admin,
            'view_user_edit',
            sprintf('Consultation du formulaire d\'édition de l\'utilisateur %s (ID: %d)', $user->getUsername(), $user->getId())
        );

        return $this->render('admin/user_edit.html.twig', [
            'userForm' => $form->createView(),
            'user' => $user,
            'permission_service' => $this->permissionService,
        ]);
    }

    #[Route('/{id}/approve', name: 'app_admin_user_approve', methods: ['POST'])]
    public function approve(User $user, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur a la permission d'approuver les utilisateurs
        $admin = $this->getUser();
        if (!$admin->isSuperAdmin() && !$this->permissionService->hasPermission($admin, 'approve_users')) {
            $this->addFlash('error', $this->translator->trans('admin.flash.no_permission'));
            return $this->redirectToRoute('app_admin_users');
        }

        // Vérifier si l'utilisateur est vérifié mais pas approuvé
        if ($user->isVerified() && !$user->isApproved()) {
            $user->setIsApproved(true);
            $user->setApprovedAt(new \DateTimeImmutable());
            $entityManager->flush();

            // Envoyer un email de notification
            $this->emailService->sendEmailToUser('account_approved', $user);
            
            // Log de l'action
            $this->auditLogService->log(
                $admin,
                'approve_user',
                sprintf('Approbation de l\'utilisateur %s (ID: %d)', $user->getUsername(), $user->getId())
            );

            $this->addFlash('success', $this->translator->trans('admin.flash.user_approved'));
        } else {
            $this->addFlash('error', $this->translator->trans('admin.flash.user_already_approved'));
        }

        return $this->redirectToRoute('app_admin_users');
    }

    #[Route('/{id}/promote-admin', name: 'app_admin_user_promote', methods: ['POST'])]
    public function promoteToAdmin(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin->isSuperAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.no_permission'));
            return $this->redirectToRoute('app_admin_users');
        }

        if ($this->isCsrfTokenValid('promote'.$user->getId(), $request->request->get('_token'))) {
            // Ne pas promouvoir un utilisateur qui a déjà le rôle Admin
            if (!$user->isAdmin()) {
                $user->addRole('ROLE_ADMIN');
                $entityManager->flush();

                // Envoyer un email de notification
                $this->emailService->sendEmailToUser('role_change', $user, [
                    'newRole' => 'Administrateur',
                    'promotedBy' => $admin->getFullName()
                ]);
                
                // Log de l'action
                $this->auditLogService->log(
                    $admin,
                    'promote_user',
                    sprintf('Promotion de l\'utilisateur %s (ID: %d) au rôle d\'administrateur', $user->getUsername(), $user->getId())
                );

                $this->addFlash('success', $this->translator->trans('admin.flash.user_promoted'));
            } else {
                $this->addFlash('error', $this->translator->trans('admin.flash.user_already_admin'));
            }
        }

        return $this->redirectToRoute('app_admin_users');
    }

    #[Route('/{id}/demote-admin', name: 'app_admin_user_demote', methods: ['POST'])]
    public function demoteFromAdmin(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin->isSuperAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.no_permission'));
            return $this->redirectToRoute('app_admin_users');
        }

        // Empêcher la rétrogradation du premier super admin
        if ($user->getId() == 5 && $user->isSuperAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.cannot_demote_first_admin'));
            return $this->redirectToRoute('app_admin_users');
        }

        if ($this->isCsrfTokenValid('demote'.$user->getId(), $request->request->get('_token'))) {
            // Ne rétrograder que s'il est admin mais pas super admin
            if ($user->isAdmin() && !$user->isSuperAdmin()) {
                $user->removeRole('ROLE_ADMIN');
                $entityManager->flush();

                // Envoyer un email de notification
                $this->emailService->sendEmailToUser('role_change', $user, [
                    'newRole' => 'Utilisateur',
                    'demotedBy' => $admin->getFullName()
                ]);
                
                // Log de l'action
                $this->auditLogService->log(
                    $admin,
                    'demote_user',
                    sprintf('Rétrogradation de l\'utilisateur %s (ID: %d) du rôle d\'administrateur', $user->getUsername(), $user->getId())
                );

                $this->addFlash('success', $this->translator->trans('admin.flash.user_demoted'));
            } else {
                $this->addFlash('error', $this->translator->trans('admin.flash.cannot_demote_user'));
            }
        }

        return $this->redirectToRoute('app_admin_users');
    }

    #[Route('/{id}/promote-super', name: 'app_admin_user_promote_super', methods: ['POST'])]
    public function promoteToSuperAdmin(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin->isSuperAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.no_permission'));
            return $this->redirectToRoute('app_admin_users');
        }

        if ($this->isCsrfTokenValid('promote-super'.$user->getId(), $request->request->get('_token'))) {
            // Ne pas promouvoir un utilisateur qui a déjà le rôle Super Admin
            if (!$user->isSuperAdmin()) {
                // S'assurer qu'il a aussi le rôle ADMIN
                if (!$user->isAdmin()) {
                    $user->addRole('ROLE_ADMIN');
                }
                $user->addRole('ROLE_SUPER_ADMIN');
                $entityManager->flush();

                // Envoyer un email de notification
                $this->emailService->sendEmailToUser('role_change', $user, [
                    'newRole' => 'Super Administrateur',
                    'promotedBy' => $admin->getFullName()
                ]);
                
                // Log de l'action
                $this->auditLogService->log(
                    $admin,
                    'promote_super',
                    sprintf('Promotion de l\'utilisateur %s (ID: %d) au rôle de super administrateur', $user->getUsername(), $user->getId())
                );

                $this->addFlash('success', $this->translator->trans('admin.flash.user_promoted_super'));
            } else {
                $this->addFlash('error', $this->translator->trans('admin.flash.user_already_super_admin'));
            }
        }

        return $this->redirectToRoute('app_admin_users');
    }

    #[Route('/{id}/demote-super', name: 'app_admin_user_demote_super', methods: ['POST'])]
    public function demoteFromSuperAdmin(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin->isSuperAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.no_permission'));
            return $this->redirectToRoute('app_admin_users');
        }

        // Empêcher la rétrogradation du premier super admin
        if ($user->getId() == 5 && $user->isSuperAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.cannot_demote_first_admin'));
            return $this->redirectToRoute('app_admin_users');
        }

        if ($this->isCsrfTokenValid('demote-super'.$user->getId(), $request->request->get('_token'))) {
            // Ne rétrograder que s'il est super admin
            if ($user->isSuperAdmin()) {
                $user->removeRole('ROLE_SUPER_ADMIN');
                $entityManager->flush();

                // Envoyer un email de notification
                $this->emailService->sendEmailToUser('role_change', $user, [
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

        return $this->redirectToRoute('app_admin_users');
    }
}