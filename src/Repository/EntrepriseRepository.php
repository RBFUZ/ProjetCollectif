<?php

namespace App\Repository;

class EntrepriseRepository extends \Doctrine\ORM\EntityRepository
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

    public function findEnterpriseByName($nameEnterprise):\App\Entity\Entreprise
    {
        $sql = "SELECT ent
            FROM App\Entity\Entreprise ent 
            WHERE ent.nomEntreprise = ".$nameEnterprise;

        $query =  $this->getEntityManager()
            ->createQuery(
                $sql
            );

        return $query->getResult();
    }
}
