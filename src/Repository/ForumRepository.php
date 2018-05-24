<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class ForumRepository extends EntityRepository
{
    public function getOldestForum($typeForum): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
        'SELECT MIN(for.dateDebutForum) as date
            FROM App\Entity\Forum for JOIN for.idTypeForum type
            WHERE type.libelleTypeForum = :typeForum'
    )->setParameter('typeForum', $typeForum)->setMaxResults(1);

        return $query->getResult();
    }

    public function checkIfForumExist($idTypeForum): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
        'SELECT for
            FROM App\Entity\Forum for JOIN for.idTypeForum type
            WHERE type.id = :idTypeForum'
    )->setParameter('idTypeForum', $idTypeForum)->setMaxResults(1);

        return $query->getResult();
    }

    public function checkIfForumByYear($type, $year, $idEstablishment): string
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
        'SELECT part_forum
            FROM App\Entity\ParticipationForum part_forum JOIN part_forum.idForum forum
            JOIN forum.idTypeForum type
            WHERE part_forum.idEtablissement = :idEtablissement
            AND type.id = :idTypeForum
            AND forum.dateDebutForum BETWEEN :yearBegin AND :yearEnd'
    )->setParameter('idEtablissement', $idEstablishment)->setParameter('idTypeForum', $type)->setParameter('yearBegin', $year.'-01-01')
    ->setParameter('yearEnd', $year.'-12-31')
    ->setMaxResults(1);

        $result = $query->getResult();

        if (count($result) == 0) {
            return "/img/redCross.png";
        } else {
            return "/img/greenCheck.png";
        }
    }

    public function findForumByName($nameForum)
    {
        $sql = "SELECT for  FROM App\Entity\Forum for
            WHERE UPPER(for.nomForum) = :nom";

        $query =  $this->getEntityManager()
            ->createQuery(
                $sql
            )->setParameter("nom", strtoupper($nameForum));

        return $query->getOneOrNullResult();
    }
}
