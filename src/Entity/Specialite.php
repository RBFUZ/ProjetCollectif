<?php

<<<<<<< HEAD

namespace App\Entity;
=======
namespace App\Entity;

>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
use Doctrine\ORM\Mapping as ORM;

/**
 * Specialite
 *
<<<<<<< HEAD
 * @ORM\Table(name="Specialite", uniqueConstraints={@ORM\UniqueConstraint(name="libelleSpecialite_UNIQUE", columns={"libelleSpecialite"})}, indexes={@ORM\Index(name="fk_Specialite_Departement1_idx", columns={"idDepartement"})})
=======
 * @ORM\Table(name="specialite", uniqueConstraints={@ORM\UniqueConstraint(name="libelleSpecialite_UNIQUE", columns={"libelle_specialite"})}, indexes={@ORM\Index(name="fk_Specialite_Departement1_idx", columns={"id_departement"})})
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
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
<<<<<<< HEAD
     * @ORM\Column(name="libelleSpecialite", type="string", length=100, nullable=false)
     */
    private $libellespecialite;

    /**
     * @var \Departement
     *
     * @ORM\ManyToOne(targetEntity="Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDepartement", referencedColumnName="id")
     * })
     */
    private $iddepartement;

    /**
     * @return int
     */
    public function getId(): int
=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
    {
        return $this->id;
    }

    /**
<<<<<<< HEAD
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLibellespecialite(): string
    {
        return $this->libellespecialite;
    }

    /**
     * @param string $libellespecialite
     */
    public function setLibellespecialite(string $libellespecialite): void
    {
        $this->libellespecialite = $libellespecialite;
    }

    /**
     * @return \Departement
     */
    public function getIddepartement(): \Departement
    {
        return $this->iddepartement;
    }

    /**
     * @param \Departement $iddepartement
     */
    public function setIddepartement(\Departement $iddepartement): void
    {
        $this->iddepartement = $iddepartement;
    }



=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
}
