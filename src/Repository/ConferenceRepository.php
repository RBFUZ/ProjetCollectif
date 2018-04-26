<?php

namespace App\Repository;

class ConferenceRepository extends \Doctrine\ORM\EntityRepository
{
    public function findConventionByEstablishment($idEstablishment): array
    {
        $sql = "SELECT conf
            FROM App\Entity\Conference conf JOIN conf.idEtablissement etab
            WHERE etab.id = ".$idEstablishment;

        $query =  $this->getEntityManager()
        ->createQuery(
            $sql
        );

        return $query->getResult();
    }
}
