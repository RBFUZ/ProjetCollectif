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

    public function findOldestYear($idEstablishment)
    {
        $sql = "SELECT MIN(cov.dateCreation) as date
            FROM App\Entity\ConventionStage cov JOIN cov.idEtablissement etab
            WHERE etab.id = ".$idEstablishment;

        $query =  $this->getEntityManager()
            ->createQuery(
                $sql
            );

        return $query->getResult();
    }

    public function countStageForOneYear($idEstablishment, $year, $department): array
    {
        $entityManager = $this->getEntityManager();

        if ($department == "all") {
            $query = $entityManager->createQuery(
            'SELECT COUNT(cov.dateCreation) as nbStage
                FROM App\Entity\ConventionStage cov JOIN cov.idEtablissement etab
                WHERE etab.id = :idEtab
                AND cov.dateCreation BETWEEN :yearBegin AND :yearEnd'
            )->setParameter('idEtab', $idEstablishment)->setParameter('yearBegin', $year.'-01-01')
            ->setParameter('yearEnd', $year.'-12-31');
        } else {
            $query = $entityManager->createQuery(
            'SELECT COUNT(cov.dateCreation) as nbStage
                FROM App\Entity\ConventionStage cov JOIN cov.idEtablissement etab
                JOIN cov.idSpecialite spe
                JOIN spe.idDepartement dep
                WHERE etab.id = :idEtab
                AND dep.libelleDepartement = :departement
                AND cov.dateCreation BETWEEN :yearBegin AND :yearEnd'
            )->setParameter('idEtab', $idEstablishment)->setParameter('departement', $department)->setParameter('yearBegin', $year.'-01-01')
            ->setParameter('yearEnd', $year.'-12-31');
        }

        return $query->getResult();
    }

    public function countStageMoneyForOneYear($idEstablishment, $year, $department): array
    {
        $entityManager = $this->getEntityManager();

        if ($department == "all") {
            $query = $entityManager->createQuery(
            'SELECT COUNT(cov.dateCreation) as nbStage
                FROM App\Entity\ConventionStage cov JOIN cov.idEtablissement etab
                WHERE etab.id = :idEtab
                AND cov.dateCreation BETWEEN :yearBegin AND :yearEnd
                AND cov.idGratification IS NOT NULL'
            )->setParameter('idEtab', $idEstablishment)->setParameter('yearBegin', $year.'-01-01')
            ->setParameter('yearEnd', $year.'-12-31');
        } else {
            $query = $entityManager->createQuery(
            'SELECT COUNT(cov.dateCreation) as nbStage
                FROM App\Entity\ConventionStage cov JOIN cov.idEtablissement etab
                JOIN cov.idSpecialite spe
                JOIN spe.idDepartement dep
                WHERE etab.id = :idEtab
                AND dep.libelleDepartement = :department
                AND cov.dateCreation BETWEEN :yearBegin AND :yearEnd
                AND cov.idGratification IS NOT NULL'
            )->setParameter('idEtab', $idEstablishment)->setParameter('department', $department)->setParameter('yearBegin', $year.'-01-01')
            ->setParameter('yearEnd', $year.'-12-31');
        }

        return $query->getResult();
    }
}
