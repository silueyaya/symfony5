<?php

namespace App\Repository;

use App\Entity\Azerty;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Azerty|null find($id, $lockMode = null, $lockVersion = null)
 * @method Azerty|null findOneBy(array $criteria, array $orderBy = null)
 * @method Azerty[]    findAll()
 * @method Azerty[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AzertyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Azerty::class);
    }

    // /**
    //  * @return Azerty[] Returns an array of Azerty objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Azerty
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
