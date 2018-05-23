<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstContactRh
 *
 * @ORM\Table(name="est_contact_rh", indexes={@ORM\Index(name="fk_EstContactRH_ContactEtablissement1_idx", columns={"id_contact_etablissement", "id_personne_contact_etablissement"}), @ORM\Index(name="fk_EstContactRH_Etablissement1_idx", columns={"id_etablissement"})})
 * @ORM\Entity
 */
class EstContactRh
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
     * @ORM\Column(name="date_debut_contact_rh", type="date", nullable=false, options={"default"="1900-01-01"})
     */
    private $dateDebutContactRh = '1900-01-01';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin_contact_rh", type="date", nullable=true)
     */
    private $dateFinContactRh;

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
     * Set dateDebutContactRh.
     *
     * @param \DateTime $dateDebutContactRh
     *
     * @return EstContactRh
     */
    public function setDateDebutContactRh($dateDebutContactRh)
    {
        $this->dateDebutContactRh = $dateDebutContactRh;

        return $this;
    }

    /**
     * Get dateDebutContactRh.
     *
     * @return \DateTime
     */
    public function getDateDebutContactRh()
    {
        return $this->dateDebutContactRh;
    }

    /**
     * Set dateFinContactRh.
     *
     * @param \DateTime|null $dateFinContactRh
     *
     * @return EstContactRh
     */
    public function setDateFinContactRh($dateFinContactRh = null)
    {
        $this->dateFinContactRh = $dateFinContactRh;

        return $this;
    }

    /**
     * Get dateFinContactRh.
     *
     * @return \DateTime|null
     */
    public function getDateFinContactRh()
    {
        return $this->dateFinContactRh;
    }

    /**
     * Set idContactEtablissement.
     *
     * @param \App\Entity\ContactEtablissement|null $idContactEtablissement
     *
     * @return EstContactRh
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
     * @return EstContactRh
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
