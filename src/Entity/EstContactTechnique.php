<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstContactTechnique
 *
 * @ORM\Table(name="est_contact_technique", indexes={@ORM\Index(name="fk_EstContactTechnique_ContactEtablissement1_idx", columns={"id_contact_etablissement", "id_personne_contact_etablissement"}), @ORM\Index(name="fk_EstContactTechnique_Etablissement1_idx", columns={"id_etablissement"})})
 * @ORM\Entity
 */
class EstContactTechnique
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
     * @ORM\Column(name="date_debut_contact_technique", type="date", nullable=false, options={"default"="1900-01-01"})
     */
    private $dateDebutContactTechnique = '1900-01-01';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin_contact_technique", type="date", nullable=true)
     */
    private $dateFinContactTechnique;

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
     * Set dateDebutContactTechnique.
     *
     * @param \DateTime $dateDebutContactTechnique
     *
     * @return EstContactTechnique
     */
    public function setDateDebutContactTechnique($dateDebutContactTechnique)
    {
        $this->dateDebutContactTechnique = $dateDebutContactTechnique;

        return $this;
    }

    /**
     * Get dateDebutContactTechnique.
     *
     * @return \DateTime
     */
    public function getDateDebutContactTechnique()
    {
        return $this->dateDebutContactTechnique;
    }

    /**
     * Set dateFinContactTechnique.
     *
     * @param \DateTime|null $dateFinContactTechnique
     *
     * @return EstContactTechnique
     */
    public function setDateFinContactTechnique($dateFinContactTechnique = null)
    {
        $this->dateFinContactTechnique = $dateFinContactTechnique;

        return $this;
    }

    /**
     * Get dateFinContactTechnique.
     *
     * @return \DateTime|null
     */
    public function getDateFinContactTechnique()
    {
        return $this->dateFinContactTechnique;
    }

    /**
     * Set idContactEtablissement.
     *
     * @param \App\Entity\ContactEtablissement|null $idContactEtablissement
     *
     * @return EstContactTechnique
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
     * @return EstContactTechnique
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
