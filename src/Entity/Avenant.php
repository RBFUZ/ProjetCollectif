<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Avenant
 *
 * @ORM\Table(name="Avenant", indexes={@ORM\Index(name="fk_Avenant_ConventionStage1_idx", columns={"idConventionStage"})})
 * @ORM\Entity
 */
class Avenant
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
     * @ORM\Column(name="dateCreationAvenant", type="date", nullable=false)
     */
    private $datecreationavenant;

    /**
     * @var string
     *
     * @ORM\Column(name="objetAvenant", type="string", length=45, nullable=false)
     */
    private $objetavenant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detailsAvenant", type="text", length=65535, nullable=true)
     */
    private $detailsavenant;

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
    public function getDatecreationavenant(): \DateTime
    {
        return $this->datecreationavenant;
    }

    /**
     * @param \DateTime $datecreationavenant
     */
    public function setDatecreationavenant(\DateTime $datecreationavenant): void
    {
        $this->datecreationavenant = $datecreationavenant;
    }

    /**
     * @return string
     */
    public function getObjetavenant(): string
    {
        return $this->objetavenant;
    }

    /**
     * @param string $objetavenant
     */
    public function setObjetavenant(string $objetavenant): void
    {
        $this->objetavenant = $objetavenant;
    }

    /**
     * @return null|string
     */
    public function getDetailsavenant(): ?string
    {
        return $this->detailsavenant;
    }

    /**
     * @param null|string $detailsavenant
     */
    public function setDetailsavenant(?string $detailsavenant): void
    {
        $this->detailsavenant = $detailsavenant;
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
