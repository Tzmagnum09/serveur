<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Doctrine\ORM\QueryBuilder;

/**
 * @extends ServiceEntityRepository<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function save(User $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(User $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newHashedPassword);

        $this->save($user, true);
    }

    /**
     * Find users awaiting admin approval
     * 
     * @return User[]
     */
    public function findPendingApproval(): array
    {
        return $this->createQueryBuilder('u')
            ->where('u.isVerified = :verified')
            ->andWhere('u.isApproved = :approved')
            ->setParameter('verified', true)
            ->setParameter('approved', false)
            ->orderBy('u.createdAt', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find all admins (excluding super admins)
     * 
     * @return User[]
     */
    public function findAdmins(): array
    {
        $qb = $this->createQueryBuilder('u');
        $qb->where('u.roles LIKE :role')
           ->andWhere('u.roles NOT LIKE :superRole')
           ->setParameter('role', '%"ROLE_ADMIN"%')
           ->setParameter('superRole', '%"ROLE_SUPER_ADMIN"%')
           ->orderBy('u.lastName', 'ASC')
           ->addOrderBy('u.firstName', 'ASC');
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Search users by name, email or username
     *
     * @param string $query
     * @return User[]
     */
    public function searchUsers(string $query): array
    {
        $qb = $this->createQueryBuilder('u');
        $qb->where('u.email LIKE :query')
           ->orWhere('u.username LIKE :query')
           ->orWhere('u.firstName LIKE :query')
           ->orWhere('u.lastName LIKE :query')
           ->orWhere('CONCAT(u.firstName, \' \', u.lastName) LIKE :query')
           ->setParameter('query', '%' . $query . '%')
           ->orderBy('u.lastName', 'ASC')
           ->addOrderBy('u.firstName', 'ASC');
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Find users by role
     * 
     * @param string $role
     * @return User[]
     */
    public function findByRole(string $role): array
    {
        $qb = $this->createQueryBuilder('u');
        
        if ($role === 'ROLE_ADMIN') {
            $qb->where('u.roles LIKE :role')
               ->andWhere('u.roles NOT LIKE :superRole')
               ->setParameter('role', '%"ROLE_ADMIN"%')
               ->setParameter('superRole', '%"ROLE_SUPER_ADMIN"%');
        } elseif ($role === 'ROLE_SUPER_ADMIN') {
            $qb->where('u.roles LIKE :role')
               ->setParameter('role', '%"ROLE_SUPER_ADMIN"%');
        } elseif ($role === 'ROLE_USER_ONLY') {
            $qb->where('u.roles NOT LIKE :adminRole')
               ->andWhere('u.roles NOT LIKE :superRole')
               ->setParameter('adminRole', '%"ROLE_ADMIN"%')
               ->setParameter('superRole', '%"ROLE_SUPER_ADMIN"%');
        } else {
            $qb->where('u.roles LIKE :role')
               ->setParameter('role', '%"' . $role . '"%');
        }
        
        $qb->orderBy('u.lastName', 'ASC')
           ->addOrderBy('u.firstName', 'ASC');
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Find users with specific filters
     * 
     * @param array $filters
     * @param string $searchTerm
     * @param string $sortField
     * @param string $sortDirection
     * @return User[]
     */
    public function findByFilters(array $filters = [], string $searchTerm = '', string $sortField = 'lastName', string $sortDirection = 'ASC'): array
    {
        $qb = $this->createQueryBuilder('u');
        
        // Appliquer les critères de recherche si présents
        if (!empty($searchTerm)) {
            $qb->andWhere('(u.email LIKE :search OR u.username LIKE :search OR u.firstName LIKE :search OR u.lastName LIKE :search OR CONCAT(u.firstName, \' \', u.lastName) LIKE :search)')
               ->setParameter('search', '%' . $searchTerm . '%');
        }
        
        // Appliquer les filtres
        if (isset($filters['verified'])) {
            $qb->andWhere('u.isVerified = :verified')
               ->setParameter('verified', $filters['verified']);
        }
        
        if (isset($filters['approved'])) {
            $qb->andWhere('u.isApproved = :approved')
               ->setParameter('approved', $filters['approved']);
        }
        
        // Filtrer par rôle
        if (isset($filters['role'])) {
            if ($filters['role'] === 'ROLE_ADMIN') {
                $qb->andWhere('u.roles LIKE :role')
                   ->andWhere('u.roles NOT LIKE :superRole')
                   ->setParameter('role', '%"ROLE_ADMIN"%')
                   ->setParameter('superRole', '%"ROLE_SUPER_ADMIN"%');
            } elseif ($filters['role'] === 'ROLE_SUPER_ADMIN') {
                $qb->andWhere('u.roles LIKE :role')
                   ->setParameter('role', '%"ROLE_SUPER_ADMIN"%');
            } elseif ($filters['role'] === 'ROLE_USER_ONLY') {
                $qb->andWhere('u.roles NOT LIKE :adminRole')
                   ->andWhere('u.roles NOT LIKE :superRole')
                   ->setParameter('adminRole', '%"ROLE_ADMIN"%')
                   ->setParameter('superRole', '%"ROLE_SUPER_ADMIN"%');
            } else {
                $qb->andWhere('u.roles LIKE :role')
                   ->setParameter('role', '%"' . $filters['role'] . '"%');
            }
        }
        
        // Appliquer le tri
        $allowedFields = ['lastName', 'firstName', 'email', 'username', 'createdAt', 'lastLoginAt'];
        $allowedDirections = ['ASC', 'DESC'];
        
        $sortField = in_array($sortField, $allowedFields) ? $sortField : 'lastName';
        $sortDirection = in_array($sortDirection, $allowedDirections) ? $sortDirection : 'ASC';
        
        $qb->orderBy('u.' . $sortField, $sortDirection);
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Trouve tous les administrateurs (admins et super-admins)
     * 
     * @return User[]
     */
    public function findAllAdministrators(): array
    {
        $qb = $this->createQueryBuilder('u');
        $qb->where('u.roles LIKE :adminRole')
           ->setParameter('adminRole', '%"ROLE_ADMIN"%')
           ->orderBy('u.lastName', 'ASC')
           ->addOrderBy('u.firstName', 'ASC');
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Trouve uniquement les administrateurs (pas les super-admins)
     * 
     * @return User[]
     */
    public function findAdminsOnly(): array
    {
        $qb = $this->createQueryBuilder('u');
        $qb->where('u.roles LIKE :adminRole')
           ->andWhere('u.roles NOT LIKE :superRole')
           ->setParameter('adminRole', '%"ROLE_ADMIN"%')
           ->setParameter('superRole', '%"ROLE_SUPER_ADMIN"%')
           ->orderBy('u.lastName', 'ASC')
           ->addOrderBy('u.firstName', 'ASC');
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Trouve uniquement les super-admins
     * 
     * @return User[]
     */
    public function findSuperAdmins(): array
    {
        $qb = $this->createQueryBuilder('u');
        $qb->where('u.roles LIKE :superRole')
           ->setParameter('superRole', '%"ROLE_SUPER_ADMIN"%')
           ->orderBy('u.lastName', 'ASC')
           ->addOrderBy('u.firstName', 'ASC');
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Trouve les administrateurs récemment créés
     * 
     * @param int $days Nombre de jours à considérer
     * @return User[]
     */
    public function findRecentAdmins(int $days = 30): array
    {
        $date = new \DateTime();
        $date->modify("-{$days} days");
        
        $qb = $this->createQueryBuilder('u');
        $qb->where('u.roles LIKE :adminRole')
           ->andWhere('u.createdAt >= :date')
           ->setParameter('adminRole', '%"ROLE_ADMIN"%')
           ->setParameter('date', $date)
           ->orderBy('u.createdAt', 'DESC');
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Compte le nombre de super-admins
     * 
     * @return int
     */
    public function countSuperAdmins(): int
    {
        $qb = $this->createQueryBuilder('u');
        $qb->select('COUNT(u.id)')
           ->where('u.roles LIKE :superRole')
           ->setParameter('superRole', '%"ROLE_SUPER_ADMIN"%');
        
        return (int) $qb->getQuery()->getSingleScalarResult();
    }
}