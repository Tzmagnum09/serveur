<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminPermissionsFormType;
use App\Repository\UserRepository;
use App\Service\AdminPermissionService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/super-admin')]
class SuperAdminController extends AbstractController
{
    private AdminPermissionService $permissionService;
    
    public function __construct(AdminPermissionService $permissionService)
    {
        $this->permissionService = $permissionService;
    }
    
    #[Route('', name: 'app_super_admin_dashboard')]
    public function dashboard(UserRepository $userRepository): Response
    {
        $user = $this->getUser();
        
        if (!$user || !$user->isSuperAdmin()) {
            return $this->redirectToRoute('app_login');
        }
        
        // Get all admins (excluding super admins)
        $admins = $userRepository->findAdmins();
        
        // Calculer le nombre de super admins dynamiquement
        $super_admin_count = $userRepository->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.roles LIKE :role')
            ->setParameter('role', '%"ROLE_SUPER_ADMIN"%')
            ->getQuery()
            ->getSingleScalarResult();
        
        // Calculer le nombre total d'utilisateurs
        $user_count = $userRepository->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->getQuery()
            ->getSingleScalarResult();
        
        // Récupérer le nombre de permissions disponibles
        $permission_count = count($this->permissionService->getAvailablePermissions());
        
        return $this->render('super_admin/dashboard.html.twig', [
            'admins' => $admins,
            'user_count' => $user_count,
            'super_admin_count' => $super_admin_count,
            'permission_count' => $permission_count,
        ]);
    }
    
    #[Route('/admin/{id}/promote', name: 'app_super_admin_promote', methods: ['POST'])]
    public function promoteToAdmin(
        Request $request,
        User $user,
        UserRepository $userRepository,
        TranslatorInterface $translator
    ): Response {
        $admin = $this->getUser();
        
        if (!$admin || !$admin->isSuperAdmin()) {
            return $this->redirectToRoute('app_login');
        }
        
        if ($this->isCsrfTokenValid('promote'.$user->getId(), $request->request->get('_token'))) {
            // Add ROLE_ADMIN to the user's roles
            $roles = $user->getRoles();
            if (!in_array('ROLE_ADMIN', $roles)) {
                $roles[] = 'ROLE_ADMIN';
                $user->setRoles($roles);
                $userRepository->save($user, true);
                
                $this->addFlash('success', $translator->trans('super_admin.flash.user_promoted'));
            }
        }
        
        // Redirect back to the referring page
        $referer = $request->headers->get('referer');
        if ($referer) {
            return $this->redirect($referer);
        }
        
        return $this->redirectToRoute('app_super_admin_dashboard');
    }
    
    #[Route('/admin/{id}/demote', name: 'app_super_admin_demote', methods: ['POST'])]
    public function demoteAdmin(
        Request $request,
        User $user,
        UserRepository $userRepository,
        TranslatorInterface $translator
    ): Response {
        $admin = $this->getUser();
        
        if (!$admin || !$admin->isSuperAdmin()) {
            return $this->redirectToRoute('app_login');
        }
        
        if ($this->isCsrfTokenValid('demote'.$user->getId(), $request->request->get('_token'))) {
            // Remove ROLE_ADMIN from the user's roles
            $roles = array_filter($user->getRoles(), function($role) {
                return $role !== 'ROLE_ADMIN';
            });
            
            $user->setRoles($roles);
            $userRepository->save($user, true);
            
            $this->addFlash('success', $translator->trans('super_admin.flash.admin_demoted'));
        }
        
        // Redirect back to the referring page
        $referer = $request->headers->get('referer');
        if ($referer) {
            return $this->redirect($referer);
        }
        
        return $this->redirectToRoute('app_super_admin_dashboard');
    }
    
    #[Route('/admin/{id}/permissions', name: 'app_super_admin_permissions')]
    public function managePermissions(
        User $user,
        Request $request,
        TranslatorInterface $translator
    ): Response {
        $admin = $this->getUser();
        
        if (!$admin || !$admin->isSuperAdmin()) {
            return $this->redirectToRoute('app_login');
        }
        
        // Check if user is an admin
        if (!$user->isAdmin() || $user->isSuperAdmin()) {
            $this->addFlash('error', 'Vous ne pouvez gérer que les permissions des administrateurs.');
            return $this->redirectToRoute('app_super_admin_dashboard');
        }
        
        // Get current permissions
        $permissions = $this->permissionService->getAdminPermissions($user);
        
        $form = $this->createForm(AdminPermissionsFormType::class, null, [
            'permissions' => $permissions,
        ]);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            
            // Update permissions
            foreach ($permissions as $code => $permission) {
                $this->permissionService->setPermission(
                    $user,
                    $code,
                    isset($data[$code]) && $data[$code]
                );
            }
            
            $this->addFlash('success', $translator->trans('super_admin.flash.permissions_updated'));
            
            return $this->redirectToRoute('app_super_admin_dashboard');
        }
        
        return $this->render('super_admin/permissions.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
    
    #[Route('/promote/{id}/super-admin', name: 'app_super_admin_promote_super', methods: ['POST'])]
    public function promoteToSuperAdmin(
        Request $request,
        User $user,
        UserRepository $userRepository,
        TranslatorInterface $translator
    ): Response {
        $admin = $this->getUser();
        
        if (!$admin || !$admin->isSuperAdmin()) {
            return $this->redirectToRoute('app_login');
        }
        
        if ($this->isCsrfTokenValid('promote-super'.$user->getId(), $request->request->get('_token'))) {
            // Add ROLE_SUPER_ADMIN to the user's roles
            $roles = $user->getRoles();
            if (!in_array('ROLE_SUPER_ADMIN', $roles)) {
                $roles[] = 'ROLE_SUPER_ADMIN';
                $user->setRoles($roles);
                $userRepository->save($user, true);
                
                $this->addFlash('success', $translator->trans('super_admin.flash.user_promoted_super'));
            }
        }
        
        // Redirect back to the referring page
        $referer = $request->headers->get('referer');
        if ($referer) {
            return $this->redirect($referer);
        }
        
        return $this->redirectToRoute('app_super_admin_dashboard');
    }
}