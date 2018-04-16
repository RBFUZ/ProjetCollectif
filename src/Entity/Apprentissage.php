<?php

<<<<<<< HEAD

namespace App\Entity;
=======
namespace App\Entity;

>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
use Doctrine\ORM\Mapping as ORM;

/**
 * Apprentissage
 *
<<<<<<< HEAD
 * @ORM\Table(name="Apprentissage", indexes={@ORM\Index(name="fk_Apprentissage_Gratification1_idx", columns={"idGratification"}), @ORM\Index(name="fk_Apprentissage_Specialite1_idx", columns={"idSpecialite"}), @ORM\Index(name="fk_Apprentissage_Etudiant1_idx", columns={"idPersonneEtudiant", "idEtudiant"}), @ORM\Index(name="fk_Apprentissage_Etablissement1_idx", columns={"idEtablissement"})})
=======
 * @ORM\Table(name="apprentissage", indexes={@ORM\Index(name="fk_Apprentissage_Gratification1_idx", columns={"id_gratification"}), @ORM\Index(name="fk_Apprentissage_Specialite1_idx", columns={"id_specialite"}), @ORM\Index(name="fk_Apprentissage_Etudiant1_idx", columns={"id_personne_etudiant", "id_etudiant"}), @ORM\Index(name="fk_Apprentissage_Etablissement1_idx", columns={"id_etablissement"})})
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
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
<<<<<<< HEAD
     * @ORM\Column(name="dateDebutApprentissage", type="date", nullable=false)
     */
    private $datedebutapprentissage;
=======
     * @ORM\Column(name="date_debut_apprentissage", type="date", nullable=false)
     */
    private $dateDebutApprentissage;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var \DateTime|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="dateFinApprentissage", type="date", nullable=true)
     */
    private $datefinapprentissage;
=======
     * @ORM\Column(name="date_fin_apprentissage", type="date", nullable=true)
     */
    private $dateFinApprentissage;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var int
     *
<<<<<<< HEAD
     * @ORM\Column(name="dureeApprentissageAnnes", type="integer", nullable=false, options={"comment"="1 an, 3 ans, etc."})
     */
    private $dureeapprentissageannes;
=======
     * @ORM\Column(name="duree_apprentissage_annees", type="integer", nullable=false, options={"comment"="1 an, 3 ans, etc."})
     */
    private $dureeApprentissageAnnees;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var bool
     *
     * @ORM\Column(name="etranger", type="boolean", nullable=false)
     */
    private $etranger;

    /**
     * @var string|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="detailsApprentissage", type="text", length=65535, nullable=true)
     */
    private $detailsapprentissage;

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
     *   @ORM\JoinColumn(name="idPersonneEtudiant", referencedColumnName="idPersonne"),
     *   @ORM\JoinColumn(name="idEtudiant", referencedColumnName="id")
     * })
     */
    private $idpersonneetudiant;

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
     * @var \Specialite
     *
     * @ORM\ManyToOne(targetEntity="Specialite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSpecialite", referencedColumnName="id")
     * })
     */
    private $idspecialite;

    /**
     * @return int
     */
    public function getId(): int
=======
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
     * @return \DateTime
     */
    public function getDatedebutapprentissage(): \DateTime
    {
        return $this->datedebutapprentissage;
    }

    /**
     * @param \DateTime $datedebutapprentissage
     */
    public function setDatedebutapprentissage(\DateTime $datedebutapprentissage): void
    {
        $this->datedebutapprentissage = $datedebutapprentissage;
    }

    /**
     * @return \DateTime|null
     */
    public function getDatefinapprentissage(): ?\DateTime
    {
        return $this->datefinapprentissage;
    }

    /**
     * @param \DateTime|null $datefinapprentissage
     */
    public function setDatefinapprentissage(?\DateTime $datefinapprentissage): void
    {
        $this->datefinapprentissage = $datefinapprentissage;
    }

    /**
     * @return int
     */
    public function getDureeapprentissageannes(): int
    {
        return $this->dureeapprentissageannes;
    }

    /**
     * @param int $dureeapprentissageannes
     */
    public function setDureeapprentissageannes(int $dureeapprentissageannes): void
    {
        $this->dureeapprentissageannes = $dureeapprentissageannes;
    }

    /**
     * @return bool
     */
    public function isEtranger(): bool
=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
    {
        return $this->etranger;
    }

    /**
<<<<<<< HEAD
     * @param bool $etranger
     */
    public function setEtranger(bool $etranger): void
    {
        $this->etranger = $etranger;
    }

    /**
     * @return null|string
     */
    public function getDetailsapprentissage(): ?string
    {
        return $this->detailsapprentissage;
    }

    /**
     * @param null|string $detailsapprentissage
     */
    public function setDetailsapprentissage(?string $detailsapprentissage): void
    {
        $this->detailsapprentissage = $detailsapprentissage;
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



=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
}
