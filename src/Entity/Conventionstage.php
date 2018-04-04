<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Conventionstage
 *
 * @ORM\Table(name="ConventionStage", indexes={@ORM\Index(name="fk_ConventionStage_Stage1_idx", columns={"idStage"}), @ORM\Index(name="fk_ConventionStage_Gratification1_idx", columns={"idGratification"}), @ORM\Index(name="fk_ConventionStage_Etudiant1_idx", columns={"idEtudiant", "idPersonneEtudiant"}), @ORM\Index(name="fk_ConventionStage_Specialite1_idx", columns={"idSpecialite"}), @ORM\Index(name="fk_ConventionStage_PersonnelPolytech1_idx", columns={"idPersonnelPolytechTuteur", "idPersonnePersonnelPolytechTuteur"}), @ORM\Index(name="fk_ConventionStage_PersonnelPolytech2_idx", columns={"idPersonnelPolytechChargeSuivi", "idPersonnePersonnelPolytechChargeSuivi"}), @ORM\Index(name="fk_ConventionStage_ContactEtablissement1_idx", columns={"idContactEtablissementTuteur", "idPersonneContactEtablissementTuteur"}), @ORM\Index(name="fk_ConventionStage_ContactEtablissement2_idx", columns={"idContactEtablissementSignataire", "idPersonneContactEtablissementSignataire"}), @ORM\Index(name="fk_ConventionStage_Etablissement1_idx", columns={"idEtablissement"}), @ORM\Index(name="fk_ConventionStage_ServiceAccueil1_idx", columns={"idServiceAccueil"})})
 * @ORM\Entity
 */
