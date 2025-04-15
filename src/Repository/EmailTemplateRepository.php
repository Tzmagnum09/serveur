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
        
        // Sort by code alphabetically
        ksort($grouped);
        
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

    /**
     * Find templates by code
     * 
     * @param string $code 
     * @return EmailTemplate[]
     */
    public function findByCode(string $code): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.code = :code')
            ->setParameter('code', $code)
            ->getQuery()
            ->getResult();
    }

    /**
     * Search templates by code or content
     * 
     * @param string $query
     * @return EmailTemplate[]
     */
    public function searchTemplates(string $query): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.code LIKE :query')
            ->orWhere('e.subject LIKE :query')
            ->orWhere('e.htmlContent LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('e.code', 'ASC')
            ->addOrderBy('e.locale', 'ASC')
            ->getQuery()
            ->getResult();
    }
}