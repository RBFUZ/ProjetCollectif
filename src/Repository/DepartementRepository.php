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

    public function getIdByName($name) : array
    {
        $sql = "SELECT dep.id
            FROM App\Entity\Departement dep
            WHERE dep.libelleDepartement = '".$name."'";

        $query =  $this->getEntityManager()
            ->createQuery(
                $sql
            );

        return $query->getResult();
    }

    public function getDepByName($name)
    {
        $sql = "SELECT dep
            FROM App\Entity\Departement dep
            WHERE dep.libelleDepartement = '".$name."'";

        $query =  $this->getEntityManager()
            ->createQuery(
                $sql
            );

        return $query->getSingleResult();
    }
}
