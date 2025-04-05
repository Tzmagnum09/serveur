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

        // Récupère et supprime les anciennes requêtes liées à cet utilisateur
        $resetPasswordRequests = $this->findBy(['user' => $user]);
        foreach ($resetPasswordRequests as $resetPasswordRequest) {
            $this->removeResetPasswordRequest($resetPasswordRequest); // Passe ResetPasswordRequest
        }

        // Crée et persiste une nouvelle requête de réinitialisation
        $resetPasswordRequest = new ResetPasswordRequest();
        $resetPasswordRequest->setUser($user);

        $resetPasswordRequest->setExpiresAt($expiresAt);
        $resetPasswordRequest->setSelector($selector);
        $resetPasswordRequest->setHashedToken($hashedToken);

        $this->getEntityManager()->persist($resetPasswordRequest);
        $this->getEntityManager()->flush();

        return $resetPasswordRequest;
    }
}