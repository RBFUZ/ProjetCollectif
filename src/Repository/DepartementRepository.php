<?php

namespace App\Repository;

class DepartementRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAllDepartment(): array
    {
        $sql = "SELECT dep.libelleDepartement
            FROM App\Entity\Departement dep";

        $query =  $this->getEntityManager()
        ->createQuery(
            $sql
        );

        return $query->getResult();
    }
}
