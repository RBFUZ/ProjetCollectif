<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville", indexes={@ORM\Index(name="fk_Ville_Pays1_idx", columns={"id_pays"})})
 * @ORM\Entity(repositoryClass="App\Repository\VilleRepository")
 */
class Ville
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
     * @ORM\Column(name="nom_ville", type="string", length=200, nullable=false)
     */
    private $nomVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="departement", type="string", length=3, nullable=true)
     */
    private $departement;

    /**
     * @var \App\Entity\Pays
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pays", referencedColumnName="id")
     * })
     */
    private $idPays;



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
     * Set nomVille.
     *
     * @param string $nomVille
     *
     * @return Ville
     */
    public function setNomVille($nomVille)
    {
        $this->nomVille = $nomVille;

        return $this;
    }

    /**
     * Get nomVille.
     *
     * @return string
     */
    public function getNomVille()
    {
        return $this->nomVille;
    }

    /**
     * Set departement.
     *
     * @param string|null $departement
     *
     * @return Ville
     */
    public function setDepartement($departement = null)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement.
     *
     * @return string|null
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set idPays.
     *
     * @param \App\Entity\Pays|null $idPays
     *
     * @return Ville
     */
    public function setIdPays(\App\Entity\Pays $idPays = null)
    {
        $this->idPays = $idPays;

        return $this;
    }

    /**
     * Get idPays.
     *
     * @return \App\Entity\Pays|null
     */
    public function getIdPays()
    {
        return $this->idPays;
    }
}
