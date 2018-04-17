<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class TypeForumRepository extends EntityRepository
{
    public function myFindAll(): array
    {
        $qb = $this->createQueryBuilder()
      ->select('libelleTypeForum')
      ->from($this->_entityName, 'libelleTypeForum')
    ;

        return $qb->execute();
    }

    public function findEtablissementByForum($nom_forum): array
    {
        $qb = $this->createQueryBuilder("part_forum");

        $subquery = $subqueryBuilder->select('part_forum.id_forum')
                   ->from('App\Entity\ParticipationForum', 'forum'); //innerjoin avec la 2eme BDD

        $subquery->andWhere($subquery->expr()->eq('forum.properties', 'part_forum')); //1ere condition de linkage

        return $qb->execute();
    }

    /*public function findEtablissementByForum($nom_forum): array
    {
        $sql = "SELECT participation_forum FROM App\Entity\ParticipationForum participation_forum JOIN participation_forum.id_forum forum JOIN forum.id_type_forum type_forum WHERE type_forum.libelle_type_forum = '".$nom_forum."'";

        $query =  $this->getEntityManager()
            ->createQuery(
                $sql
            );

        return $query->getResult();
    }*/
}
