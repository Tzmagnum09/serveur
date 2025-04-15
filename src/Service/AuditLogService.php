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
        $log = new AuditLog();
        $log->setUser($user);
        $log->setAction($action);
        $log->setDetails($details);
        $log->setIpAddress($this->getClientIp());
        $log->setCreatedAt(new \DateTimeImmutable());
        
        $this->entityManager->persist($log);
        $this->entityManager->flush();
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