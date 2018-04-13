<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
 * @ORM\Table(name="stage")
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
     * @ORM\Column(name="date_debut_stage", type="date", nullable=false)
     */
    private $dateDebutStage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_stage", type="date", nullable=false)
     */
    private $dateFinStage;

    /**
     * @var int
     *
     * @ORM\Column(name="annee_etude_stage", type="integer", nullable=false)
     */
    private $anneeEtudeStage;

    /**
     * @var string
     *
     * @ORM\Column(name="thematique_stage", type="string", length=255, nullable=false)
     */
    private $thematiqueStage;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet_stage", type="string", length=255, nullable=false)
     */
    private $sujetStage;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctions_taches_stage", type="text", length=65535, nullable=false)
     */
    private $fonctionsTachesStage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="details_projet_stage", type="text", length=65535, nullable=true)
     */
    private $detailsProjetStage;

    /**
     * @var int
     *
     * @ORM\Column(name="duree_stage_semaines", type="integer", nullable=false)
     */
    private $dureeStageSemaines;

    /**
     * @var int
     *
     * @ORM\Column(name="duree_stage_heures", type="integer", nullable=false)
     */
    private $dureeStageHeures;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_jours_travail", type="integer", nullable=false)
     */
    private $nbJoursTravail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire_duree_stage", type="string", length=255, nullable=true)
     */
    private $commentaireDureeStage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire_stage", type="text", length=65535, nullable=true)
     */
    private $commentaireStage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="element_pedagogique", type="string", length=255, nullable=true)
     */
    private $elementPedagogique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="avantages_nature", type="string", length=255, nullable=true)
     */
    private $avantagesNature;



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
}
