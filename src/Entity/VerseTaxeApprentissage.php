<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VerseTaxeApprentissage
 *
 * @ORM\Table(name="verse_taxe_apprentissage", indexes={@ORM\Index(name="fk_VerseTaxeApprentissage_Etablissement1_idx", columns={"id_etablissement"}), @ORM\Index(name="IDX_BBC2644AD9649694", columns={"id_departement"})})
 * @ORM\Entity(repositoryClass="App\Repository\VerseTaxeApprentissageRepository")
 */
class VerseTaxeApprentissage
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="annee_versement", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anneeVersement;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_taxe", type="float", precision=10, scale=0, nullable=false)
     */
    private $montantTaxe;

    /**
     * @var string
     *
     * @ORM\Column(name="partie_versante", type="string", length=255, nullable=false)
     */
    private $partieVersante;

    /**
     * @var \App\Entity\Departement
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Entity\Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_departement", referencedColumnName="id")
     * })
     */
    private $idDepartement;

    /**
     * @var \App\Entity\Etablissement
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Entity\Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_etablissement", referencedColumnName="id")
     * })
     */
    private $idEtablissement;



    /**
     * Set anneeVersement.
     *
     * @param \DateTime $anneeVersement
     *
     * @return VerseTaxeApprentissage
     */
    public function setAnneeVersement($anneeVersement)
    {
        $this->anneeVersement = $anneeVersement;

        return $this;
    }

    /**
     * Get anneeVersement.
     *
     * @return \DateTime
     */
    public function getAnneeVersement()
    {
        return $this->anneeVersement;
    }

    /**
     * Set montantTaxe.
     *
     * @param float $montantTaxe
     *
     * @return VerseTaxeApprentissage
     */
    public function setMontantTaxe($montantTaxe)
    {
        $this->montantTaxe = $montantTaxe;

        return $this;
    }

    /**
     * Get montantTaxe.
     *
     * @return float
     */
    public function getMontantTaxe()
    {
        return $this->montantTaxe;
    }

    /**
     * Set partieVersante.
     *
     * @param string $partieVersante
     *
     * @return VerseTaxeApprentissage
     */
    public function setPartieVersante($partieVersante)
    {
        $this->partieVersante = $partieVersante;

        return $this;
    }

    /**
     * Get partieVersante.
     *
     * @return string
     */
    public function getPartieVersante()
    {
        return $this->partieVersante;
    }

    /**
     * Set idDepartement.
     *
     * @param \App\Entity\Departement $idDepartement
     *
     * @return VerseTaxeApprentissage
     */
    public function setIdDepartement(\App\Entity\Departement $idDepartement)
    {
        $this->idDepartement = $idDepartement;

        return $this;
    }

    /**
     * Get idDepartement.
     *
     * @return \App\Entity\Departement
     */
    public function getIdDepartement()
    {
        return $this->idDepartement;
    }

    /**
     * Set idEtablissement.
     *
     * @param \App\Entity\Etablissement $idEtablissement
     *
     * @return VerseTaxeApprentissage
     */
    public function setIdEtablissement(\App\Entity\Etablissement $idEtablissement)
    {
        $this->idEtablissement = $idEtablissement;

        return $this;
    }

    /**
     * Get idEtablissement.
     *
     * @return \App\Entity\Etablissement
     */
    public function getIdEtablissement()
    {
        return $this->idEtablissement;
    }
}
