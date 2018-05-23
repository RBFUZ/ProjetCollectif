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
    public function countApprenticeshipForOneYear($idEstablishment, $year, $department): array
    {
        $entityManager = $this->getEntityManager();

        if ($department == "all") {
            $query = $entityManager->createQuery(
            'SELECT COUNT(app.dateDebutApprentissage) as nbApprenticeship
                FROM App\Entity\Apprentissage app JOIN app.idEtablissement etab
                WHERE etab.id = :idEtab
                AND app.dateDebutApprentissage BETWEEN :yearBegin AND :yearEnd'
            )->setParameter('idEtab', $idEstablishment)->setParameter('yearBegin', $year.'-01-01')
            ->setParameter('yearEnd', $year.'-12-31');
        } else {
            $query = $entityManager->createQuery(
            'SELECT COUNT(app.dateDebutApprentissage) as nbApprenticeship
                FROM App\Entity\Apprentissage app JOIN app.idEtablissement etab
                JOIN app.idSpecialite spe
                JOIN spe.idDepartement dep
                WHERE etab.id = :idEtab
                AND dep.libelleDepartement = :department
                AND app.dateDebutApprentissage BETWEEN :yearBegin AND :yearEnd'
            )->setParameter('idEtab', $idEstablishment)->setParameter('department', $department)->setParameter('yearBegin', $year.'-01-01')
            ->setParameter('yearEnd', $year.'-12-31');
        }

        return $query->getResult();
    }


    public function findByStudent($idStudent)
    {
        //$entityManager = $this->getEntityManager();
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT * FROM  apprentissage  
            WHERE apprentissage.id_personne_etudiant = :idPerson';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['idPerson' => $idStudent]);




        return $stmt->fetchAll();
    }
}
