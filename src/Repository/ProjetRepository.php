<?php

namespace App\Repository;

use App\Entity\Projet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/** 
 * @method Projet|null find($id, $lockMode = null, lockVersion = null)
 * @method Projet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projet[] findAll()
 * @method Projet[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
*/

class ProketRepository extends ServiceEntityRepository{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Projet::class);
    }

    // /**
    //  * @return Depenses[] Returns an array of Depenses objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Depenses
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}