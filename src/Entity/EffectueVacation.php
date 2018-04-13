<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EffectueVacation
 *
 * @ORM\Table(name="effectue_vacation", indexes={@ORM\Index(name="fk_EffectueVacation_ContactEtablissement1_idx", columns={"id_contact_etablissement", "id_personne_contact_etablissement"}), @ORM\Index(name="fk_EffectueVacation_Etablissement1_idx", columns={"id_etablissement"})})
 * @ORM\Entity
 */
class EffectueVacation
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
     * @ORM\Column(name="date_debut_vacation", type="date", nullable=false)
     */
    private $dateDebutVacation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin_vacation", type="date", nullable=true)
     */
    private $dateFinVacation;

    /**
     * @var int
     *
     * @ORM\Column(name="volume_horaire", type="integer", nullable=false)
     */
    private $volumeHoraire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire_vacation", type="string", length=255, nullable=true)
     */
    private $commentaireVacation;

    /**
     * @var \App\Entity\ContactEtablissement
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ContactEtablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_contact_etablissement", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="id_personne_contact_etablissement", referencedColumnName="id_personne")
     * })
     */
    private $idContactEtablissement;

    /**
     * @var \App\Entity\Etablissement
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_etablissement", referencedColumnName="id")
     * })
     */
    private $idEtablissement;



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
     * Set dateDebutVacation.
     *
     * @param \DateTime $dateDebutVacation
     *
     * @return EffectueVacation
     */
    public function setDateDebutVacation($dateDebutVacation)
    {
        $this->dateDebutVacation = $dateDebutVacation;

        return $this;
    }

    /**
     * Get dateDebutVacation.
     *
     * @return \DateTime
     */
    public function getDateDebutVacation()
    {
        return $this->dateDebutVacation;
    }

    /**
     * Set dateFinVacation.
     *
     * @param \DateTime|null $dateFinVacation
     *
     * @return EffectueVacation
     */
    public function setDateFinVacation($dateFinVacation = null)
    {
        $this->dateFinVacation = $dateFinVacation;

        return $this;
    }

    /**
     * Get dateFinVacation.
     *
     * @return \DateTime|null
     */
    public function getDateFinVacation()
    {
        return $this->dateFinVacation;
    }

    /**
     * Set volumeHoraire.
     *
     * @param int $volumeHoraire
     *
     * @return EffectueVacation
     */
    public function setVolumeHoraire($volumeHoraire)
    {
        $this->volumeHoraire = $volumeHoraire;

        return $this;
    }

    /**
     * Get volumeHoraire.
     *
     * @return int
     */
    public function getVolumeHoraire()
    {
        return $this->volumeHoraire;
    }

    /**
     * Set commentaireVacation.
     *
     * @param string|null $commentaireVacation
     *
     * @return EffectueVacation
     */
    public function setCommentaireVacation($commentaireVacation = null)
    {
        $this->commentaireVacation = $commentaireVacation;

        return $this;
    }

    /**
     * Get commentaireVacation.
     *
     * @return string|null
     */
    public function getCommentaireVacation()
    {
        return $this->commentaireVacation;
    }

    /**
     * Set idContactEtablissement.
     *
     * @param \App\Entity\ContactEtablissement|null $idContactEtablissement
     *
     * @return EffectueVacation
     */
    public function setIdContactEtablissement(\App\Entity\ContactEtablissement $idContactEtablissement = null)
    {
        $this->idContactEtablissement = $idContactEtablissement;

        return $this;
    }

    /**
     * Get idContactEtablissement.
     *
     * @return \App\Entity\ContactEtablissement|null
     */
    public function getIdContactEtablissement()
    {
        return $this->idContactEtablissement;
    }

    /**
     * Set idEtablissement.
     *
     * @param \App\Entity\Etablissement|null $idEtablissement
     *
     * @return EffectueVacation
     */
    public function setIdEtablissement(\App\Entity\Etablissement $idEtablissement = null)
    {
        $this->idEtablissement = $idEtablissement;

        return $this;
    }

    /**
     * Get idEtablissement.
     *
     * @return \App\Entity\Etablissement|null
     */
    public function getIdEtablissement()
    {
        return $this->idEtablissement;
    }
}
