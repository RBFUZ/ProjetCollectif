<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specialite
 *
 * @ORM\Table(name="specialite", uniqueConstraints={@ORM\UniqueConstraint(name="libelleSpecialite_UNIQUE", columns={"libelle_specialite"})}, indexes={@ORM\Index(name="fk_Specialite_Departement1_idx", columns={"id_departement"})})
 * @ORM\Entity
 */
class Specialite
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
     * @ORM\Column(name="libelle_specialite", type="string", length=100, nullable=false)
     */
    private $libelleSpecialite;

    /**
     * @var \App\Entity\Departement
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_departement", referencedColumnName="id")
     * })
     */
    private $idDepartement;



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
     * Set libelleSpecialite.
     *
     * @param string $libelleSpecialite
     *
     * @return Specialite
     */
    public function setLibelleSpecialite($libelleSpecialite)
    {
        $this->libelleSpecialite = $libelleSpecialite;

        return $this;
    }

    /**
     * Get libelleSpecialite.
     *
     * @return string
     */
    public function getLibelleSpecialite()
    {
        return $this->libelleSpecialite;
    }

    /**
     * Set idDepartement.
     *
     * @param \App\Entity\Departement|null $idDepartement
     *
     * @return Specialite
     */
    public function setIdDepartement(\App\Entity\Departement $idDepartement = null)
    {
        $this->idDepartement = $idDepartement;

        return $this;
    }

    /**
     * Get idDepartement.
     *
     * @return \App\Entity\Departement|null
     */
    public function getIdDepartement()
    {
        return $this->idDepartement;
    }
}
