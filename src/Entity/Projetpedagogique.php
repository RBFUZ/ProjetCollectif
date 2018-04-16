<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Projetpedagogique
 *
 * @ORM\Table(name="ProjetPedagogique", indexes={@ORM\Index(name="fk_ProjetPedagogique_Etablissement1_idx", columns={"idEtablissement"})})
 * @ORM\Entity
 */
class Projetpedagogique
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
     * @ORM\Column(name="dateDebutProjet", type="date", nullable=false)
     */
    private $datedebutprojet;

    /**
     * @var string
     *
     * @ORM\Column(name="intituleProjet", type="string", length=255, nullable=false)
     */
    private $intituleprojet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detailsProjet", type="text", length=65535, nullable=true)
     */
    private $detailsprojet;

    /**
     * @var float|null
     *
     * @ORM\Column(name="montantAlloué", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantallou�;

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
    public function getDatedebutprojet(): \DateTime
    {
        return $this->datedebutprojet;
    }

    /**
     * @param \DateTime $datedebutprojet
     */
    public function setDatedebutprojet(\DateTime $datedebutprojet): void
    {
        $this->datedebutprojet = $datedebutprojet;
    }

    /**
     * @return string
     */
    public function getIntituleprojet(): string
    {
        return $this->intituleprojet;
    }

    /**
     * @param string $intituleprojet
     */
    public function setIntituleprojet(string $intituleprojet): void
    {
        $this->intituleprojet = $intituleprojet;
    }

    /**
     * @return null|string
     */
    public function getDetailsprojet(): ?string
    {
        return $this->detailsprojet;
    }

    /**
     * @param null|string $detailsprojet
     */
    public function setDetailsprojet(?string $detailsprojet): void
    {
        $this->detailsprojet = $detailsprojet;
    }

    /**
     * @return float|null
     */
    public function getMontantallou�(): ?float
    {
        return $this->montantallou�;
    }

    /**
     * @param float|null $montantallou�
     */
    public function setMontantallou�(?float $montantallou�): void
    {
        $this->montantallou� = $montantallou�;
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
