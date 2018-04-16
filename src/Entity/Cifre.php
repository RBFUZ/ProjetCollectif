<?php

<<<<<<< HEAD

namespace App\Entity;
=======
namespace App\Entity;

>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
use Doctrine\ORM\Mapping as ORM;

/**
 * Cifre
 *
<<<<<<< HEAD
 * @ORM\Table(name="CIFRE", indexes={@ORM\Index(name="fk_CIFRE_Etudiant1_idx", columns={"idPersonneEtudiant", "idEtudiant"}), @ORM\Index(name="fk_CIFRE_Etablissement1_idx", columns={"idEtablissement"}), @ORM\Index(name="fk_CIFRE_PersonnelPolytech1_idx", columns={"idPersonnePersonnelPolytech", "idPersonnelPolytech"})})
=======
 * @ORM\Table(name="cifre", indexes={@ORM\Index(name="fk_CIFRE_Etudiant1_idx", columns={"id_personne_etudiant", "id_etudiant"}), @ORM\Index(name="fk_CIFRE_Etablissement1_idx", columns={"id_etablissement"}), @ORM\Index(name="fk_CIFRE_PersonnelPolytech1_idx", columns={"id_personne_personnel_polytech", "id_personnel_polytech"})})
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
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
<<<<<<< HEAD
     * @ORM\Column(name="intituleCIFRE", type="string", length=255, nullable=false)
     */
    private $intitulecifre;
=======
     * @ORM\Column(name="intitule_cifre", type="string", length=255, nullable=false)
     */
    private $intituleCifre;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var \DateTime
     *
<<<<<<< HEAD
     * @ORM\Column(name="dateDebutCIFRE", type="date", nullable=false)
     */
    private $datedebutcifre;
=======
     * @ORM\Column(name="date_debut_cifre", type="date", nullable=false)
     */
    private $dateDebutCifre;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var bool
     *
     * @ORM\Column(name="soutenue", type="boolean", nullable=false)
     */
    private $soutenue;

    /**
<<<<<<< HEAD
     * @var \Etablissement
     *
     * @ORM\ManyToOne(targetEntity="Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEtablissement", referencedColumnName="id")
     * })
     */
    private $idetablissement;

    /**
     * @var \Etudiant
     *
     * @ORM\ManyToOne(targetEntity="Etudiant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPersonneEtudiant", referencedColumnName="idPersonne"),
     *   @ORM\JoinColumn(name="idEtudiant", referencedColumnName="id")
     * })
     */
    private $idpersonneetudiant;

    /**
     * @var \Personnelpolytech
     *
     * @ORM\ManyToOne(targetEntity="Personnelpolytech")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPersonnePersonnelPolytech", referencedColumnName="idPersonne"),
     *   @ORM\JoinColumn(name="idPersonnelPolytech", referencedColumnName="id")
     * })
     */
    private $idpersonnepersonnelpolytech;

    /**
     * @return int
     */
    public function getId(): int
=======
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
    public function getIntitulecifre(): string
    {
        return $this->intitulecifre;
    }

    /**
     * @param string $intitulecifre
     */
    public function setIntitulecifre(string $intitulecifre): void
    {
        $this->intitulecifre = $intitulecifre;
    }

    /**
     * @return \DateTime
     */
    public function getDatedebutcifre(): \DateTime
    {
        return $this->datedebutcifre;
    }

    /**
     * @param \DateTime $datedebutcifre
     */
    public function setDatedebutcifre(\DateTime $datedebutcifre): void
    {
        $this->datedebutcifre = $datedebutcifre;
    }

    /**
     * @return bool
     */
    public function isSoutenue(): bool
=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
    {
        return $this->soutenue;
    }

    /**
<<<<<<< HEAD
     * @param bool $soutenue
     */
    public function setSoutenue(bool $soutenue): void
    {
        $this->soutenue = $soutenue;
    }

    /**
     * @return \Etablissement
     */
    public function getIdetablissement(): \Etablissement
    {
        return $this->idetablissement;
    }

    /**
     * @param \Etablissement $idetablissement
     */
    public function setIdetablissement(\Etablissement $idetablissement): void
    {
        $this->idetablissement = $idetablissement;
    }

    /**
     * @return \Etudiant
     */
    public function getIdpersonneetudiant(): \Etudiant
    {
        return $this->idpersonneetudiant;
    }

    /**
     * @param \Etudiant $idpersonneetudiant
     */
    public function setIdpersonneetudiant(\Etudiant $idpersonneetudiant): void
    {
        $this->idpersonneetudiant = $idpersonneetudiant;
    }

    /**
     * @return \Personnelpolytech
     */
    public function getIdpersonnepersonnelpolytech(): \Personnelpolytech
    {
        return $this->idpersonnepersonnelpolytech;
    }

    /**
     * @param \Personnelpolytech $idpersonnepersonnelpolytech
     */
    public function setIdpersonnepersonnelpolytech(\Personnelpolytech $idpersonnepersonnelpolytech): void
    {
        $this->idpersonnepersonnelpolytech = $idpersonnepersonnelpolytech;
    }


=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
}
