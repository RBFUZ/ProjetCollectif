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

    // Retourne la date du plus ancien apprentissage pour une entreprise donnée
    public function findOldestYear($idEstablishment)
    {
        $sql = "SELECT MIN(app.dateDebutApprentissage) as date
            FROM App\Entity\Apprentissage app JOIN app.idEtablissement etab
            WHERE etab.id = ".$idEstablishment;

        $query =  $this->getEntityManager()
            ->createQuery(
                $sql
            );

        return $query->getResult();
    }

    // Retourne le nombre d'apprentis pris par une entreprise sur une année donnée.
    public function countApprenticeshipForOneYear($idEstablishment, $year): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
        'SELECT COUNT(app.dateDebutApprentissage) as nbApprenticeship
            FROM App\Entity\Apprentissage app JOIN app.idEtablissement etab
            WHERE etab.id = :idEtab
            AND app.dateDebutApprentissage BETWEEN :yearBegin AND :yearEnd'
        )->setParameter('idEtab', $idEstablishment)->setParameter('yearBegin', $year.'-01-01')
        ->setParameter('yearEnd', $year.'-12-31');

        return $query->getResult();
    }
}
