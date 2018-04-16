<?php

<<<<<<< HEAD

namespace App\Entity;
=======
namespace App\Entity;

>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
<<<<<<< HEAD
 * @ORM\Table(name="Stage")
=======
 * @ORM\Table(name="stage")
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
 * @ORM\Entity
 */
class Stage
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
     * @ORM\Column(name="dateDebutStage", type="date", nullable=false)
     */
    private $datedebutstage;
=======
     * @ORM\Column(name="date_debut_stage", type="date", nullable=false)
     */
    private $dateDebutStage;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var \DateTime
     *
<<<<<<< HEAD
     * @ORM\Column(name="dateFinStage", type="date", nullable=false)
     */
    private $datefinstage;
=======
     * @ORM\Column(name="date_fin_stage", type="date", nullable=false)
     */
    private $dateFinStage;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var int
     *
<<<<<<< HEAD
     * @ORM\Column(name="anneeEtudeStage", type="integer", nullable=false)
     */
    private $anneeetudestage;
=======
     * @ORM\Column(name="annee_etude_stage", type="integer", nullable=false)
     */
    private $anneeEtudeStage;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="thematiqueStage", type="string", length=255, nullable=false)
     */
    private $thematiquestage;
=======
     * @ORM\Column(name="thematique_stage", type="string", length=255, nullable=false)
     */
    private $thematiqueStage;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="sujetStage", type="string", length=255, nullable=false)
     */
    private $sujetstage;
=======
     * @ORM\Column(name="sujet_stage", type="string", length=255, nullable=false)
     */
    private $sujetStage;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="fonctionsTachesStage", type="text", length=65535, nullable=false)
     */
    private $fonctionstachesstage;
=======
     * @ORM\Column(name="fonctions_taches_stage", type="text", length=65535, nullable=false)
     */
    private $fonctionsTachesStage;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="detailsProjetStage", type="text", length=65535, nullable=true)
     */
    private $detailsprojetstage;
=======
     * @ORM\Column(name="details_projet_stage", type="text", length=65535, nullable=true)
     */
    private $detailsProjetStage;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var int
     *
<<<<<<< HEAD
     * @ORM\Column(name="dureeStageSemaines", type="integer", nullable=false)
     */
    private $dureestagesemaines;
=======
     * @ORM\Column(name="duree_stage_semaines", type="integer", nullable=false)
     */
    private $dureeStageSemaines;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var int
     *
<<<<<<< HEAD
     * @ORM\Column(name="dureeStageHeures", type="integer", nullable=false)
     */
    private $dureestageheures;
=======
     * @ORM\Column(name="duree_stage_heures", type="integer", nullable=false)
     */
    private $dureeStageHeures;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var int
     *
<<<<<<< HEAD
     * @ORM\Column(name="nbJoursTravail", type="integer", nullable=false)
     */
    private $nbjourstravail;
=======
     * @ORM\Column(name="nb_jours_travail", type="integer", nullable=false)
     */
    private $nbJoursTravail;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="commentaireDureeStage", type="string", length=255, nullable=true)
     */
    private $commentairedureestage;
=======
     * @ORM\Column(name="commentaire_duree_stage", type="string", length=255, nullable=true)
     */
    private $commentaireDureeStage;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="commentaireStage", type="text", length=65535, nullable=true)
     */
    private $commentairestage;
=======
     * @ORM\Column(name="commentaire_stage", type="text", length=65535, nullable=true)
     */
    private $commentaireStage;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="elementPedagogique", type="string", length=255, nullable=true)
     */
    private $elementpedagogique;
=======
     * @ORM\Column(name="element_pedagogique", type="string", length=255, nullable=true)
     */
    private $elementPedagogique;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="avantagesNature", type="string", length=255, nullable=true)
     */
    private $avantagesnature;

    /**
     * @return int
     */
    public function getId(): int
