<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Estemploye
 *
 * @ORM\Table(name="EstEmploye", indexes={@ORM\Index(name="fk_Employe_ContactEtablissement1_idx", columns={"idContactEtablissement", "idPersonneContactEtablissement"}), @ORM\Index(name="fk_Employe_Etablissement1_idx", columns={"idEtablissement"})})
 * @ORM\Entity
 */
class Estemploye
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
     * @ORM\Column(name="dateDebutEmploi", type="date", nullable=false)
     */
    private $datedebutemploi;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateFinEmploi", type="date", nullable=true)
     */
    private $datefinemploi;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=255, nullable=false)
     */
    private $fonction;

    /**
     * @var \Contactetablissement
     *
     * @ORM\ManyToOne(targetEntity="Contactetablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idContactEtablissement", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="idPersonneContactEtablissement", referencedColumnName="idPersonne")
     * })
     */
    private $idcontactetablissement;

    /**
     * @var \Etablissement
     *
     * @ORM\ManyToOne(targetEntity="Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEtablissement", referencedColumnName="id")
     * })
     */
    private $idetablissement;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getDatedebutemploi(): \DateTime
    {
        return $this->datedebutemploi;
    }

    /**
     * @param \DateTime $datedebutemploi
     */
    public function setDatedebutemploi(\DateTime $datedebutemploi): void
    {
        $this->datedebutemploi = $datedebutemploi;
    }

    /**
     * @return \DateTime|null
     */
    public function getDatefinemploi(): ?\DateTime
    {
        return $this->datefinemploi;
    }

    /**
     * @param \DateTime|null $datefinemploi
     */
    public function setDatefinemploi(?\DateTime $datefinemploi): void
    {
        $this->datefinemploi = $datefinemploi;
    }

    /**
     * @return string
     */
    public function getFonction(): string
    {
        return $this->fonction;
    }

    /**
     * @param string $fonction
     */
    public function setFonction(string $fonction): void
    {
        $this->fonction = $fonction;
    }

    /**
     * @return \Contactetablissement
     */
    public function getIdcontactetablissement(): \Contactetablissement
    {
        return $this->idcontactetablissement;
    }

    /**
     * @param \Contactetablissement $idcontactetablissement
     */
    public function setIdcontactetablissement(\Contactetablissement $idcontactetablissement): void
    {
        $this->idcontactetablissement = $idcontactetablissement;
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
