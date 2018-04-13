<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstEmploye
 *
 * @ORM\Table(name="est_employe", indexes={@ORM\Index(name="fk_Employe_ContactEtablissement1_idx", columns={"id_contact_etablissement", "id_personne_contact_etablissement"}), @ORM\Index(name="fk_Employe_Etablissement1_idx", columns={"id_etablissement"})})
 * @ORM\Entity
 */
class EstEmploye
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
     * @ORM\Column(name="date_debut_emploi", type="date", nullable=false)
     */
    private $dateDebutEmploi;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin_emploi", type="date", nullable=true)
     */
    private $dateFinEmploi;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=255, nullable=false)
     */
    private $fonction;

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
     * Set dateDebutEmploi.
     *
     * @param \DateTime $dateDebutEmploi
     *
     * @return EstEmploye
     */
    public function setDateDebutEmploi($dateDebutEmploi)
    {
        $this->dateDebutEmploi = $dateDebutEmploi;

        return $this;
    }

    /**
     * Get dateDebutEmploi.
     *
     * @return \DateTime
     */
    public function getDateDebutEmploi()
    {
        return $this->dateDebutEmploi;
    }

    /**
     * Set dateFinEmploi.
     *
     * @param \DateTime|null $dateFinEmploi
     *
     * @return EstEmploye
     */
    public function setDateFinEmploi($dateFinEmploi = null)
    {
        $this->dateFinEmploi = $dateFinEmploi;

        return $this;
    }

    /**
     * Get dateFinEmploi.
     *
     * @return \DateTime|null
     */
    public function getDateFinEmploi()
    {
        return $this->dateFinEmploi;
    }

    /**
     * Set fonction.
     *
     * @param string $fonction
     *
     * @return EstEmploye
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction.
     *
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set idContactEtablissement.
     *
     * @param \App\Entity\ContactEtablissement|null $idContactEtablissement
     *
     * @return EstEmploye
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
     * @return EstEmploye
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
