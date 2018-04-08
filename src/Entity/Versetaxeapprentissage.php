<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Versetaxeapprentissage
 *
 * @ORM\Table(name="VerseTaxeApprentissage", indexes={@ORM\Index(name="fk_VerseTaxeApprentissage_Etablissement1_idx", columns={"idEtablissement"}), @ORM\Index(name="IDX_D05CB0C0812BA41B", columns={"idDepartement"})})
 * @ORM\Entity
 */
class Versetaxeapprentissage
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anneeVersement", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anneeversement;

    /**
     * @var float
     *
     * @ORM\Column(name="montantTaxe", type="float", precision=10, scale=0, nullable=false)
     */
    private $montanttaxe;

    /**
     * @var string
     *
     * @ORM\Column(name="partieVersante", type="string", length=255, nullable=false)
     */
    private $partieversante;

    /**
     * @var \Departement
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDepartement", referencedColumnName="id")
     * })
     */
    private $iddepartement;

    /**
     * @var \Etablissement
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEtablissement", referencedColumnName="id")
     * })
     */
    private $idetablissement;

    /**
     * @return \DateTime
     */
    public function getAnneeversement(): \DateTime
    {
        return $this->anneeversement;
    }

    /**
     * @param \DateTime $anneeversement
     */
    public function setAnneeversement(\DateTime $anneeversement): void
    {
        $this->anneeversement = $anneeversement;
    }

    /**
     * @return float
     */
    public function getMontanttaxe(): float
    {
        return $this->montanttaxe;
    }

    /**
     * @param float $montanttaxe
     */
    public function setMontanttaxe(float $montanttaxe): void
    {
        $this->montanttaxe = $montanttaxe;
    }

    /**
     * @return string
     */
    public function getPartieversante(): string
    {
        return $this->partieversante;
    }

    /**
     * @param string $partieversante
     */
    public function setPartieversante(string $partieversante): void
    {
        $this->partieversante = $partieversante;
    }

    /**
     * @return \Departement
     */
    public function getIddepartement(): \Departement
    {
        return $this->iddepartement;
    }

    /**
     * @param \Departement $iddepartement
     */
    public function setIddepartement(\Departement $iddepartement): void
    {
        $this->iddepartement = $iddepartement;
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



}
