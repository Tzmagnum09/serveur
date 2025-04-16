<?php

namespace App\Service;

use App\Entity\AdminPermission;
use App\Entity\User;
use App\Repository\AdminPermissionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class AdminPermissionService
{
    private AdminPermissionRepository $permissionRepository;
    private EntityManagerInterface $entityManager;
    private EmailTemplateService $emailService;
    private AuditLogService $auditLogService;
    private TranslatorInterface $translator;
    
    // Liste des permissions disponibles avec leurs clés de traduction
    private const AVAILABLE_PERMISSIONS = [
        'manage_users' => 'permissions.manage_users',
        'approve_users' => 'permissions.approve_users',
        'edit_email_templates' => 'permissions.edit_email_templates',
        'preview_email_templates' => 'permissions.preview_email_templates',
        'translate_content' => 'permissions.translate_content',
        'view_audit_logs' => 'permissions.view_audit_logs'
    ];

    public function __construct(
        AdminPermissionRepository $permissionRepository,
        EntityManagerInterface $entityManager,
        EmailTemplateService $emailService,
        AuditLogService $auditLogService,
        TranslatorInterface $translator
    ) {
        $this->permissionRepository = $permissionRepository;
        $this->entityManager = $entityManager;
        $this->emailService = $emailService;
        $this->auditLogService = $auditLogService;
        $this->translator = $translator;
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
        
        foreach (self::AVAILABLE_PERMISSIONS as $code => $translationKey) {
            $result[$code] = [
                'label' => $this->translator->trans($translationKey),
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
            'permissionName' => $this->translator->trans(self::AVAILABLE_PERMISSIONS[$permission]),
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
        $result = [];
        foreach (self::AVAILABLE_PERMISSIONS as $code => $translationKey) {
            $result[$code] = $this->translator->trans($translationKey);
        }
        return $result;
    }
}