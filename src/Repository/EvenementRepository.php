<?php

namespace App\Repository;

use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Evenement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evenement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evenement[]    findAll()
 * @method Evenement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }

    // /**
    //  * @return Evenement[] Returns an array of Evenement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Evenement
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function OrderByDate(){
        $em=$this->getEntityManager();
        $query=$em->createQuery('
        select e from App\Entity\Evenement e order by e.date DESC');
        return $query->getResult();
    }


    public function LastCreationDate(){
        return $this->createQueryBuilder('e')
            ->orderBy('e.date','ASC')
            ->setMaxResults(3)->getQuery()->getResult();
    }

    public function SearchByNom($nom){
        return $this->createQueryBuilder('e')
            ->where('e.nom LIKE :nom')
            ->setParameter('nom','%'.$nom.'%')
            ->getQuery()->getResult()
            ;
    }

    /**
     * @param $value
     * @return Query
     */

/*    public function orderByX($value): Query{
        return $this->createQueryBuilder('e')
            ->orderBy('e.'.$value,'ASC')
            ->getQuery();
            ;
    }*/
    /**
     * @param $value
     * @return Query
     */
    public function SearchByNo($value): Query
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.'.$value,'ASC')
            ->getQuery();
            }

    public function LastCreationX($val){
        return $this->createQueryBuilder('e')
            ->orderBy('e.'.$val,'ASC')
            ->getQuery()->getResult();
    }
    public function LastCreationX2($val){
        return $this->createQueryBuilder('e')
            ->orderBy('e.'.$val,'DESC')
            ->getQuery()->getResult();
    }
    function search($name)
    {
        $Query=$this->getEntityManager()
            ->createQuery("select M from App\Entity\Evenement M where M.nom LIKE :name")
            ->setParameter('name','%'.$name.'%');
        return $Query->getResult();
    }

    public function findEventByXx($name)
    {

        $Query=$this->getEntityManager()
            ->createQuery("select e from App\Entity\Evenement e where e.id LIKE :name or e.nom LIKE :name or e.lieu LIKE :name or e.date LIKE :name or e.description LIKE :name or e.tel LIKE :name or e.email LIKE :name ")
            ->setParameter('name','%'.$name.'%');
        return $Query->getResult();
    }


    public function findDistinct()
    {
        return $this->createQueryBuilder('e')
            ->groupBy('e.lieu')
            ->getQuery()->getResult();
    }

    /**
     * Returns numbre of "recla" per day
     * return void
     */
    public function countByDate(){
        $query = $this->createQueryBuilder('e')
            ->select('SUBSTRING(e.date,1,10) as dateEvent, count(e) as counts')
            ->groupBy('dateEvent');
        return $query->getQuery()->getResult();
    }

    /**
     * Returns numbre of "recla" per day
     * return void
     */
    public function countByLieu(){
        $query = $this->createQueryBuilder('e')
            ->select('e.lieu as lieuEvent, count(e) as count')
            ->groupBy('lieuEvent');
        return $query->getQuery()->getResult();
    }
}

