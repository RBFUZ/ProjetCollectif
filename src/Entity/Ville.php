<?php

<<<<<<< HEAD

namespace App\Entity;
=======
namespace App\Entity;

>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
<<<<<<< HEAD
 * @ORM\Table(name="Ville", indexes={@ORM\Index(name="fk_Ville_Pays1_idx", columns={"idPays"})})
=======
 * @ORM\Table(name="ville", indexes={@ORM\Index(name="fk_Ville_Pays1_idx", columns={"id_pays"})})
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
 * @ORM\Entity
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
<<<<<<< HEAD
     * @ORM\Column(name="nomVille", type="string", length=200, nullable=false)
     */
    private $nomville;

    /**
     * @var \Pays
     *
     * @ORM\ManyToOne(targetEntity="Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPays", referencedColumnName="id")
     * })
     */
    private $idpays;

    /**
     * @return int
     */
    public function getId(): int
=======
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
    public function getNomville(): string
    {
        return $this->nomville;
    }

    /**
     * @param string $nomville
     */
    public function setNomville(string $nomville): void
    {
        $this->nomville = $nomville;
    }

    /**
     * @return \Pays
     */
    public function getIdpays(): \Pays
    {
        return $this->idpays;
    }

    /**
     * @param \Pays $idpays
     */
    public function setIdpays(\Pays $idpays): void
    {
        $this->idpays = $idpays;
    }



=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
}
