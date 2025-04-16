<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\AdminPermissionsFormType;
use App\Service\AdminPermissionService;
use App\Service\AuditLogService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/admin/users')]
class UserPermissionsController extends AbstractController
{
    private AdminPermissionService $permissionService;
    private TranslatorInterface $translator;
    private AuditLogService $auditLogService;
    
    // Définir l'email du super admin principal qui ne peut pas être modifié
    private const MAIN_SUPER_ADMIN_EMAIL = 'admin@dmqode.be';

    public function __construct(
        AdminPermissionService $permissionService,
        TranslatorInterface $translator,
        AuditLogService $auditLogService
    ) {
        $this->permissionService = $permissionService;
        $this->translator = $translator;
        $this->auditLogService = $auditLogService;
    }

    #[Route('/{id}/permissions', name: 'app_admin_user_permissions')]
    public function managePermissions(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur est un super admin
        $admin = $this->getUser();
        if (!$admin->isSuperAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.no_permission'));
            return $this->redirectToRoute('app_admin_users');
        }

        // Vérifier que l'utilisateur est bien un admin
        if (!$user->isAdmin()) {
            $this->addFlash('error', $this->translator->trans('admin.flash.user_not_admin'));
            return $this->redirectToRoute('app_admin_users');
        }
        
        // Empêcher la modification des permissions du super admin principal
        if ($user->getEmail() === self::MAIN_SUPER_ADMIN_EMAIL) {
            $this->addFlash('error', $this->translator->trans('admin.flash.cannot_edit_first_admin'));
            return $this->redirectToRoute('app_admin_users');
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
            $this->addFlash('success', $this->translator->trans('admin.flash.permissions_updated'));
            
            // Log de l'action
            $this->auditLogService->log(
                $admin,
                'update_permissions',
                sprintf('Mise à jour des permissions de l\'administrateur %s (ID: %d)', $user->getUsername(), $user->getId())
            );
            
            // Rediriger vers la liste des utilisateurs
            return $this->redirectToRoute('app_admin_users');
        }
        
        return $this->render('admin/user_permissions.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'permissions' => $adminPermissions,
            'permission_service' => $this->permissionService,
        ]);
    }
}