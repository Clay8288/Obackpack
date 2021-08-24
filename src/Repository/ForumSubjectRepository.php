<?php

namespace App\Repository;

use App\Entity\ForumSubject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ForumSubject|null find($id, $lockMode = null, $lockVersion = null)
 * @method ForumSubject|null findOneBy(array $criteria, array $orderBy = null)
 * @method ForumSubject[]    findAll()
 * @method ForumSubject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ForumSubjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ForumSubject::class);
    }

    // /**
    //  * @return ForumSubject[] Returns an array of ForumSubject objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ForumSubject
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function getContinentId()
    {
        
    }
}
