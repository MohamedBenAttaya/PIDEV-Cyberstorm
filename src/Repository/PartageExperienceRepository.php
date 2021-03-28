<?php

namespace App\Repository;

use App\Entity\PartageExperience;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PartageExperience|null find($id, $lockMode = null, $lockVersion = null)
 * @method PartageExperience|null findOneBy(array $criteria, array $orderBy = null)
 * @method PartageExperience[]    findAll()
 * @method PartageExperience[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PartageExperienceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PartageExperience::class);
    }

    // /**
    //  * @return PartageExperience[] Returns an array of PartageExperience objects
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
    public function findOneBySomeField($value): ?PartageExperience
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

        public function OrderByName(){
            $em=$this->getEntityManager();
            $query=$em->createQuery('
            select p from App\Entity\PartageExperience p order by p.destination ASC');
            return $query->getResult();

        }
    */
    public function  OrderByNameQB(){
        return $this->createQueryBuilder('p')
            ->orderBy('p.destination','ASC')
            ->getQuery()->getResult()
            ;

    }

    function tri_asc()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.destination ','ASC')
            ->getQuery()->getResult();
    }
    function tri_desc()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.destination ','DESC')
            ->getQuery()->getResult();
    }

    function date_asc()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.date_pub ','ASC')
            ->getQuery()->getResult();
    }
    function date_desc()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.date_pub ','DESC')
            ->getQuery()->getResult();
    }
}
