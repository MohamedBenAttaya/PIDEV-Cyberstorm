<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    // /**
    //  * @return Reclamation[] Returns an array of Reclamation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reclamation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findReclamByXx($name)
    {

        $Query=$this->getEntityManager()
            ->createQuery("select e from App\Entity\Reclamation e where e.id LIKE :name or e.statut LIKE :name or e.email LIKE :name or e.description LIKE :name or e.type LIKE :name ")
            ->setParameter('name','%'.$name.'%');
        return $Query->getResult();
    }

    function listReclamationByAdmin($id){
        return $this->createQueryBuilder('r')
            ->join('r.admin','a')
            ->addSelect('a')
            ->where('a.id=:id')
            ->setParameter('id',$id)
            ->getQuery()->getResult();
            ;
    }

    /**
     * Returns numbre of "recla" per day
     * return void
     */
    public function countByDate(){
         $query = $this->createQueryBuilder('r')
             ->select('SUBSTRING(r.date,1,10) as dateRecla, count(r) as counts')
             ->groupBy('dateRecla');
         return $query->getQuery()->getResult();
    }


}