=======
     * @ORM\Column(name="avantages_nature", type="string", length=255, nullable=true)
     */
    private $avantagesNature;



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
    public function getDatedebutstage(): \DateTime
    {
        return $this->datedebutstage;
    }

    /**
     * @param \DateTime $datedebutstage
     */
    public function setDatedebutstage(\DateTime $datedebutstage): void
    {
        $this->datedebutstage = $datedebutstage;
    }

    /**
     * @return \DateTime
     */
    public function getDatefinstage(): \DateTime
    {
        return $this->datefinstage;
    }

    /**
     * @param \DateTime $datefinstage
     */
    public function setDatefinstage(\DateTime $datefinstage): void
    {
        $this->datefinstage = $datefinstage;
    }

    /**
     * @return int
     */
    public function getAnneeetudestage(): int
    {
        return $this->anneeetudestage;
    }

    /**
     * @param int $anneeetudestage
     */
    public function setAnneeetudestage(int $anneeetudestage): void
    {
        $this->anneeetudestage = $anneeetudestage;
    }

    /**
     * @return string
     */
    public function getThematiquestage(): string
    {
        return $this->thematiquestage;
    }

    /**
     * @param string $thematiquestage
     */
    public function setThematiquestage(string $thematiquestage): void
    {
        $this->thematiquestage = $thematiquestage;
    }

    /**
     * @return string
     */
    public function getSujetstage(): string
    {
        return $this->sujetstage;
    }

    /**
     * @param string $sujetstage
     */
    public function setSujetstage(string $sujetstage): void
    {
        $this->sujetstage = $sujetstage;
    }

    /**
     * @return string
     */
    public function getFonctionstachesstage(): string
    {
        return $this->fonctionstachesstage;
    }

    /**
     * @param string $fonctionstachesstage
     */
    public function setFonctionstachesstage(string $fonctionstachesstage): void
    {
        $this->fonctionstachesstage = $fonctionstachesstage;
    }

    /**
     * @return null|string
     */
    public function getDetailsprojetstage(): ?string
    {
        return $this->detailsprojetstage;
    }

    /**
     * @param null|string $detailsprojetstage
     */
    public function setDetailsprojetstage(?string $detailsprojetstage): void
    {
        $this->detailsprojetstage = $detailsprojetstage;
    }

    /**
     * @return int
     */
    public function getDureestagesemaines(): int
    {
        return $this->dureestagesemaines;
    }

    /**
     * @param int $dureestagesemaines
     */
    public function setDureestagesemaines(int $dureestagesemaines): void
    {
        $this->dureestagesemaines = $dureestagesemaines;
    }

    /**
     * @return int
     */
    public function getDureestageheures(): int
    {
        return $this->dureestageheures;
    }

    /**
     * @param int $dureestageheures
     */
    public function setDureestageheures(int $dureestageheures): void
    {
        $this->dureestageheures = $dureestageheures;
    }

    /**
     * @return int
     */
    public function getNbjourstravail(): int
    {
        return $this->nbjourstravail;
    }

    /**
     * @param int $nbjourstravail
     */
    public function setNbjourstravail(int $nbjourstravail): void
    {
        $this->nbjourstravail = $nbjourstravail;
    }

    /**
     * @return null|string
     */
    public function getCommentairedureestage(): ?string
    {
        return $this->commentairedureestage;
    }

    /**
     * @param null|string $commentairedureestage
     */
    public function setCommentairedureestage(?string $commentairedureestage): void
    {
        $this->commentairedureestage = $commentairedureestage;
    }

    /**
     * @return null|string
     */
    public function getCommentairestage(): ?string
    {
        return $this->commentairestage;
    }

    /**
     * @param null|string $commentairestage
     */
    public function setCommentairestage(?string $commentairestage): void
    {
        $this->commentairestage = $commentairestage;
    }

    /**
     * @return null|string
     */
    public function getElementpedagogique(): ?string
    {
        return $this->elementpedagogique;
    }

    /**
     * @param null|string $elementpedagogique
     */
    public function setElementpedagogique(?string $elementpedagogique): void
    {
        $this->elementpedagogique = $elementpedagogique;
    }

    /**
     * @return null|string
     */
    public function getAvantagesnature(): ?string
    {
        return $this->avantagesnature;
    }

    /**
     * @param null|string $avantagesnature
     */
    public function setAvantagesnature(?string $avantagesnature): void
    {
        $this->avantagesnature = $avantagesnature;
    }


