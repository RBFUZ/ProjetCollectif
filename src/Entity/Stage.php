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
     * @var bool
     *
     * @ORM\Column(name="etranger", type="boolean", nullable=false)
     */
    private $etranger = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="annee_etude_stage", type="integer", nullable=true)
     */
    private $anneeEtudeStage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="thematique_stage", type="string", length=255, nullable=true)
     */
    private $thematiqueStage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sujet_stage", type="string", length=255, nullable=true)
     */
    private $sujetStage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fonctions_taches_stage", type="text", length=65535, nullable=true)
     */
    private $fonctionsTachesStage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="details_projet_stage", type="text", length=65535, nullable=true)
     */
    private $detailsProjetStage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree_stage_semaines", type="integer", nullable=true)
     */
    private $dureeStageSemaines;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree_stage_heures", type="integer", nullable=true)
     */
    private $dureeStageHeures;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_jours_travail", type="integer", nullable=true)
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
     * Set etranger.
     *
     * @param bool $etranger
     *
     * @return Stage
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
     * Set anneeEtudeStage.
     *
     * @param int|null $anneeEtudeStage
     *
     * @return Stage
     */
    public function setAnneeEtudeStage($anneeEtudeStage = null)
    {
        $this->anneeEtudeStage = $anneeEtudeStage;

        return $this;
    }

    /**
     * Get anneeEtudeStage.
     *
     * @return int|null
     */
    public function getAnneeEtudeStage()
    {
        return $this->anneeEtudeStage;
    }

    /**
     * Set thematiqueStage.
     *
     * @param string|null $thematiqueStage
     *
     * @return Stage
     */
    public function setThematiqueStage($thematiqueStage = null)
    {
        $this->thematiqueStage = $thematiqueStage;

        return $this;
    }

    /**
     * Get thematiqueStage.
     *
     * @return string|null
     */
    public function getThematiqueStage()
    {
        return $this->thematiqueStage;
    }

    /**
     * Set sujetStage.
     *
     * @param string|null $sujetStage
     *
     * @return Stage
     */
    public function setSujetStage($sujetStage = null)
    {
        $this->sujetStage = $sujetStage;

        return $this;
    }

    /**
     * Get sujetStage.
     *
     * @return string|null
     */
    public function getSujetStage()
    {
        return $this->sujetStage;
    }

    /**
     * Set fonctionsTachesStage.
     *
     * @param string|null $fonctionsTachesStage
     *
     * @return Stage
     */
    public function setFonctionsTachesStage($fonctionsTachesStage = null)
    {
        $this->fonctionsTachesStage = $fonctionsTachesStage;

        return $this;
    }

    /**
     * Get fonctionsTachesStage.
     *
     * @return string|null
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
     * @param int|null $dureeStageSemaines
     *
     * @return Stage
     */
    public function setDureeStageSemaines($dureeStageSemaines = null)
    {
        $this->dureeStageSemaines = $dureeStageSemaines;

        return $this;
    }

    /**
     * Get dureeStageSemaines.
     *
     * @return int|null
     */
    public function getDureeStageSemaines()
    {
        return $this->dureeStageSemaines;
    }

    /**
     * Set dureeStageHeures.
     *
     * @param int|null $dureeStageHeures
     *
     * @return Stage
     */
    public function setDureeStageHeures($dureeStageHeures = null)
    {
        $this->dureeStageHeures = $dureeStageHeures;

        return $this;
    }

    /**
     * Get dureeStageHeures.
     *
     * @return int|null
     */
    public function getDureeStageHeures()
    {
        return $this->dureeStageHeures;
    }

    /**
     * Set nbJoursTravail.
     *
     * @param int|null $nbJoursTravail
     *
     * @return Stage
     */
    public function setNbJoursTravail($nbJoursTravail = null)
    {
        $this->nbJoursTravail = $nbJoursTravail;

        return $this;
    }

    /**
     * Get nbJoursTravail.
     *
     * @return int|null
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
