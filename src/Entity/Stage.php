<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
 * @ORM\Table(name="Stage")
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
     * @ORM\Column(name="dateDebutStage", type="date", nullable=false)
     */
    private $datedebutstage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinStage", type="date", nullable=false)
     */
    private $datefinstage;

    /**
     * @var int
     *
     * @ORM\Column(name="anneeEtudeStage", type="integer", nullable=false)
     */
    private $anneeetudestage;

    /**
     * @var string
     *
     * @ORM\Column(name="thematiqueStage", type="string", length=255, nullable=false)
     */
    private $thematiquestage;

    /**
     * @var string
     *
     * @ORM\Column(name="sujetStage", type="string", length=255, nullable=false)
     */
    private $sujetstage;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctionsTachesStage", type="text", length=65535, nullable=false)
     */
    private $fonctionstachesstage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detailsProjetStage", type="text", length=65535, nullable=true)
     */
    private $detailsprojetstage;

    /**
     * @var int
     *
     * @ORM\Column(name="dureeStageSemaines", type="integer", nullable=false)
     */
    private $dureestagesemaines;

    /**
     * @var int
     *
     * @ORM\Column(name="dureeStageHeures", type="integer", nullable=false)
     */
    private $dureestageheures;

    /**
     * @var int
     *
     * @ORM\Column(name="nbJoursTravail", type="integer", nullable=false)
     */
    private $nbjourstravail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaireDureeStage", type="string", length=255, nullable=true)
     */
    private $commentairedureestage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaireStage", type="text", length=65535, nullable=true)
     */
    private $commentairestage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="elementPedagogique", type="string", length=255, nullable=true)
     */
    private $elementpedagogique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="avantagesNature", type="string", length=255, nullable=true)
     */
    private $avantagesnature;

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


}
