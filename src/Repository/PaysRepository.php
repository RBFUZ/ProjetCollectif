<?php
/**
 * Created by PhpStorm.
 * User: PENGHanyuan
 * Date: 5/7/18
 * Time: 22:52
 */

namespace App\Repository;


class PaysRepository extends \Doctrine\ORM\EntityRepository
{
    public function findCountryByName($country)
    {
        $sql = "SELECT pays FROM App\Entity\Pays pays 
            WHERE UPPER(pays.nomFrFr) = :name";
        $query =  $this->getEntityManager()
            ->createQuery(
                $sql
            )->setParameter("name",strtoupper($country));

        $result =  $query->getOneOrNullResult();
        if($result==NULL)
        {
            $index = strpos($country,",");
            //var_dump($index);
            $country = substr($country,0,$index);
            $sql = "SELECT pays FROM App\Entity\Pays pays 
            WHERE UPPER(pays.nomFrFr) LIKE :name";
            $query =  $this->getEntityManager()
                ->createQuery(
                    $sql
                )->setParameter("name","%".strtoupper($country)."%");

            $result =  $query->getOneOrNullResult();
        }
        return $result;
    }
}