<?php
/**
 * Created by PhpStorm.
 * User: PENGHanyuan
 * Date: 5/4/18
 * Time: 19:56
 */

namespace App\Repository;


use App\Entity\ContactEtablissement;

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

    public function findContactByPersonne($idpersonne):?ContactEtablissement
    {
        $sql = "SELECT cont FROM App\Entity\ContactEtablissement cont WHERE cont.idPersonne = ".$idpersonne;

        $query =  $this->getEntityManager()
            ->createQuery(
                $sql
            );

        return $query->getOneOrNullResult();
    }
}