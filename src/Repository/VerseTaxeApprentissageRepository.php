<?php

namespace App\Repository;

class VerseTaxeApprentissageRepository extends \Doctrine\ORM\EntityRepository
{
    public function findOldestYear($idEstablishment): array
    {
        // Get the oldest year for one establishment
        $sql = "SELECT MIN(taxe.anneeVersement) as date
            FROM App\Entity\VerseTaxeApprentissage taxe JOIN taxe.idEtablissement etab
            WHERE etab.id = ".$idEstablishment;

        $query =  $this->getEntityManager()
            ->createQuery(
                $sql
            );

        return $query->getResult();
    }

    public function countTaxeEachYear($idEstablishment, $year): array
    {
        // Get the amount of money for each year and for one establishment
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
        'SELECT SUM(taxe.montantTaxe) as amount
            FROM App\Entity\VerseTaxeApprentissage taxe JOIN taxe.idEtablissement etab
            WHERE etab.id = :idEtab
            AND taxe.anneeVersement BETWEEN :yearBegin AND :yearEnd'
        )->setParameter('idEtab', $idEstablishment)->setParameter('yearBegin', $year.'-01-01')
        ->setParameter('yearEnd', $year.'-12-31');

        return $query->getResult();
    }
}
