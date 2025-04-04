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
        // Nettoyer les anciennes requêtes de réinitialisation pour cet utilisateur
        $this->removeResetPasswordRequest($user);

        // Créer et persister la nouvelle requête de réinitialisation
        $resetPasswordRequest = new ResetPasswordRequest();

        // Vérifiez que les méthodes existent dans votre entité ResetPasswordRequest
        if (!method_exists($resetPasswordRequest, 'setUser') ||
            !method_exists($resetPasswordRequest, 'setExpiresAt') ||
            !method_exists($resetPasswordRequest, 'setSelector') ||
            !method_exists($resetPasswordRequest, 'setHashedToken')) {
            throw new \LogicException('Les méthodes requises ne sont pas définies dans l\'entité ResetPasswordRequest.');
        }

        $resetPasswordRequest->setUser($user);
        $resetPasswordRequest->setExpiresAt($expiresAt);
        $resetPasswordRequest->setSelector($selector);
        $resetPasswordRequest->setHashedToken($hashedToken);

        $this->getEntityManager()->persist($resetPasswordRequest);
        $this->getEntityManager()->flush();

        return $resetPasswordRequest;
    }

    /**
     * Supprime toutes les requêtes de réinitialisation de mot de passe pour un utilisateur donné
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
     * Trouve une requête de réinitialisation par sélecteur
     */
    public function findBySelector(string $selector): ?ResetPasswordRequestInterface
    {
        return $this->findOneBy(['selector' => $selector]);
    }
}
