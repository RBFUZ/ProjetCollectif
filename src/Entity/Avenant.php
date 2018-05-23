<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avenant
 *
 * @ORM\Table(name="avenant", indexes={@ORM\Index(name="fk_Avenant_ConventionStage1_idx", columns={"id_convention_stage"})})
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
     * @ORM\Column(name="date_creation_avenant", type="date", nullable=false, options={"default"="1900-01-01"})
     */
    private $dateCreationAvenant = '1900-01-01';

    /**
     * @var string
     *
     * @ORM\Column(name="objet_avenant", type="string", length=45, nullable=false, options={"default"="Inconnu"})
     */
    private $objetAvenant = 'Inconnu';

    /**
     * @var string|null
     *
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
    {
        return $this->id;
    }

    /**
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
}
