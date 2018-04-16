<?php

<<<<<<< HEAD

namespace App\Entity;
=======
namespace App\Entity;

>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
<<<<<<< HEAD
 * @ORM\Table(name="Adresse", indexes={@ORM\Index(name="fk_Adresse_Ville1_idx", columns={"Ville_idVille"})})
=======
 * @ORM\Table(name="adresse", indexes={@ORM\Index(name="fk_Adresse_Ville1_idx", columns={"id_ville"})})
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
 * @ORM\Entity
 */
class Adresse
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
     * @ORM\Column(name="adresse", type="string", length=200, nullable=false)
=======
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
     */
    private $adresse;

    /**
     * @var string|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="complementAdresse", type="string", length=200, nullable=true)
     */
    private $complementadresse;
=======
     * @ORM\Column(name="complement_adresse", type="string", length=255, nullable=true)
     */
    private $complementAdresse;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="codePostal", type="string", length=45, nullable=false)
     */
    private $codepostal;

    /**
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Ville_idVille", referencedColumnName="id")
     * })
     */
    private $villeville;

    /**
     * @return int
     */
    public function getId(): int
=======
     * @ORM\Column(name="code_postal", type="string", length=45, nullable=false)
     */
    private $codePostal;

    /**
     * @var \App\Entity\Ville
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ville", referencedColumnName="id")
     * })
     */
    private $idVille;



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
    public function getAdresse(): string
=======
     * Set adresse.
     *
     * @param string $adresse
     *
     * @return Adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse.
     *
     * @return string
     */
    public function getAdresse()
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
    {
        return $this->adresse;
    }

    /**
<<<<<<< HEAD
     * @param string $adresse
     */
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return null|string
     */
    public function getComplementadresse(): ?string
    {
        return $this->complementadresse;
    }

    /**
     * @param null|string $complementadresse
     */
    public function setComplementadresse(?string $complementadresse): void
    {
        $this->complementadresse = $complementadresse;
    }

    /**
     * @return string
     */
    public function getCodepostal(): string
    {
        return $this->codepostal;
    }

    /**
     * @param string $codepostal
     */
    public function setCodepostal(string $codepostal): void
    {
        $this->codepostal = $codepostal;
    }

    /**
     * @return Ville
     */
    public function getVilleville(): Ville
    {
        return $this->villeville;
    }

    /**
     * @param Ville $villeville
     */
    public function setVilleville(Ville $villeville): void
    {
        $this->villeville = $villeville;
    }



=======
     * Set complementAdresse.
     *
     * @param string|null $complementAdresse
     *
     * @return Adresse
     */
    public function setComplementAdresse($complementAdresse = null)
    {
        $this->complementAdresse = $complementAdresse;

        return $this;
    }

    /**
     * Get complementAdresse.
     *
     * @return string|null
     */
    public function getComplementAdresse()
    {
        return $this->complementAdresse;
    }

    /**
     * Set codePostal.
     *
     * @param string $codePostal
     *
     * @return Adresse
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal.
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set idVille.
     *
     * @param \App\Entity\Ville|null $idVille
     *
     * @return Adresse
     */
    public function setIdVille(\App\Entity\Ville $idVille = null)
    {
        $this->idVille = $idVille;

        return $this;
    }

    /**
     * Get idVille.
     *
     * @return \App\Entity\Ville|null
     */
    public function getIdVille()
    {
        return $this->idVille;
    }
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
}
