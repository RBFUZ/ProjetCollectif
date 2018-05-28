<?php
/**
 * Created by PhpStorm.
 * User: PENGHanyuan
 * Date: 5/4/18
 * Time: 18:57
 */

namespace App\Repository;


class PersonneRepository extends  \Doctrine\ORM\EntityRepository
{
    public function findPersonByName($nom,$prenom)
    {
        if($prenom != null)
        {
            $sql = "SELECT per  FROM App\Entity\Personne per
                WHERE UPPER(per.nom) = :nom AND UPPER(per.prenom) = :prenom";
            $query =  $this->getEntityManager()
                ->createQuery(
                    $sql
                )->setParameter("nom",strtoupper($nom))->setParameter("prenom",$prenom);
        }
        else{
            $sql = "SELECT per  FROM App\Entity\Personne per
                WHERE UPPER(per.nom) = :nom";
            $query =  $this->getEntityManager()
                ->createQuery(
                    $sql
                )->setParameter("nom",strtoupper($nom));
        }




        return $query->getOneOrNullResult();
    }
}