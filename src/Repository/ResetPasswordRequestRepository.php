<?php

namespace App\Repository;

use App\Entity\ResetPasswordRequest;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use SymfonyCasts\Bundle\ResetPassword\Model\ResetPasswordRequestInterface;
use SymfonyCasts\Bundle\ResetPassword\Persistence\Repository\ResetPasswordRequestRepositoryTrait;
use SymfonyCasts\Bundle\ResetPassword\Persistence\ResetPasswordRequestRepositoryInterface;

/**
 * @extends ServiceEntityRepository<ResetPasswordRequest>
 */
class ResetPasswordRequestRepository extends ServiceEntityRepository implements ResetPasswordRequestRepositoryInterface
{
    use ResetPasswordRequestRepositoryTrait;

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
        // Cleanup old reset password requests for the user
        $this->removeResetPasswordRequest($user);

        // Create and persist new reset password request
        $resetPasswordRequest = new ResetPasswordRequest();
        $resetPasswordRequest->setUser($user);
        $resetPasswordRequest->setExpiresAt($expiresAt);
        $resetPasswordRequest->setSelector($selector);
        $resetPasswordRequest->setHashedToken($hashedToken);

        $this->getEntityManager()->persist($resetPasswordRequest);
        $this->getEntityManager()->flush();

        return $resetPasswordRequest;
    }

    /**
     * Remove all reset password requests for a given user
     */
    public function removeResetPasswordRequest(object $user): void
    {
        $this->createQueryBuilder('r')
            ->delete()
            ->where('r.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->execute();
    }

    /**
     * Find reset password request by selector
     */
    public function findBySelector(string $selector): ?ResetPasswordRequestInterface
    {
        return $this->findOneBy(['selector' => $selector]);
    }
}