<?php

namespace App\Repository;

use App\Entity\ResetPasswordRequest;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use SymfonyCasts\Bundle\ResetPassword\Model\ResetPasswordRequestInterface;
use SymfonyCasts\Bundle\ResetPassword\Persistence\ResetPasswordRequestRepositoryInterface;

/**
 * @extends ServiceEntityRepository<ResetPasswordRequest>
 */
class ResetPasswordRequestRepository extends ServiceEntityRepository implements ResetPasswordRequestRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResetPasswordRequest::class);
    }

    public function createResetPasswordRequest(
        object $user,
        \DateTimeInterface $expiresAt,
        string $selector,
        string $hashedToken
    ): ResetPasswordRequestInterface {
        $resetPasswordRequest = new ResetPasswordRequest(
            $user,
            $expiresAt,
            $selector,
            $hashedToken
        );

        $this->_em->persist($resetPasswordRequest);
        $this->_em->flush();

        return $resetPasswordRequest;
    }

    public function findResetPasswordRequest(string $selector): ?ResetPasswordRequestInterface
    {
        return $this->findOneBy(['selector' => $selector]);
    }

    public function removeResetPasswordRequest(ResetPasswordRequestInterface $request): void
    {
        $this->_em->remove($request);
        $this->_em->flush();
    }

    /**
     * Supprime les demandes de réinitialisation de mot de passe expirées
     * 
     * @return int Nombre de demandes supprimées
     */
    public function removeExpiredResetPasswordRequests(): int
    {
        $qb = $this->createQueryBuilder('r')
            ->delete()
            ->where('r.expiresAt < :now')
            ->setParameter('now', new \DateTime());
        
        return $qb->getQuery()->execute();
    }
}