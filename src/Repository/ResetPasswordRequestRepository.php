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

    /**
     * Crée une nouvelle requête de réinitialisation de mot de passe pour un utilisateur.
     * Supprime les anciennes requêtes liées à cet utilisateur avant d'en créer une nouvelle.
     *
     * @throws \InvalidArgumentException Si l'utilisateur fourni n'est pas valide.
     */
    public function createResetPasswordRequest(
        object $user,
        \DateTimeInterface $expiresAt,
        string $selector,
        string $hashedToken
    ): ResetPasswordRequestInterface {
        // Vérifie que l'objet utilisateur est valide
        if (!$user instanceof User) {
            throw new \InvalidArgumentException('Expected an instance of User.');
        }

        // Supprime les anciennes requêtes pour cet utilisateur
        $this->removeResetPasswordRequest($user);

        // Crée et persiste une nouvelle requête de réinitialisation
        $resetPasswordRequest = new ResetPasswordRequest();
        $resetPasswordRequest
            ->setUser($user)
            ->setExpiresAt($expiresAt)
            ->setSelector($selector)
            ->setHashedToken($hashedToken);

        $this->getEntityManager()->persist($resetPasswordRequest);
        $this->getEntityManager()->flush();

        return $resetPasswordRequest;
    }

    /**
     * Supprime toutes les requêtes de réinitialisation de mot de passe pour un utilisateur donné.
     */
    public function removeResetPasswordRequest(object $user): void
    {
        if (!$user instanceof User) {
            throw new \InvalidArgumentException('Expected an instance of User.');
        }

        $this->createQueryBuilder('r')
            ->delete()
            ->where('r.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->execute();
    }

    /**
     * Trouve une requête de réinitialisation de mot de passe par son sélecteur unique.
     */
    public function findBySelector(string $selector): ?ResetPasswordRequestInterface
    {
        return $this->findOneBy(['selector' => $selector]);
    }
}
