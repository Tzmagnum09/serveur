<?php

namespace App\Repository;

use App\Entity\ResetPasswordRequest;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use SymfonyCasts\Bundle\ResetPassword\Model\ResetPasswordRequestInterface;
use SymfonyCasts\Bundle\ResetPassword\Model\ResetPasswordRequestTrait;

/**
 * @extends ServiceEntityRepository<ResetPasswordRequest>
 */
class ResetPasswordRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResetPasswordRequest::class);
    }

    /**
     * Supprime les demandes de réinitialisation de mot de passe expirées
     */
    public function removeExpiredRequests(): void
    {
        $qb = $this->createQueryBuilder('r')
            ->delete()
            ->where('r.expiresAt < :now')
            ->setParameter('now', new \DateTime());
        
        $qb->getQuery()->execute();
    }

    /**
     * Trouve une demande de réinitialisation de mot de passe par sélecteur
     */
    public function findResetPasswordRequest(string $selector): ?ResetPasswordRequestInterface
    {
        return $this->findOneBy(['selector' => $selector]);
    }

    /**
     * Supprime une demande de réinitialisation de mot de passe
     */
    public function removeResetPasswordRequest(ResetPasswordRequestInterface $request): void
    {
        $this->_em->remove($request);
        $this->_em->flush();
    }
}