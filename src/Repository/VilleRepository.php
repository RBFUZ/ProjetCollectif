<?php
/**
 * Created by PhpStorm.
 * User: PENGHanyuan
 * Date: 5/4/18
 * Time: 15:27
 */

namespace App\Repository;


class VilleRepository extends \Doctrine\ORM\EntityRepository
{
    public function findCityByName($city,$cp)
    {
        $dep = (int)(substr($cp,0,2));
        $sql = "SELECT city FROM App\Entity\Ville city 
            WHERE UPPER(city.nomVille) = :name AND city.departement = :cp";
        $query =  $this->getEntityManager()
            ->createQuery(
                $sql
            )->setParameter("name",str_replace(" ","-",strtoupper($city)))->setParameter("cp",$dep);

        return $query->getOneOrNullResult();
    }
}