<?php

namespace App\Repository;

use App\Entity\EmailTemplate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EmailTemplate>
 *
 * @method EmailTemplate|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmailTemplate|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmailTemplate[]    findAll()
 * @method EmailTemplate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmailTemplateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmailTemplate::class);
    }

    public function save(EmailTemplate $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EmailTemplate $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Find a template by code and locale
     */
    public function findByCodeAndLocale(string $code, string $locale): ?EmailTemplate
    {
        return $this->createQueryBuilder('e')
            ->where('e.code = :code')
            ->andWhere('e.locale = :locale')
            ->setParameter('code', $code)
            ->setParameter('locale', $locale)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Find all templates grouped by code
     * 
     * @return array
     */
    public function findAllGroupedByCode(): array
    {
        $templates = $this->findAll();
        $grouped = [];
        
        foreach ($templates as $template) {
            if (!isset($grouped[$template->getCode()])) {
                $grouped[$template->getCode()] = [];
            }
            
            $grouped[$template->getCode()][$template->getLocale()] = $template;
        }
        
        return $grouped;
    }

    /**
     * Get all unique template codes
     * 
     * @return array
     */
    public function findAllCodes(): array
    {
        $result = $this->createQueryBuilder('e')
            ->select('DISTINCT e.code')
            ->orderBy('e.code', 'ASC')
            ->getQuery()
            ->getResult();
            
        return array_column($result, 'code');
    }
}
