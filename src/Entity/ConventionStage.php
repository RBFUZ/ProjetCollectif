<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConventionStage
 *
 * @ORM\Table(name="convention_stage", uniqueConstraints={@ORM\UniqueConstraint(name="numero_convention_UNIQUE", columns={"numero_convention"})}, indexes={@ORM\Index(name="fk_ConventionStage_Stage1_idx", columns={"id_stage"}), @ORM\Index(name="fk_ConventionStage_Gratification1_idx", columns={"id_gratification"}), @ORM\Index(name="fk_ConventionStage_Etudiant1_idx", columns={"id_etudiant", "id_personne_etudiant"}), @ORM\Index(name="fk_ConventionStage_Specialite1_idx", columns={"id_specialite"}), @ORM\Index(name="fk_ConventionStage_PersonnelPolytech1_idx", columns={"id_personnel_polytech_tuteur", "id_personne_personnel_polytech_tuteur"}), @ORM\Index(name="fk_ConventionStage_PersonnelPolytech2_idx", columns={"id_personnel_polytech_charge_suivi", "id_personne_personnel_polytech_charge_suivi"}), @ORM\Index(name="fk_ConventionStage_ContactEtablissement1_idx", columns={"id_contact_etablissement_tuteur", "id_personne_contact_etablissement_tuteur"}), @ORM\Index(name="fk_ConventionStage_ContactEtablissement2_idx", columns={"id_contact_etablissement_signataire", "id_personne_contact_etablissement_signataire"}), @ORM\Index(name="fk_ConventionStage_Etablissement1_idx", columns={"id_etablissement"}), @ORM\Index(name="fk_ConventionStage_ServiceAccueil1_idx", columns={"id_service_accueil"})})
 * @ORM\Entity(repositoryClass="App\Repository\ConventionStageRepository")
 */
