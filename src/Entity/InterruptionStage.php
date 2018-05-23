<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterruptionStage
 *
 * @ORM\Table(name="interruption_stage", indexes={@ORM\Index(name="fk_InterruptionStage_ConventionStage1_idx", columns={"id_convention_stage"})})
 * @ORM\Entity
 */
class InterruptionStage
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
     * @ORM\Column(name="date_debut_interruption", type="date", nullable=false, options={"default"="1900-01-01"})
     */
    private $dateDebutInterruption = '1900-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_interruption", type="date", nullable=false, options={"default"="1900-01-01"})
     */
    private $dateFinInterruption = '1900-01-01';

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire_interruption", type="string", length=255, nullable=true)
     */
    private $commentaireInterruption;

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
     * Set dateDebutInterruption.
     *
     * @param \DateTime $dateDebutInterruption
     *
     * @return InterruptionStage
     */
    public function setDateDebutInterruption($dateDebutInterruption)
    {
        $this->dateDebutInterruption = $dateDebutInterruption;

        return $this;
    }

    /**
     * Get dateDebutInterruption.
     *
     * @return \DateTime
     */
    public function getDateDebutInterruption()
    {
        return $this->dateDebutInterruption;
    }

    /**
     * Set dateFinInterruption.
     *
     * @param \DateTime $dateFinInterruption
     *
     * @return InterruptionStage
     */
    public function setDateFinInterruption($dateFinInterruption)
    {
        $this->dateFinInterruption = $dateFinInterruption;

        return $this;
    }

    /**
     * Get dateFinInterruption.
     *
     * @return \DateTime
     */
    public function getDateFinInterruption()
    {
        return $this->dateFinInterruption;
    }

    /**
     * Set commentaireInterruption.
     *
     * @param string|null $commentaireInterruption
     *
     * @return InterruptionStage
     */
    public function setCommentaireInterruption($commentaireInterruption = null)
    {
        $this->commentaireInterruption = $commentaireInterruption;

        return $this;
    }

    /**
     * Get commentaireInterruption.
     *
     * @return string|null
     */
    public function getCommentaireInterruption()
    {
        return $this->commentaireInterruption;
    }

    /**
     * Set idConventionStage.
     *
     * @param \App\Entity\ConventionStage|null $idConventionStage
     *
     * @return InterruptionStage
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
