<?php

namespace App\Repository;

use App\Entity\base;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method base|null find($id, $lockMode = null, $lockVersion = null)
 * @method base|null findOneBy(array $criteria, array $orderBy = null)
 * @method base[]    findAll()
 * @method base[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class baseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, base::class);
    }

    // /**
    //  * @return base[] Returns an array of base objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?base
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
