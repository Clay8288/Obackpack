<?php

namespace App\Repository;

use App\Entity\Country;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Country|null find($id, $lockMode = null, $lockVersion = null)
 * @method Country|null findOneBy(array $criteria, array $orderBy = null)
 * @method Country[]    findAll()
 * @method Country[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CountryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Country::class);
    }

    /**
     * Method for searching a country by his name
     * 
     */
    public function findCountryByHisName($name)
    {
        //we instantiate query builder
        $qb = $this->createQueryBuilder('country');

        $qb->where('country.name LIKE :name');

        $qb->setParameter(':name', "%$name%");

        $query = $qb->getQuery();

        return $query->getResult();
    }

       /**
     * Méthode retournant tous les détails d'une série :
     * - Infos de la série : title, description, ...
     * - Les saisons associées
     * - les catégories
     * - les personnages
     *
     * @param int $id
     * @return void
     */
    public function findWithDetailsDQL($name): ?Country
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT country, weather
            FROM App\Entity\Country country
            LEFT JOIN country.weather weather
            WHERE country.name = :name
            '
        )->setParameter('name', $name);

        // On execute et on retourne le résultat sous forme de tableau
        // d'objets de la classe TvShow
        return $query->getOneOrNullResult();
    }

    // /**
    //  * @return Country[] Returns an array of Country objects
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
    public function findOneBySomeField($value): ?Country
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
