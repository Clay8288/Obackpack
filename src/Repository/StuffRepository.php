<?php

namespace App\Repository;

use App\Entity\Stuff;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Stuff|null find($id, $lockMode = null, $lockVersion = null)
 * @method Stuff|null findOneBy(array $criteria, array $orderBy = null)
 * @method Stuff[]    findAll()
 * @method Stuff[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StuffRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Stuff::class);
    }

    /**
     * Method returning all stuffs by country
     *
     * @return void
     */
    public function findByCountry($id)
    {

        $em =$this->getEntityManager();
        $query = $em->createQuery(
            "SELECT s
            FROM App\Entity\Stuff s 
            JOIN s.countries as c
            WHERE c.id = :country_id"
        );
        $query->setParameter('country_id', $id);
        return $query->getResult();
    }

    // /**
    //  * @return Stuff[] Returns an array of Stuff objects
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
    public function findOneBySomeField($value): ?Stuff
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
