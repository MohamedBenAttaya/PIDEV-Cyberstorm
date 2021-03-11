<?php

namespace App\Repository;

use App\Entity\Maison;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Maison|null find($id, $lockMode = null, $lockVersion = null)
 * @method Maison|null findOneBy(array $criteria, array $orderBy = null)
 * @method Maison[]    findAll()
 * @method Maison[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MaisonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Maison::class);
    }

    function tri_asc($min,$max)
    {
        return $this->createQueryBuilder('Maison')
            ->Where('Maison.prix < :max ')
            ->andWhere('Maison.prix > :min ')
            ->setParameter('max', $max)
            ->setParameter('min', $min)
            ->orderBy('Maison.prix ','ASC')
            ->getQuery()->getResult();
    }
    function tri_desc($min,$max)
    {
        return $this->createQueryBuilder('Maison')
            ->Where('Maison.prix < :max ')
            ->andWhere('Maison.prix > :min ')
            ->setParameter('max', $max)
            ->setParameter('min', $min)
            ->orderBy('Maison.prix ','DESC')
            ->getQuery()->getResult();
    }
    function search($name)
    {
        $Query=$this->getEntityManager()
            ->createQuery("select M from App\Entity\Maison M where M.Nom LIKE :name")
            ->setParameter('name','%'.$name.'%');
        return $Query->getResult();
    }

    // /**
    //  * @return Maison[] Returns an array of Maison objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Maison
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