class ConventionStage
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
     * @var int|null
     *
     * @ORM\Column(name="numero_convention", type="integer", nullable=true)
     */
    private $numeroConvention;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=false, options={"default"="1900-01-01"})
     */
    private $dateCreation = '1900-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_derniere_modification", type="date", nullable=false, options={"default"="1900-01-01"})
     */
    private $dateDerniereModification = '1900-01-01';

    /**
     * @var bool
     *
     * @ORM\Column(name="validee", type="boolean", nullable=false, options={"default"="1"})
     */
    private $validee = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="validee_pedagogiquement", type="boolean", nullable=false, options={"default"="1"})
     */
    private $valideePedagogiquement = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_convention", type="string", length=45, nullable=true, options={"comment"="Obligatoire, non obligatoire, ..."})
     */
    private $typeConvention;

    /**
     * @var \App\Entity\ContactEtablissement
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ContactEtablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_contact_etablissement_tuteur", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="id_personne_contact_etablissement_tuteur", referencedColumnName="id_personne")
     * })
     */
    private $idContactEtablissementTuteur;

    /**
     * @var \App\Entity\ContactEtablissement
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ContactEtablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_contact_etablissement_signataire", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="id_personne_contact_etablissement_signataire", referencedColumnName="id_personne")
     * })
     */
    private $idContactEtablissementSignataire;

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
     *   @ORM\JoinColumn(name="id_etudiant", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="id_personne_etudiant", referencedColumnName="id_personne")
     * })
     */
    private $idEtudiant;

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
     * @var \App\Entity\PersonnelPolytech
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\PersonnelPolytech")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_personnel_polytech_tuteur", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="id_personne_personnel_polytech_tuteur", referencedColumnName="id_personne")
     * })
     */
    private $idPersonnelPolytechTuteur;

    /**
     * @var \App\Entity\PersonnelPolytech
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\PersonnelPolytech")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_personnel_polytech_charge_suivi", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="id_personne_personnel_polytech_charge_suivi", referencedColumnName="id_personne")
     * })
     */
    private $idPersonnelPolytechChargeSuivi;

    /**
     * @var \App\Entity\ServiceAccueil
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ServiceAccueil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_service_accueil", referencedColumnName="id")
     * })
     */
    private $idServiceAccueil;

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
     * @var \App\Entity\Stage
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Stage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_stage", referencedColumnName="id")
     * })
     */
    private $idStage;



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
     * Set numeroConvention.
     *
     * @param int|null $numeroConvention
     *
     * @return ConventionStage
     */
    public function setNumeroConvention($numeroConvention = null)
    {
        $this->numeroConvention = $numeroConvention;

        return $this;
    }

    /**
     * Get numeroConvention.
     *
     * @return int|null
     */
    public function getNumeroConvention()
    {
        return $this->numeroConvention;
    }

    /**
     * Set dateCreation.
     *
     * @param \DateTime $dateCreation
     *
     * @return ConventionStage
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation.
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateDerniereModification.
     *
     * @param \DateTime $dateDerniereModification
     *
     * @return ConventionStage
     */
    public function setDateDerniereModification($dateDerniereModification)
    {
        $this->dateDerniereModification = $dateDerniereModification;

        return $this;
    }

    /**
     * Get dateDerniereModification.
     *
     * @return \DateTime
     */
    public function getDateDerniereModification()
    {
        return $this->dateDerniereModification;
    }

    /**
     * Set validee.
     *
     * @param bool $validee
     *
     * @return ConventionStage
     */
    public function setValidee($validee)
    {
        $this->validee = $validee;

        return $this;
    }

    /**
     * Get validee.
     *
     * @return bool
     */
    public function getValidee()
    {
        return $this->validee;
    }

    /**
     * Set valideePedagogiquement.
     *
     * @param bool $valideePedagogiquement
     *
     * @return ConventionStage
     */
    public function setValideePedagogiquement($valideePedagogiquement)
    {
        $this->valideePedagogiquement = $valideePedagogiquement;

        return $this;
    }

    /**
     * Get valideePedagogiquement.
     *
     * @return bool
     */
    public function getValideePedagogiquement()
    {
        return $this->valideePedagogiquement;
    }

    /**
     * Set typeConvention.
     *
     * @param string|null $typeConvention
     *
     * @return ConventionStage
     */
    public function setTypeConvention($typeConvention = null)
    {
        $this->typeConvention = $typeConvention;

        return $this;
    }

    /**
     * Get typeConvention.
     *
     * @return string|null
     */
    public function getTypeConvention()
    {
        return $this->typeConvention;
    }

    /**
     * Set idContactEtablissementTuteur.
     *
     * @param \App\Entity\ContactEtablissement|null $idContactEtablissementTuteur
     *
     * @return ConventionStage
     */
    public function setIdContactEtablissementTuteur(\App\Entity\ContactEtablissement $idContactEtablissementTuteur = null)
    {
        $this->idContactEtablissementTuteur = $idContactEtablissementTuteur;

        return $this;
    }

    /**
     * Get idContactEtablissementTuteur.
     *
     * @return \App\Entity\ContactEtablissement|null
     */
    public function getIdContactEtablissementTuteur()
    {
        return $this->idContactEtablissementTuteur;
    }

    /**
     * Set idContactEtablissementSignataire.
     *
     * @param \App\Entity\ContactEtablissement|null $idContactEtablissementSignataire
     *
     * @return ConventionStage
     */
    public function setIdContactEtablissementSignataire(\App\Entity\ContactEtablissement $idContactEtablissementSignataire = null)
    {
        $this->idContactEtablissementSignataire = $idContactEtablissementSignataire;

        return $this;
    }

    /**
     * Get idContactEtablissementSignataire.
     *
     * @return \App\Entity\ContactEtablissement|null
     */
    public function getIdContactEtablissementSignataire()
    {
        return $this->idContactEtablissementSignataire;
    }

    /**
     * Set idEtablissement.
     *
     * @param \App\Entity\Etablissement|null $idEtablissement
     *
     * @return ConventionStage
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
     * Set idEtudiant.
     *
     * @param \App\Entity\Etudiant|null $idEtudiant
     *
     * @return ConventionStage
     */
    public function setIdEtudiant(\App\Entity\Etudiant $idEtudiant = null)
    {
        $this->idEtudiant = $idEtudiant;

        return $this;
    }

    /**
     * Get idEtudiant.
     *
     * @return \App\Entity\Etudiant|null
     */
    public function getIdEtudiant()
    {
        return $this->idEtudiant;
    }

    /**
     * Set idGratification.
     *
     * @param \App\Entity\Gratification|null $idGratification
     *
     * @return ConventionStage
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
     * Set idPersonnelPolytechTuteur.
     *
     * @param \App\Entity\PersonnelPolytech|null $idPersonnelPolytechTuteur
     *
     * @return ConventionStage
     */
    public function setIdPersonnelPolytechTuteur(\App\Entity\PersonnelPolytech $idPersonnelPolytechTuteur = null)
    {
        $this->idPersonnelPolytechTuteur = $idPersonnelPolytechTuteur;

        return $this;
    }

    /**
     * Get idPersonnelPolytechTuteur.
     *
     * @return \App\Entity\PersonnelPolytech|null
     */
    public function getIdPersonnelPolytechTuteur()
    {
        return $this->idPersonnelPolytechTuteur;
    }

    /**
     * Set idPersonnelPolytechChargeSuivi.
     *
     * @param \App\Entity\PersonnelPolytech|null $idPersonnelPolytechChargeSuivi
     *
     * @return ConventionStage
     */
    public function setIdPersonnelPolytechChargeSuivi(\App\Entity\PersonnelPolytech $idPersonnelPolytechChargeSuivi = null)
    {
        $this->idPersonnelPolytechChargeSuivi = $idPersonnelPolytechChargeSuivi;

        return $this;
    }

    /**
     * Get idPersonnelPolytechChargeSuivi.
     *
     * @return \App\Entity\PersonnelPolytech|null
     */
    public function getIdPersonnelPolytechChargeSuivi()
    {
        return $this->idPersonnelPolytechChargeSuivi;
    }

    /**
     * Set idServiceAccueil.
     *
     * @param \App\Entity\ServiceAccueil|null $idServiceAccueil
     *
     * @return ConventionStage
     */
    public function setIdServiceAccueil(\App\Entity\ServiceAccueil $idServiceAccueil = null)
    {
        $this->idServiceAccueil = $idServiceAccueil;

        return $this;
    }

    /**
     * Get idServiceAccueil.
     *
     * @return \App\Entity\ServiceAccueil|null
     */
    public function getIdServiceAccueil()
    {
        return $this->idServiceAccueil;
    }

    /**
     * Set idSpecialite.
     *
     * @param \App\Entity\Specialite|null $idSpecialite
     *
     * @return ConventionStage
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

    /**
     * Set idStage.
     *
     * @param \App\Entity\Stage|null $idStage
     *
     * @return ConventionStage
     */
    public function setIdStage(\App\Entity\Stage $idStage = null)
    {
        $this->idStage = $idStage;

        return $this;
    }

    /**
     * Get idStage.
     *
     * @return \App\Entity\Stage|null
     */
    public function getIdStage()
    {
        return $this->idStage;
    }
}
