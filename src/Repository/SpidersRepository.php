<?php

namespace App\Repository;

use App\Entity\Spiders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Spiders|null find($id, $lockMode = null, $lockVersion = null)
 * @method Spiders|null findOneBy(array $criteria, array $orderBy = null)
 * @method Spiders[]    findAll()
 * @method Spiders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpidersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Spiders::class);
    }

//    /**
//     * @return Spiders[] Returns an array of Spiders objects
//     */
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
    public function findOneBySomeField($value): ?Spiders
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
