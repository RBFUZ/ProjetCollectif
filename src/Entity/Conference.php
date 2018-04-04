<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Conference
 *
 * @ORM\Table(name="Conference", indexes={@ORM\Index(name="fk_Conference_Etablissement1_idx", columns={"idEtablissement"})})
 * @ORM\Entity
 */
class Conference
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
     * @ORM\Column(name="dateConference", type="date", nullable=false)
     */
    private $dateconference;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heureDebutConference", type="time", nullable=true)
     */
    private $heuredebutconference;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heureFinConference", type="time", nullable=true)
     */
    private $heurefinconference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sujetConference", type="string", length=255, nullable=true)
     */
    private $sujetconference;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Contactetablissement", inversedBy="idconference")
     * @ORM\JoinTable(name="participeconference",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idConference", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idContactEtablissement", referencedColumnName="id"),
     *     @ORM\JoinColumn(name="idPersonneContactEtablissement", referencedColumnName="idPersonne")
     *   }
     * )
     */
    private $idcontactetablissement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idcontactetablissement = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
    public function getDateconference(): \DateTime
    {
        return $this->dateconference;
    }

    /**
     * @param \DateTime $dateconference
     */
    public function setDateconference(\DateTime $dateconference): void
    {
        $this->dateconference = $dateconference;
    }

    /**
     * @return \DateTime|null
     */
    public function getHeuredebutconference(): ?\DateTime
    {
        return $this->heuredebutconference;
    }

    /**
     * @param \DateTime|null $heuredebutconference
     */
    public function setHeuredebutconference(?\DateTime $heuredebutconference): void
    {
        $this->heuredebutconference = $heuredebutconference;
    }

    /**
     * @return \DateTime|null
     */
    public function getHeurefinconference(): ?\DateTime
    {
        return $this->heurefinconference;
    }

    /**
     * @param \DateTime|null $heurefinconference
     */
    public function setHeurefinconference(?\DateTime $heurefinconference): void
    {
        $this->heurefinconference = $heurefinconference;
    }

    /**
     * @return null|string
     */
    public function getSujetconference(): ?string
    {
        return $this->sujetconference;
    }

    /**
     * @param null|string $sujetconference
     */
    public function setSujetconference(?string $sujetconference): void
    {
        $this->sujetconference = $sujetconference;
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
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdcontactetablissement(): \Doctrine\Common\Collections\Collection
    {
        return $this->idcontactetablissement;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idcontactetablissement
     */
    public function setIdcontactetablissement(\Doctrine\Common\Collections\Collection $idcontactetablissement): void
    {
        $this->idcontactetablissement = $idcontactetablissement;
    }



}
