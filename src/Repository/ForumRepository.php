<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class ForumRepository extends EntityRepository
{
    public function getOldestForum($idTypeForum): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
        'SELECT for.dateDebutForum
            FROM App\Entity\Forum for JOIN for.idTypeForum type
            WHERE type.id = :idTypeForum
            ORDER BY for.dateDebutForum ASC'
    )->setParameter('idTypeForum', $idTypeForum)->setMaxResults(1);

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
}
