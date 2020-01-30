<?php

namespace App\Repository;

use App\Entity\RoseCollection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RoseCollection|null find($id, $lockMode = null, $lockVersion = null)
 * @method RoseCollection|null findOneBy(array $criteria, array $orderBy = null)
 * @method RoseCollection[]    findAll()
 * @method RoseCollection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoseCollectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RoseCollection::class);
    }

    // /**
    //  * @return RoseCollection[] Returns an array of RoseCollection objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RoseCollection
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
