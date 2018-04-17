<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement", uniqueConstraints={@ORM\UniqueConstraint(name="libelleDepartement_UNIQUE", columns={"libelle_departement"})})
 * @ORM\Entity
 */
class Departement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_departement", type="string", length=100, nullable=false)
     */
    private $libelleDepartement;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelleDepartement.
     *
     * @param string $libelleDepartement
     *
     * @return Departement
     */
    public function setLibelleDepartement($libelleDepartement)
    {
        $this->libelleDepartement = $libelleDepartement;

        return $this;
    }

    /**
     * Get libelleDepartement.
     *
     * @return string
     */
    public function getLibelleDepartement()
    {
        return $this->libelleDepartement;
    }
}
