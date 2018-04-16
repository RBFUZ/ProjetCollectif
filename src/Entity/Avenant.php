<?php

<<<<<<< HEAD

namespace App\Entity;
=======
namespace App\Entity;

>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
use Doctrine\ORM\Mapping as ORM;

/**
 * Avenant
 *
<<<<<<< HEAD
 * @ORM\Table(name="Avenant", indexes={@ORM\Index(name="fk_Avenant_ConventionStage1_idx", columns={"idConventionStage"})})
=======
 * @ORM\Table(name="avenant", indexes={@ORM\Index(name="fk_Avenant_ConventionStage1_idx", columns={"id_convention_stage"})})
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
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
<<<<<<< HEAD
     * @ORM\Column(name="dateCreationAvenant", type="date", nullable=false)
     */
    private $datecreationavenant;
=======
     * @ORM\Column(name="date_creation_avenant", type="date", nullable=false)
     */
    private $dateCreationAvenant;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="objetAvenant", type="string", length=45, nullable=false)
     */
    private $objetavenant;
=======
     * @ORM\Column(name="objet_avenant", type="string", length=45, nullable=false)
     */
    private $objetAvenant;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string|null
     *
<<<<<<< HEAD
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
=======
     * @ORM\Column(name="details_avenant", type="text", length=65535, nullable=true)
     */
    private $detailsAvenant;

    /**
     * @var \App\Entity\ConventionStage
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ConventionStage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_convention_stage", referencedColumnName="id")
     * })
     */
    private $idConventionStage;



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


=======
     * Set dateCreationAvenant.
     *
     * @param \DateTime $dateCreationAvenant
     *
     * @return Avenant
     */
    public function setDateCreationAvenant($dateCreationAvenant)
    {
        $this->dateCreationAvenant = $dateCreationAvenant;

        return $this;
    }

    /**
     * Get dateCreationAvenant.
     *
     * @return \DateTime
     */
    public function getDateCreationAvenant()
    {
        return $this->dateCreationAvenant;
    }

    /**
     * Set objetAvenant.
     *
     * @param string $objetAvenant
     *
     * @return Avenant
     */
    public function setObjetAvenant($objetAvenant)
    {
        $this->objetAvenant = $objetAvenant;

        return $this;
    }

    /**
     * Get objetAvenant.
     *
     * @return string
     */
    public function getObjetAvenant()
    {
        return $this->objetAvenant;
    }

    /**
     * Set detailsAvenant.
     *
     * @param string|null $detailsAvenant
     *
     * @return Avenant
     */
    public function setDetailsAvenant($detailsAvenant = null)
    {
        $this->detailsAvenant = $detailsAvenant;

        return $this;
    }

    /**
     * Get detailsAvenant.
     *
     * @return string|null
     */
    public function getDetailsAvenant()
    {
        return $this->detailsAvenant;
    }

    /**
     * Set idConventionStage.
     *
     * @param \App\Entity\ConventionStage|null $idConventionStage
     *
     * @return Avenant
     */
    public function setIdConventionStage(\App\Entity\ConventionStage $idConventionStage = null)
    {
        $this->idConventionStage = $idConventionStage;

        return $this;
    }

    /**
     * Get idConventionStage.
     *
     * @return \App\Entity\ConventionStage|null
     */
    public function getIdConventionStage()
    {
        return $this->idConventionStage;
    }
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
}
