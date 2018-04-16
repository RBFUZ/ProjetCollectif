<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Effectuevacation
 *
 * @ORM\Table(name="EffectueVacation", indexes={@ORM\Index(name="fk_EffectueVacation_ContactEtablissement1_idx", columns={"idContactEtablissement", "idPersonneContactEtablissement"}), @ORM\Index(name="fk_EffectueVacation_Etablissement1_idx", columns={"idEtablissement"})})
 * @ORM\Entity
 */
class Effectuevacation
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
     * @ORM\Column(name="dateDebutVacation", type="date", nullable=false)
     */
    private $datedebutvacation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateFinVacation", type="date", nullable=true)
     */
    private $datefinvacation;

    /**
     * @var int
     *
     * @ORM\Column(name="volumeHoraire", type="integer", nullable=false)
     */
    private $volumehoraire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaireVacation", type="string", length=255, nullable=true)
     */
    private $commentairevacation;

    /**
     * @var \Contactetablissement
     *
     * @ORM\ManyToOne(targetEntity="Contactetablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idContactEtablissement", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="idPersonneContactEtablissement", referencedColumnName="idPersonne")
     * })
     */
    private $idcontactetablissement;

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
    public function getDatedebutvacation(): \DateTime
    {
        return $this->datedebutvacation;
    }

    /**
     * @param \DateTime $datedebutvacation
     */
    public function setDatedebutvacation(\DateTime $datedebutvacation): void
    {
        $this->datedebutvacation = $datedebutvacation;
    }

    /**
     * @return \DateTime|null
     */
    public function getDatefinvacation(): ?\DateTime
    {
        return $this->datefinvacation;
    }

    /**
     * @param \DateTime|null $datefinvacation
     */
    public function setDatefinvacation(?\DateTime $datefinvacation): void
    {
        $this->datefinvacation = $datefinvacation;
    }

    /**
     * @return int
     */
    public function getVolumehoraire(): int
    {
        return $this->volumehoraire;
    }

    /**
     * @param int $volumehoraire
     */
    public function setVolumehoraire(int $volumehoraire): void
    {
        $this->volumehoraire = $volumehoraire;
    }

    /**
     * @return null|string
     */
    public function getCommentairevacation(): ?string
    {
        return $this->commentairevacation;
    }

    /**
     * @param null|string $commentairevacation
     */
    public function setCommentairevacation(?string $commentairevacation): void
    {
        $this->commentairevacation = $commentairevacation;
    }

    /**
     * @return \Contactetablissement
     */
    public function getIdcontactetablissement(): \Contactetablissement
    {
        return $this->idcontactetablissement;
    }

    /**
     * @param \Contactetablissement $idcontactetablissement
     */
    public function setIdcontactetablissement(\Contactetablissement $idcontactetablissement): void
    {
        $this->idcontactetablissement = $idcontactetablissement;
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



}
