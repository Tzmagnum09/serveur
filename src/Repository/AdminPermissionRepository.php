<?php

namespace App\Repository;

use App\Entity\AdminPermission;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AdminPermission>
 *
 * @method AdminPermission|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminPermission|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminPermission[]    findAll()
 * @method AdminPermission[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminPermissionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdminPermission::class);
    }

    public function save(AdminPermission $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(AdminPermission $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Get all permissions for a given admin
     * 
     * @param User $admin
     * @return array
     */
    public function findByAdmin(User $admin): array
    {
        $permissions = $this->findBy(['admin' => $admin]);
        $result = [];
        
        foreach ($permissions as $permission) {
            $result[$permission->getPermission()] = $permission->isGranted();
        }
        
        return $result;
    }

    /**
     * Check if an admin has a specific permission
     * 
     * @param User $admin
     * @param string $permission
     * @return bool
     */
    public function hasPermission(User $admin, string $permission): bool
    {
        $permissionEntity = $this->findOneBy([
            'admin' => $admin,
            'permission' => $permission
        ]);
        
        return $permissionEntity ? $permissionEntity->isGranted() : false;
    }

    /**
     * Set a permission for an admin
     * 
     * @param User $admin
     * @param string $permission
     * @param bool $isGranted
     * @return void
     */
    public function setPermission(User $admin, string $permission, bool $isGranted): void
    {
        $permissionEntity = $this->findOneBy([
            'admin' => $admin,
            'permission' => $permission
        ]);
        
        if (!$permissionEntity) {
            $permissionEntity = new AdminPermission();
            $permissionEntity->setAdmin($admin);
            $permissionEntity->setPermission($permission);
        }
        
        $permissionEntity->setIsGranted($isGranted);
        $permissionEntity->setUpdatedAt();
        
        $this->save($permissionEntity, true);
    }
}
