<?php
/**
 * Created by PhpStorm.
 * User: PENGHanyuan
 * Date: 5/8/18
 * Time: 13:01
 */

namespace App\Repository;


class EtudiantRepository extends \Doctrine\ORM\EntityRepository
{
    public function findMaxId()
    {
        $sql = "SELECT MAX(etu.id) FROM App\Entity\Etudiant etu";

        $query =  $this->getEntityManager()
            ->createQuery(
                $sql
            );

        return $query->getOneOrNullResult();
    }
}