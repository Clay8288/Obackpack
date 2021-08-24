<?php

namespace App\Repository;

use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Post|null find($id, $lockMode = null, $lockVersion = null)
 * @method Post|null findOneBy(array $criteria, array $orderBy = null)
 * @method Post[]    findAll()
 * @method Post[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }

    /**
     * Method to find a pos by his title
     */
    public function findByTitle($title)
    {
        //We instanciate QueryBuilder
        $qb = $this->createQueryBuilder('post');

        $qb->where('post.title LIKE :title');

        $qb->setParameter(':title', "%$title%");

        $query = $qb->getQuery();

        return $query->getResult();


    }
    /**
     * Method to find a pos by his title
     */
    public function findByTitleDQL($title)
    {
        //
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT post
            FROM App\Entity\Post post
            WHERE post.title LIKE :title
            '
        )->setParameter(':title', "%$title%");

        return $query->getResult();

    }

    /**
    * Method to find a post by his content
    */
    public function findByContent($content)
    {
        //
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT post
            FROM App\Entity\Post post
            WHERE post.content LIKE :content
            '
        )->setParameter(':content', "%$content%");

        return $query->getResult();

    }

    // /**
    //  * @return Post[] Returns an array of Post objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Post
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
