<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Estcontacttechnique
 *
 * @ORM\Table(name="EstContactTechnique", indexes={@ORM\Index(name="fk_EstContactTechnique_ContactEtablissement1_idx", columns={"idContactEtablissement", "idPersonneContactEtablissement"}), @ORM\Index(name="fk_EstContactTechnique_Etablissement1_idx", columns={"idEtablissement"})})
 * @ORM\Entity
 */
class Estcontacttechnique
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
     * @ORM\Column(name="dateDebutContactTechnique", type="date", nullable=false)
     */
    private $datedebutcontacttechnique;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateFinContactTechnique", type="date", nullable=true)
     */
    private $datefincontacttechnique;

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
    public function getDatedebutcontacttechnique(): \DateTime
    {
        return $this->datedebutcontacttechnique;
    }

    /**
     * @param \DateTime $datedebutcontacttechnique
     */
    public function setDatedebutcontacttechnique(\DateTime $datedebutcontacttechnique): void
    {
        $this->datedebutcontacttechnique = $datedebutcontacttechnique;
    }

    /**
     * @return \DateTime|null
     */
    public function getDatefincontacttechnique(): ?\DateTime
    {
        return $this->datefincontacttechnique;
    }

    /**
     * @param \DateTime|null $datefincontacttechnique
     */
    public function setDatefincontacttechnique(?\DateTime $datefincontacttechnique): void
    {
        $this->datefincontacttechnique = $datefincontacttechnique;
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
