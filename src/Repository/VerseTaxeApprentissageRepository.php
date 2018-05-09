<?php

namespace App\Repository;

class VerseTaxeApprentissageRepository extends \Doctrine\ORM\EntityRepository
{
    public function findOldestYear($idEnterprise): array
    {
        // Get the oldest year for one establishment
        $sql = "SELECT MIN(taxe.anneeVersement) as date
            FROM App\Entity\VerseTaxeApprentissage taxe JOIN taxe.idEntreprise ent
            WHERE ent.id = ".$idEnterprise;

        $query =  $this->getEntityManager()
            ->createQuery(
                $sql
            );

        return $query->getResult();
    }

    public function countTaxeEachYear($idEnterprise, $year): array
    {
        // Get the amount of money for each year and for one establishment
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
        'SELECT SUM(taxe.montantTaxe) as amount
            FROM App\Entity\VerseTaxeApprentissage taxe JOIN taxe.idEntreprise ent
            WHERE ent.id = :idEtab
            AND taxe.anneeVersement BETWEEN :yearBegin AND :yearEnd'
        )->setParameter('idEtab', $idEnterprise)->setParameter('yearBegin', $year.'-01-01')
        ->setParameter('yearEnd', $year.'-12-31');

        return $query->getResult();
    }

    public function countTaxeEachYearForOneDepartment($idEnterprise, $year, $libelleDepartment): array
    {
        // Get the amount of money for each year and for one establishment
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
        'SELECT SUM(taxe.montantTaxe) as amount
            FROM App\Entity\VerseTaxeApprentissage taxe
            JOIN taxe.idEntreprise ent
            JOIN taxe.idDepartement dep
            WHERE ent.id = :idEtab
            AND taxe.anneeVersement BETWEEN :yearBegin AND :yearEnd
            AND dep.libelleDepartement LIKE :depart'
        )->setParameter('idEtab', $idEnterprise)->setParameter('yearBegin', $year.'-01-01')
        ->setParameter('yearEnd', $year.'-12-31')->setParameter('depart', $libelleDepartment);

        /*$query = $entityManager->createQuery(
        'SELECT SUM(taxe.montantTaxe) as amount
            FROM App\Entity\VerseTaxeApprentissage taxe
            JOIN taxe.idEntreprise ent
            JOIN taxe.idDepartement dep
            WHERE ent.id = :idEtab
            AND taxe.anneeVersement BETWEEN :yearBegin AND :yearEnd
            AND dep.libelleDepartement LIKE :department'
        )->setParameter('idEtab', $idEnterprise)->setParameter('yearBegin', $year.'-01-01')
        ->setParameter('yearEnd', $year.'-12-31')->setParameter('department', $department);*/

        return $query->getResult();
    }
}
