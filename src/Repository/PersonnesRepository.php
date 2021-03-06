<?php

namespace App\Repository;

use App\Entity\Personnes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/** 
 * @method Personnes|null find($id, $lockMode = null)
 * @method Personnes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Personnes[] findAll()
 * @method Personnes[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
*/

class PersonnesRepository extends ServiceEntityRepository{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Personnes::class);
    }

    // /**
    //  * @return Personnes[] Returns an array of Personnes objects
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