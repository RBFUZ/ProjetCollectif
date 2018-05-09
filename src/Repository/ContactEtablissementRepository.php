<?php
/**
 * Created by PhpStorm.
 * User: PENGHanyuan
 * Date: 5/4/18
 * Time: 19:56
 */

namespace App\Repository;


class ContactEtablissementRepository extends \Doctrine\ORM\EntityRepository
{
    public function findMaxId()
    {
        $sql = "SELECT MAX(cetap.id) FROM App\Entity\ContactEtablissement cetap";

        $query =  $this->getEntityManager()
            ->createQuery(
                $sql
            );

        return $query->getOneOrNullResult();
    }
}