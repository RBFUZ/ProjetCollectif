<?php

namespace App\Repository;

class ApprentissageRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAprenticeshipByEstablishment($idEstablishment): array
    {
        $sql = "SELECT app
            FROM App\Entity\Apprentissage app JOIN app.idEtablissement etab
            WHERE etab.id = ".$idEstablishment;

        $query =  $this->getEntityManager()
        ->createQuery(
            $sql
        );

        return $query->getResult();
    }
}
