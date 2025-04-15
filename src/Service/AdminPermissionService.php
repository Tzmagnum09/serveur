<?php

namespace App\Service;

use App\Entity\AdminPermission;
use App\Entity\User;
use App\Repository\AdminPermissionRepository;
use Doctrine\ORM\EntityManagerInterface;

class AdminPermissionService
{
    private AdminPermissionRepository $permissionRepository;
    private EntityManagerInterface $entityManager;
    private EmailTemplateService $emailService;
    private AuditLogService $auditLogService;
    
    // Liste des permissions disponibles
    private const AVAILABLE_PERMISSIONS = [
        'manage_users' => 'Gérer les utilisateurs',
        'approve_users' => 'Approuver les nouveaux utilisateurs',
        'edit_email_templates' => 'Éditer les templates d\'emails',
        'preview_email_templates' => 'Prévisualiser les templates d\'emails',
        'translate_content' => 'Traduire le contenu du site',
        'view_audit_logs' => 'Consulter les logs d\'audit'
    ];

    public function __construct(
        AdminPermissionRepository $permissionRepository,
        EntityManagerInterface $entityManager,
        EmailTemplateService $emailService,
        AuditLogService $auditLogService
    ) {
        $this->permissionRepository = $permissionRepository;
        $this->entityManager = $entityManager;
        $this->emailService = $emailService;
        $this->auditLogService = $auditLogService;
    }

    /**
     * Vérifie si un admin a une permission spécifique
     */
    public function hasPermission(User $admin, string $permission): bool
    {
        // Les super admins ont toutes les permissions
        if ($admin->isSuperAdmin()) {
            return true;
        }

        // Vérifier si l'utilisateur est un admin
        if (!$admin->isAdmin()) {
            return false;
        }

        // Vérifier si la permission existe
        return $this->permissionRepository->hasPermission($admin, $permission);
    }

    /**
     * Récupère toutes les permissions d'un admin avec leur état
     */
    public function getAdminPermissions(User $admin): array
    {
        // Récupérer les permissions existantes de l'admin
        $permissions = $this->permissionRepository->findByAdmin($admin);
        
        // Initialiser le tableau de retour avec toutes les permissions disponibles
        $result = [];
        
        foreach (self::AVAILABLE_PERMISSIONS as $code => $label) {
            $result[$code] = [
                'label' => $label,
                'granted' => isset($permissions[$code]) ? $permissions[$code] : false,
            ];
        }
        
        return $result;
    }

    /**
     * Définit une permission pour un admin
     */
    public function setPermission(User $admin, string $permission, bool $isGranted, User $grantedBy): bool
    {
        // Vérifier si la permission est valide
        if (!array_key_exists($permission, self::AVAILABLE_PERMISSIONS)) {
            return false;
        }
        
        // Vérifier que l'utilisateur est bien un admin
        if (!$admin->isAdmin()) {
            return false;
        }
        
        // Mettre à jour ou créer la permission
        $this->permissionRepository->setPermission($admin, $permission, $isGranted);
        
        // Journaliser l'action
        $actionType = $isGranted ? 'granted' : 'revoked';
        $this->auditLogService->log(
            $grantedBy,
            'permission_' . $actionType,
            sprintf(
                'Permission "%s" %s pour l\'administrateur %s (ID: %d)',
                $permission,
                $isGranted ? 'accordée' : 'révoquée',
                $admin->getUsername(),
                $admin->getId()
            )
        );
        
        // Envoyer une notification par email
        $this->emailService->sendEmailToUser('permission_update', $admin, [
            'permissionName' => self::AVAILABLE_PERMISSIONS[$permission],
            'isGranted' => $isGranted,
            'grantedBy' => $grantedBy->getFullName()
        ]);
        
        return true;
    }

    /**
     * Met à jour les permissions d'un admin
     */
    public function updatePermissions(User $admin, array $permissions, User $grantedBy): void
    {
        foreach ($permissions as $permission => $isGranted) {
            $this->setPermission($admin, $permission, (bool)$isGranted, $grantedBy);
        }
    }

    /**
     * Récupère la liste des permissions disponibles
     */
    public function getAvailablePermissions(): array
    {
        return self::AVAILABLE_PERMISSIONS;
    }
}