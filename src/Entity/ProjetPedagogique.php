<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjetPedagogique
 *
 * @ORM\Table(name="projet_pedagogique", indexes={@ORM\Index(name="fk_ProjetPedagogique_Etablissement1_idx", columns={"id_etablissement"})})
 * @ORM\Entity
 */
class ProjetPedagogique
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
     * @ORM\Column(name="date_debut_projet", type="date", nullable=false, options={"default"="1900-01-01"})
     */
    private $dateDebutProjet = '1900-01-01';

    /**
     * @var string
     *
     * @ORM\Column(name="intitule_projet", type="string", length=255, nullable=false, options={"default"="Projet pédagogique"})
     */
    private $intituleProjet = 'Projet pédagogique';

    /**
     * @var string|null
     *
     * @ORM\Column(name="details_projet", type="text", length=65535, nullable=true)
     */
    private $detailsProjet;

    /**
     * @var float|null
     *
     * @ORM\Column(name="montant_alloue", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantAlloue;

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
     * Set dateDebutProjet.
     *
     * @param \DateTime $dateDebutProjet
     *
     * @return ProjetPedagogique
     */
    public function setDateDebutProjet($dateDebutProjet)
    {
        $this->dateDebutProjet = $dateDebutProjet;

        return $this;
    }

    /**
     * Get dateDebutProjet.
     *
     * @return \DateTime
     */
    public function getDateDebutProjet()
    {
        return $this->dateDebutProjet;
    }

    /**
     * Set intituleProjet.
     *
     * @param string $intituleProjet
     *
     * @return ProjetPedagogique
     */
    public function setIntituleProjet($intituleProjet)
    {
        $this->intituleProjet = $intituleProjet;

        return $this;
    }

    /**
     * Get intituleProjet.
     *
     * @return string
     */
    public function getIntituleProjet()
    {
        return $this->intituleProjet;
    }

    /**
     * Set detailsProjet.
     *
     * @param string|null $detailsProjet
     *
     * @return ProjetPedagogique
     */
    public function setDetailsProjet($detailsProjet = null)
    {
        $this->detailsProjet = $detailsProjet;

        return $this;
    }

    /**
     * Get detailsProjet.
     *
     * @return string|null
     */
    public function getDetailsProjet()
    {
        return $this->detailsProjet;
    }

    /**
     * Set montantAlloue.
     *
     * @param float|null $montantAlloue
     *
     * @return ProjetPedagogique
     */
    public function setMontantAlloue($montantAlloue = null)
    {
        $this->montantAlloue = $montantAlloue;

        return $this;
    }

    /**
     * Get montantAlloue.
     *
     * @return float|null
     */
    public function getMontantAlloue()
    {
        return $this->montantAlloue;
    }

    /**
     * Set idEtablissement.
     *
     * @param \App\Entity\Etablissement|null $idEtablissement
     *
     * @return ProjetPedagogique
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
