<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cifre
 *
 * @ORM\Table(name="cifre", indexes={@ORM\Index(name="fk_CIFRE_Etudiant1_idx", columns={"id_personne_etudiant", "id_etudiant"}), @ORM\Index(name="fk_CIFRE_Etablissement1_idx", columns={"id_etablissement"}), @ORM\Index(name="fk_CIFRE_PersonnelPolytech1_idx", columns={"id_personne_personnel_polytech", "id_personnel_polytech"})})
 * @ORM\Entity
 */
class Cifre
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
     * @ORM\Column(name="intitule_cifre", type="string", length=255, nullable=false)
     */
    private $intituleCifre;

    /**
     * @var bool
     *
     * @ORM\Column(name="soutenue", type="boolean", nullable=false, options={"default"="1"})
     */
    private $soutenue = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_cifre", type="date", nullable=false)
     */
    private $dateDebutCifre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin_cifre", type="date", nullable=true)
     */
    private $dateFinCifre;

    /**
     * @var \App\Entity\Etablissement
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_etablissement", referencedColumnName="id")
     * })
     */
    private $idEtablissement;

    /**
     * @var \App\Entity\Etudiant
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Etudiant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_personne_etudiant", referencedColumnName="id_personne"),
     *   @ORM\JoinColumn(name="id_etudiant", referencedColumnName="id")
     * })
     */
    private $idPersonneEtudiant;

    /**
     * @var \App\Entity\PersonnelPolytech
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\PersonnelPolytech")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_personne_personnel_polytech", referencedColumnName="id_personne"),
     *   @ORM\JoinColumn(name="id_personnel_polytech", referencedColumnName="id")
     * })
     */
    private $idPersonnePersonnelPolytech;



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
     * Set intituleCifre.
     *
     * @param string $intituleCifre
     *
     * @return Cifre
     */
    public function setIntituleCifre($intituleCifre)
    {
        $this->intituleCifre = $intituleCifre;

        return $this;
    }

    /**
     * Get intituleCifre.
     *
     * @return string
     */
    public function getIntituleCifre()
    {
        return $this->intituleCifre;
    }

    /**
     * Set soutenue.
     *
     * @param bool $soutenue
     *
     * @return Cifre
     */
    public function setSoutenue($soutenue)
    {
        $this->soutenue = $soutenue;

        return $this;
    }

    /**
     * Get soutenue.
     *
     * @return bool
     */
    public function getSoutenue()
    {
        return $this->soutenue;
    }

    /**
     * Set dateDebutCifre.
     *
     * @param \DateTime $dateDebutCifre
     *
     * @return Cifre
     */
    public function setDateDebutCifre($dateDebutCifre)
    {
        $this->dateDebutCifre = $dateDebutCifre;

        return $this;
    }

    /**
     * Get dateDebutCifre.
     *
     * @return \DateTime
     */
    public function getDateDebutCifre()
    {
        return $this->dateDebutCifre;
    }

    /**
     * Set dateFinCifre.
     *
     * @param \DateTime|null $dateFinCifre
     *
     * @return Cifre
     */
    public function setDateFinCifre($dateFinCifre = null)
    {
        $this->dateFinCifre = $dateFinCifre;

        return $this;
    }

    /**
     * Get dateFinCifre.
     *
     * @return \DateTime|null
     */
    public function getDateFinCifre()
    {
        return $this->dateFinCifre;
    }

    /**
     * Set idEtablissement.
     *
     * @param \App\Entity\Etablissement|null $idEtablissement
     *
     * @return Cifre
     */
    public function setIdEtablissement(\App\Entity\Etablissement $idEtablissement = null)
    {
        $this->idEtablissement = $idEtablissement;

        return $this;
    }

    /**
     * Get idEtablissement.
     *
     * @return \App\Entity\Etablissement|null
     */
    public function getIdEtablissement()
    {
        return $this->idEtablissement;
    }

    /**
     * Set idPersonneEtudiant.
     *
     * @param \App\Entity\Etudiant|null $idPersonneEtudiant
     *
     * @return Cifre
     */
    public function setIdPersonneEtudiant(\App\Entity\Etudiant $idPersonneEtudiant = null)
    {
        $this->idPersonneEtudiant = $idPersonneEtudiant;

        return $this;
    }

    /**
     * Get idPersonneEtudiant.
     *
     * @return \App\Entity\Etudiant|null
     */
    public function getIdPersonneEtudiant()
    {
        return $this->idPersonneEtudiant;
    }

    /**
     * Set idPersonnePersonnelPolytech.
     *
     * @param \App\Entity\PersonnelPolytech|null $idPersonnePersonnelPolytech
     *
     * @return Cifre
     */
    public function setIdPersonnePersonnelPolytech(\App\Entity\PersonnelPolytech $idPersonnePersonnelPolytech = null)
    {
        $this->idPersonnePersonnelPolytech = $idPersonnePersonnelPolytech;

        return $this;
    }

    /**
     * Get idPersonnePersonnelPolytech.
     *
     * @return \App\Entity\PersonnelPolytech|null
     */
    public function getIdPersonnePersonnelPolytech()
    {
        return $this->idPersonnePersonnelPolytech;
    }
}
