<?php

namespace App\Service;

use App\Entity\AuditLog;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class AuditLogService
{
    private EntityManagerInterface $entityManager;
    private RequestStack $requestStack;
    
    public function __construct(
        EntityManagerInterface $entityManager,
        RequestStack $requestStack
    ) {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack;
    }
    
    /**
     * Enregistre une action d'un utilisateur dans les logs d'audit
     */
    public function log(User $user, string $action, string $details = ''): void
    {
        try {
            $log = new AuditLog();
            $log->setUser($user);
            $log->setAction($action);
            // S'assurer que le texte est bien encodé en UTF-8
            $log->setDetails(mb_convert_encoding($details, 'UTF-8', 'UTF-8'));
            $log->setIpAddress($this->getClientIp());
            $log->setCreatedAt(new \DateTimeImmutable());
            
            $this->entityManager->persist($log);
            $this->entityManager->flush();
        } catch (\Exception $e) {
            // Logguer l'erreur mais ne pas interrompre l'exécution
            error_log('Erreur lors de l\'enregistrement du log d\'audit: ' . $e->getMessage());
        }
    }
    
    /**
     * Récupère l'adresse IP du client
     */
    private function getClientIp(): string
    {
        $request = $this->requestStack->getCurrentRequest();
        
        if (!$request) {
            return 'unknown';
        }
        
        return $request->getClientIp();
    }
}