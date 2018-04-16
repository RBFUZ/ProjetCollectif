<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Interruptionstage
 *
 * @ORM\Table(name="InterruptionStage", indexes={@ORM\Index(name="fk_InterruptionStage_ConventionStage1_idx", columns={"idConventionStage"})})
 * @ORM\Entity
 */
class Interruptionstage
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
     * @ORM\Column(name="dateDebutInterruption", type="date", nullable=false)
     */
    private $datedebutinterruption;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinInterruption", type="date", nullable=false)
     */
    private $datefininterruption;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaireInterruption", type="string", length=255, nullable=true)
     */
    private $commentaireinterruption;

    /**
     * @var \Conventionstage
     *
     * @ORM\ManyToOne(targetEntity="Conventionstage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idConventionStage", referencedColumnName="id")
     * })
     */
    private $idconventionstage;

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
    public function getDatedebutinterruption(): \DateTime
    {
        return $this->datedebutinterruption;
    }

    /**
     * @param \DateTime $datedebutinterruption
     */
    public function setDatedebutinterruption(\DateTime $datedebutinterruption): void
    {
        $this->datedebutinterruption = $datedebutinterruption;
    }

    /**
     * @return \DateTime
     */
    public function getDatefininterruption(): \DateTime
    {
        return $this->datefininterruption;
    }

    /**
     * @param \DateTime $datefininterruption
     */
    public function setDatefininterruption(\DateTime $datefininterruption): void
    {
        $this->datefininterruption = $datefininterruption;
    }

    /**
     * @return null|string
     */
    public function getCommentaireinterruption(): ?string
    {
        return $this->commentaireinterruption;
    }

    /**
     * @param null|string $commentaireinterruption
     */
    public function setCommentaireinterruption(?string $commentaireinterruption): void
    {
        $this->commentaireinterruption = $commentaireinterruption;
    }

    /**
     * @return \Conventionstage
     */
    public function getIdconventionstage(): \Conventionstage
    {
        return $this->idconventionstage;
    }

    /**
     * @param \Conventionstage $idconventionstage
     */
    public function setIdconventionstage(\Conventionstage $idconventionstage): void
    {
        $this->idconventionstage = $idconventionstage;
    }


}
