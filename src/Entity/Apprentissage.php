<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Apprentissage
 *
 * @ORM\Table(name="apprentissage", indexes={@ORM\Index(name="fk_Apprentissage_Gratification1_idx", columns={"id_gratification"}), @ORM\Index(name="fk_Apprentissage_Specialite1_idx", columns={"id_specialite"}), @ORM\Index(name="fk_Apprentissage_Etudiant1_idx", columns={"id_personne_etudiant", "id_etudiant"}), @ORM\Index(name="fk_Apprentissage_Etablissement1_idx", columns={"id_etablissement"})})
 * @ORM\Entity
 */
class Apprentissage
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_apprentissage", type="date", nullable=false)
     */
    private $dateDebutApprentissage;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin_apprentissage", type="date", nullable=true)
     */
    private $dateFinApprentissage;

    /**
     * @var int
     *
     * @ORM\Column(name="duree_apprentissage_annees", type="integer", nullable=false, options={"comment"="1 an, 3 ans, etc."})
     */
    private $dureeApprentissageAnnees;

    /**
     * @var bool
     *
     * @ORM\Column(name="etranger", type="boolean", nullable=false)
     */
    private $etranger;

    /**
     * @var string|null
     *
     * @ORM\Column(name="details_apprentissage", type="text", length=65535, nullable=true)
     */
    private $detailsApprentissage;

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
     * @var \App\Entity\Gratification
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Gratification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_gratification", referencedColumnName="id")
     * })
     */
    private $idGratification;

    /**
     * @var \App\Entity\Specialite
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Specialite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_specialite", referencedColumnName="id")
     * })
     */
    private $idSpecialite;



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
     * Set dateDebutApprentissage.
     *
     * @param \DateTime $dateDebutApprentissage
     *
     * @return Apprentissage
     */
    public function setDateDebutApprentissage($dateDebutApprentissage)
    {
        $this->dateDebutApprentissage = $dateDebutApprentissage;

        return $this;
    }

    /**
     * Get dateDebutApprentissage.
     *
     * @return \DateTime
     */
    public function getDateDebutApprentissage()
    {
        return $this->dateDebutApprentissage;
    }

    /**
     * Set dateFinApprentissage.
     *
     * @param \DateTime|null $dateFinApprentissage
     *
     * @return Apprentissage
     */
    public function setDateFinApprentissage($dateFinApprentissage = null)
    {
        $this->dateFinApprentissage = $dateFinApprentissage;

        return $this;
    }

    /**
     * Get dateFinApprentissage.
     *
     * @return \DateTime|null
     */
    public function getDateFinApprentissage()
    {
        return $this->dateFinApprentissage;
    }

    /**
     * Set dureeApprentissageAnnees.
     *
     * @param int $dureeApprentissageAnnees
     *
     * @return Apprentissage
     */
    public function setDureeApprentissageAnnees($dureeApprentissageAnnees)
    {
        $this->dureeApprentissageAnnees = $dureeApprentissageAnnees;

        return $this;
    }

    /**
     * Get dureeApprentissageAnnees.
     *
     * @return int
     */
    public function getDureeApprentissageAnnees()
    {
        return $this->dureeApprentissageAnnees;
    }

    /**
     * Set etranger.
     *
     * @param bool $etranger
     *
     * @return Apprentissage
     */
    public function setEtranger($etranger)
    {
        $this->etranger = $etranger;

        return $this;
    }

    /**
     * Get etranger.
     *
     * @return bool
     */
    public function getEtranger()
    {
        return $this->etranger;
    }

    /**
     * Set detailsApprentissage.
     *
     * @param string|null $detailsApprentissage
     *
     * @return Apprentissage
     */
    public function setDetailsApprentissage($detailsApprentissage = null)
    {
        $this->detailsApprentissage = $detailsApprentissage;

        return $this;
    }

    /**
     * Get detailsApprentissage.
     *
     * @return string|null
     */
    public function getDetailsApprentissage()
    {
        return $this->detailsApprentissage;
    }

    /**
     * Set idEtablissement.
     *
     * @param \App\Entity\Etablissement|null $idEtablissement
     *
     * @return Apprentissage
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
     * @return Apprentissage
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
     * Set idGratification.
     *
     * @param \App\Entity\Gratification|null $idGratification
     *
     * @return Apprentissage
     */
    public function setIdGratification(\App\Entity\Gratification $idGratification = null)
    {
        $this->idGratification = $idGratification;

        return $this;
    }

    /**
     * Get idGratification.
     *
     * @return \App\Entity\Gratification|null
     */
    public function getIdGratification()
    {
        return $this->idGratification;
    }

    /**
     * Set idSpecialite.
     *
     * @param \App\Entity\Specialite|null $idSpecialite
     *
     * @return Apprentissage
     */
    public function setIdSpecialite(\App\Entity\Specialite $idSpecialite = null)
    {
        $this->idSpecialite = $idSpecialite;

        return $this;
    }

    /**
     * Get idSpecialite.
     *
     * @return \App\Entity\Specialite|null
     */
    public function getIdSpecialite()
    {
        return $this->idSpecialite;
    }
}
