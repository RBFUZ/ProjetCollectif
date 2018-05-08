<?php
/**
 * Created by PhpStorm.
 * User: PENGHanyuan
 * Date: 5/8/18
 * Time: 13:02
 */

namespace App\Repository;


class PersonnelPolytechRepository extends \Doctrine\ORM\EntityRepository
{
    public function findMaxId()
    {
        $sql = "SELECT MAX(perP.id) FROM App\Entity\PersonnelPolytech perP";

        $query =  $this->getEntityManager()
            ->createQuery(
                $sql
            );

        return $query->getOneOrNullResult();
    }
}