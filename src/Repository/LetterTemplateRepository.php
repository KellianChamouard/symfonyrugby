<?php

namespace App\Repository;

use App\Entity\LetterTemplate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LetterTemplate|null find($id, $lockMode = null, $lockVersion = null)
 * @method LetterTemplate|null findOneBy(array $criteria, array $orderBy = null)
 * @method LetterTemplate[]    findAll()
 * @method LetterTemplate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LetterTemplateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LetterTemplate::class);
    }

    // /**
    //  * @return LetterTemplate[] Returns an array of LetterTemplate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LetterTemplate
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