=======
     * Set dateDebutStage.
     *
     * @param \DateTime $dateDebutStage
     *
     * @return Stage
     */
    public function setDateDebutStage($dateDebutStage)
    {
        $this->dateDebutStage = $dateDebutStage;

        return $this;
    }

    /**
     * Get dateDebutStage.
     *
     * @return \DateTime
     */
    public function getDateDebutStage()
    {
        return $this->dateDebutStage;
    }

    /**
     * Set dateFinStage.
     *
     * @param \DateTime $dateFinStage
     *
     * @return Stage
     */
    public function setDateFinStage($dateFinStage)
    {
        $this->dateFinStage = $dateFinStage;

        return $this;
    }

    /**
     * Get dateFinStage.
     *
     * @return \DateTime
     */
    public function getDateFinStage()
    {
        return $this->dateFinStage;
    }

    /**
     * Set anneeEtudeStage.
     *
     * @param int $anneeEtudeStage
     *
     * @return Stage
     */
    public function setAnneeEtudeStage($anneeEtudeStage)
    {
        $this->anneeEtudeStage = $anneeEtudeStage;

        return $this;
    }

    /**
     * Get anneeEtudeStage.
     *
     * @return int
     */
    public function getAnneeEtudeStage()
    {
        return $this->anneeEtudeStage;
    }

    /**
     * Set thematiqueStage.
     *
     * @param string $thematiqueStage
     *
     * @return Stage
     */
    public function setThematiqueStage($thematiqueStage)
    {
        $this->thematiqueStage = $thematiqueStage;

        return $this;
    }

    /**
     * Get thematiqueStage.
     *
     * @return string
     */
    public function getThematiqueStage()
    {
        return $this->thematiqueStage;
    }

    /**
     * Set sujetStage.
     *
     * @param string $sujetStage
     *
     * @return Stage
     */
    public function setSujetStage($sujetStage)
    {
        $this->sujetStage = $sujetStage;

        return $this;
    }

    /**
     * Get sujetStage.
     *
     * @return string
     */
    public function getSujetStage()
    {
        return $this->sujetStage;
    }

    /**
     * Set fonctionsTachesStage.
     *
     * @param string $fonctionsTachesStage
     *
     * @return Stage
     */
    public function setFonctionsTachesStage($fonctionsTachesStage)
    {
        $this->fonctionsTachesStage = $fonctionsTachesStage;

        return $this;
    }

    /**
     * Get fonctionsTachesStage.
     *
     * @return string
     */
    public function getFonctionsTachesStage()
    {
        return $this->fonctionsTachesStage;
    }

    /**
     * Set detailsProjetStage.
     *
     * @param string|null $detailsProjetStage
     *
     * @return Stage
     */
    public function setDetailsProjetStage($detailsProjetStage = null)
    {
        $this->detailsProjetStage = $detailsProjetStage;

        return $this;
    }

    /**
     * Get detailsProjetStage.
     *
     * @return string|null
     */
    public function getDetailsProjetStage()
    {
        return $this->detailsProjetStage;
    }

    /**
     * Set dureeStageSemaines.
     *
     * @param int $dureeStageSemaines
     *
     * @return Stage
     */
    public function setDureeStageSemaines($dureeStageSemaines)
    {
        $this->dureeStageSemaines = $dureeStageSemaines;

        return $this;
    }

    /**
     * Get dureeStageSemaines.
     *
     * @return int
     */
    public function getDureeStageSemaines()
    {
        return $this->dureeStageSemaines;
    }

    /**
     * Set dureeStageHeures.
     *
     * @param int $dureeStageHeures
     *
     * @return Stage
     */
    public function setDureeStageHeures($dureeStageHeures)
    {
        $this->dureeStageHeures = $dureeStageHeures;

        return $this;
    }

    /**
     * Get dureeStageHeures.
     *
     * @return int
     */
    public function getDureeStageHeures()
    {
        return $this->dureeStageHeures;
    }

    /**
     * Set nbJoursTravail.
     *
     * @param int $nbJoursTravail
     *
     * @return Stage
     */
    public function setNbJoursTravail($nbJoursTravail)
    {
        $this->nbJoursTravail = $nbJoursTravail;

        return $this;
    }

    /**
     * Get nbJoursTravail.
     *
     * @return int
     */
    public function getNbJoursTravail()
    {
        return $this->nbJoursTravail;
    }

    /**
     * Set commentaireDureeStage.
     *
     * @param string|null $commentaireDureeStage
     *
     * @return Stage
     */
    public function setCommentaireDureeStage($commentaireDureeStage = null)
    {
        $this->commentaireDureeStage = $commentaireDureeStage;

        return $this;
    }

    /**
     * Get commentaireDureeStage.
     *
     * @return string|null
     */
    public function getCommentaireDureeStage()
    {
        return $this->commentaireDureeStage;
    }

    /**
     * Set commentaireStage.
     *
     * @param string|null $commentaireStage
     *
     * @return Stage
     */
    public function setCommentaireStage($commentaireStage = null)
    {
        $this->commentaireStage = $commentaireStage;

        return $this;
    }

    /**
     * Get commentaireStage.
     *
     * @return string|null
     */
    public function getCommentaireStage()
    {
        return $this->commentaireStage;
    }

    /**
     * Set elementPedagogique.
     *
     * @param string|null $elementPedagogique
     *
     * @return Stage
     */
    public function setElementPedagogique($elementPedagogique = null)
    {
        $this->elementPedagogique = $elementPedagogique;

        return $this;
    }

    /**
     * Get elementPedagogique.
     *
     * @return string|null
     */
    public function getElementPedagogique()
    {
        return $this->elementPedagogique;
    }

    /**
     * Set avantagesNature.
     *
     * @param string|null $avantagesNature
     *
     * @return Stage
     */
    public function setAvantagesNature($avantagesNature = null)
    {
        $this->avantagesNature = $avantagesNature;

        return $this;
    }

    /**
     * Get avantagesNature.
     *
     * @return string|null
     */
    public function getAvantagesNature()
    {
        return $this->avantagesNature;
    }
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
}
