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

    public function findEnterpriseByName($nameEnterprise)
    {
        $sql = "SELECT ent FROM App\Entity\Entreprise ent 
            WHERE UPPER(ent.nomEntreprise) = :nom";

        $query =  $this->getEntityManager()
            ->createQuery(
                $sql
            )->setParameter("nom",strtoupper($nameEnterprise));

        return $query->getOneOrNullResult();
    }
}