class Conventionstage
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
     * @ORM\Column(name="dateCreation", type="date", nullable=false)
     */
    private $datecreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDerniereModification", type="date", nullable=false)
     */
    private $datedernieremodification;

    /**
     * @var string|null
     *
     * @ORM\Column(name="typeConvention", type="string", length=45, nullable=true, options={"comment"="Obligatoire, non obligatoire, ..."})
     */
    private $typeconvention;

    /**
     * @var bool
     *
     * @ORM\Column(name="validee", type="boolean", nullable=false)
     */
    private $validee;

    /**
     * @var bool
     *
     * @ORM\Column(name="valideePedagogiquement", type="boolean", nullable=false)
     */
    private $valideepedagogiquement;

    /**
     * @var \Contactetablissement
     *
     * @ORM\ManyToOne(targetEntity="Contactetablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idContactEtablissementTuteur", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="idPersonneContactEtablissementTuteur", referencedColumnName="idPersonne")
     * })
     */
    private $idcontactetablissementtuteur;

    /**
     * @var \Contactetablissement
     *
     * @ORM\ManyToOne(targetEntity="Contactetablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idContactEtablissementSignataire", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="idPersonneContactEtablissementSignataire", referencedColumnName="idPersonne")
     * })
     */
    private $idcontactetablissementsignataire;

    /**
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
     *   @ORM\JoinColumn(name="idEtudiant", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="idPersonneEtudiant", referencedColumnName="idPersonne")
     * })
     */
    private $idetudiant;

    /**
     * @var \Gratification
     *
     * @ORM\ManyToOne(targetEntity="Gratification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGratification", referencedColumnName="id")
     * })
     */
    private $idgratification;

    /**
     * @var \Personnelpolytech
     *
     * @ORM\ManyToOne(targetEntity="Personnelpolytech")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPersonnelPolytechTuteur", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="idPersonnePersonnelPolytechTuteur", referencedColumnName="idPersonne")
     * })
     */
    private $idpersonnelpolytechtuteur;

    /**
     * @var \Personnelpolytech
     *
     * @ORM\ManyToOne(targetEntity="Personnelpolytech")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPersonnelPolytechChargeSuivi", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="idPersonnePersonnelPolytechChargeSuivi", referencedColumnName="idPersonne")
     * })
     */
    private $idpersonnelpolytechchargesuivi;

    /**
     * @var \Serviceaccueil
     *
     * @ORM\ManyToOne(targetEntity="Serviceaccueil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idServiceAccueil", referencedColumnName="id")
     * })
     */
    private $idserviceaccueil;

    /**
     * @var \Specialite
     *
     * @ORM\ManyToOne(targetEntity="Specialite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSpecialite", referencedColumnName="id")
     * })
     */
    private $idspecialite;

    /**
     * @var \Stage
     *
     * @ORM\ManyToOne(targetEntity="Stage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idStage", referencedColumnName="id")
     * })
     */
    private $idstage;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getDatecreation(): \DateTime
    {
        return $this->datecreation;
    }

    /**
     * @param \DateTime $datecreation
     */
    public function setDatecreation(\DateTime $datecreation): void
    {
        $this->datecreation = $datecreation;
    }

    /**
     * @return \DateTime
     */
    public function getDatedernieremodification(): \DateTime
    {
        return $this->datedernieremodification;
    }

    /**
     * @param \DateTime $datedernieremodification
     */
    public function setDatedernieremodification(\DateTime $datedernieremodification): void
    {
        $this->datedernieremodification = $datedernieremodification;
    }

    /**
     * @return null|string
     */
    public function getTypeconvention(): ?string
    {
        return $this->typeconvention;
    }

    /**
     * @param null|string $typeconvention
     */
    public function setTypeconvention(?string $typeconvention): void
    {
        $this->typeconvention = $typeconvention;
    }

    /**
     * @return bool
     */
    public function isValidee(): bool
    {
        return $this->validee;
    }

    /**
     * @param bool $validee
     */
    public function setValidee(bool $validee): void
    {
        $this->validee = $validee;
    }

    /**
     * @return bool
     */
    public function isValideepedagogiquement(): bool
    {
        return $this->valideepedagogiquement;
    }

    /**
     * @param bool $valideepedagogiquement
     */
    public function setValideepedagogiquement(bool $valideepedagogiquement): void
    {
        $this->valideepedagogiquement = $valideepedagogiquement;
    }

    /**
     * @return \Contactetablissement
     */
    public function getIdcontactetablissementtuteur(): \Contactetablissement
    {
        return $this->idcontactetablissementtuteur;
    }

    /**
     * @param \Contactetablissement $idcontactetablissementtuteur
     */
    public function setIdcontactetablissementtuteur(\Contactetablissement $idcontactetablissementtuteur): void
    {
        $this->idcontactetablissementtuteur = $idcontactetablissementtuteur;
    }

    /**
     * @return \Contactetablissement
     */
    public function getIdcontactetablissementsignataire(): \Contactetablissement
    {
        return $this->idcontactetablissementsignataire;
    }

    /**
     * @param \Contactetablissement $idcontactetablissementsignataire
     */
    public function setIdcontactetablissementsignataire(\Contactetablissement $idcontactetablissementsignataire): void
    {
        $this->idcontactetablissementsignataire = $idcontactetablissementsignataire;
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
    public function getIdetudiant(): \Etudiant
    {
        return $this->idetudiant;
    }

    /**
     * @param \Etudiant $idetudiant
     */
    public function setIdetudiant(\Etudiant $idetudiant): void
    {
        $this->idetudiant = $idetudiant;
    }

    /**
     * @return \Gratification
     */
    public function getIdgratification(): \Gratification
    {
        return $this->idgratification;
    }

    /**
     * @param \Gratification $idgratification
     */
    public function setIdgratification(\Gratification $idgratification): void
    {
        $this->idgratification = $idgratification;
    }

    /**
     * @return \Personnelpolytech
     */
    public function getIdpersonnelpolytechtuteur(): \Personnelpolytech
    {
        return $this->idpersonnelpolytechtuteur;
    }

    /**
     * @param \Personnelpolytech $idpersonnelpolytechtuteur
     */
    public function setIdpersonnelpolytechtuteur(\Personnelpolytech $idpersonnelpolytechtuteur): void
    {
        $this->idpersonnelpolytechtuteur = $idpersonnelpolytechtuteur;
    }

    /**
     * @return \Personnelpolytech
     */
    public function getIdpersonnelpolytechchargesuivi(): \Personnelpolytech
    {
        return $this->idpersonnelpolytechchargesuivi;
    }

    /**
     * @param \Personnelpolytech $idpersonnelpolytechchargesuivi
     */
    public function setIdpersonnelpolytechchargesuivi(\Personnelpolytech $idpersonnelpolytechchargesuivi): void
    {
        $this->idpersonnelpolytechchargesuivi = $idpersonnelpolytechchargesuivi;
    }

    /**
     * @return \Serviceaccueil
     */
    public function getIdserviceaccueil(): \Serviceaccueil
    {
        return $this->idserviceaccueil;
    }

    /**
     * @param \Serviceaccueil $idserviceaccueil
     */
    public function setIdserviceaccueil(\Serviceaccueil $idserviceaccueil): void
    {
        $this->idserviceaccueil = $idserviceaccueil;
    }

    /**
     * @return \Specialite
     */
    public function getIdspecialite(): \Specialite
    {
        return $this->idspecialite;
    }

    /**
     * @param \Specialite $idspecialite
     */
    public function setIdspecialite(\Specialite $idspecialite): void
    {
        $this->idspecialite = $idspecialite;
    }

    /**
     * @return \Stage
     */
    public function getIdstage(): \Stage
    {
        return $this->idstage;
    }

    /**
     * @param \Stage $idstage
     */
    public function setIdstage(\Stage $idstage): void
    {
        $this->idstage = $idstage;
    }



}
