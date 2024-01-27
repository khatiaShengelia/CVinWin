<?php

namespace App\Repository;

use App\Entity\SectionField;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SectionField>
 *
 * @method SectionField|null find($id, $lockMode = null, $lockVersion = null)
 * @method SectionField|null findOneBy(array $criteria, array $orderBy = null)
 * @method SectionField[]    findAll()
 * @method SectionField[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SectionFieldRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SectionField::class);
    }

//    /**
//     * @return SectionField[] Returns an array of SectionField objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SectionField
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
