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
}
