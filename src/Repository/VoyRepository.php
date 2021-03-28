<?php

namespace App\Repository;

use App\Entity\Voy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Voy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Voy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Voy[]    findAll()
 * @method Voy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Voy::class);
    }
    public function findvoybyattributs($name)
    {

        $Query=$this->getEntityManager()
            ->createQuery("select e from App\Entity\Voy e where e.point_depart LIKE :name or e.point_arrive LIKE :name or e.email LIKE :name or e.num_tel LIKE :name ")
            ->setParameter('name','%'.$name.'%');
        return $Query->getResult();
    }
    // /**
    //  * @return Voy[] Returns an array of Voy objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Voy
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    function tri_asc()
    {
        return $this->createQueryBuilder('voy')
            ->orderBy('voy.id ','ASC')
            ->getQuery()->getResult();
    }
    function tri_desc()
    {
        return $this->createQueryBuilder('voy')
            ->orderBy('voy.id ','DESC')
            ->getQuery()->getResult();
    }


}
