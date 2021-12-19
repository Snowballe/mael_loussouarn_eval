<?php

namespace App\Repository;

use App\Entity\Remboursement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/** 
 * @method Remboursement|null find($id, $lockMode = null, lockVersion = null)
 * @method Remboursement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Remboursement[] findAll()
 * @method Remboursement[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
*/

class RemboursementRepository extends ServiceEntityRepository{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Remboursement::class);
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