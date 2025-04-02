<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\AdminPermissionRepository;

class AdminPermissionService
{
    private AdminPermissionRepository $permissionRepository;
    
    // Définir toutes les permissions disponibles
    private array $availablePermissions = [
        'manage_users' => 'Gérer les utilisateurs',
        'approve_users' => 'Approuver les utilisateurs',
        'edit_email_templates' => 'Éditer les templates d\'emails',
        'preview_email_templates' => 'Prévisualiser les templates d\'emails',
        'translate_content' => 'Traduire le contenu dynamique',
        'view_statistics' => 'Voir les statistiques',
    ];

    public function __construct(AdminPermissionRepository $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
    }

    /**
     * Get all available permissions
     */
    public function getAvailablePermissions(): array
    {
        return $this->availablePermissions;
    }

    /**
     * Get all permissions for a given admin
     */
    public function getAdminPermissions(User $admin): array
    {
        // Get stored permissions
        $storedPermissions = $this->permissionRepository->findByAdmin($admin);
        
        // Merge with available permissions
        $permissions = [];
        foreach ($this->availablePermissions as $code => $label) {
            $permissions[$code] = [
                'code' => $code,
                'label' => $label,
                'granted' => $storedPermissions[$code] ?? false,
            ];
        }
        
        return $permissions;
    }

    /**
     * Check if an admin has a specific permission
     */
    public function hasPermission(User $admin, string $permission): bool
    {
        // Super admin has all permissions
        if ($admin->isSuperAdmin()) {
            return true;
        }
        
        // Check if admin has the specific permission
        return $this->permissionRepository->hasPermission($admin, $permission);
    }

    /**
     * Set a permission for an admin
     */
    public function setPermission(User $admin, string $permission, bool $isGranted): void
    {
        // Validate the permission
        if (!array_key_exists($permission, $this->availablePermissions)) {
            throw new \InvalidArgumentException(sprintf('Permission "%s" is not valid', $permission));
        }
        
        $this->permissionRepository->setPermission($admin, $permission, $isGranted);
    }

    /**
     * Set multiple permissions for an admin
     */
    public function setPermissions(User $admin, array $permissions): void
    {
        foreach ($permissions as $permission => $isGranted) {
            $this->setPermission($admin, $permission, (bool) $isGranted);
        }
    }
}
