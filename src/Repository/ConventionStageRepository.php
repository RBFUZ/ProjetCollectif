<?php

namespace App\Repository;

class ConventionStageRepository extends \Doctrine\ORM\EntityRepository
{
    public function findTraineeByEstablishment($idEstablishment): array
    {
        $sql = "SELECT cov
            FROM App\Entity\ConventionStage cov JOIN cov.idEtablissement etab
            WHERE etab.id = ".$idEstablishment;

        $query =  $this->getEntityManager()
        ->createQuery(
            $sql
        );

        return $query->getResult();
    }
}
