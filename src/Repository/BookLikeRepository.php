<?php

namespace App\Repository;

use App\Entity\BookLike;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BookLike|null find($id, $lockMode = null, $lockVersion = null)
 * @method BookLike|null findOneBy(array $criteria, array $orderBy = null)
 * @method BookLike[]    findAll()
 * @method BookLike[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookLikeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BookLike::class);
    }

    // /**
    //  * @return BookLike[] Returns an array of BookLike objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BookLike
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
