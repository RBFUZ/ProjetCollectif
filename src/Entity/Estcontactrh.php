<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Estcontactrh
 *
 * @ORM\Table(name="EstContactRH", indexes={@ORM\Index(name="fk_EstContactRH_ContactEtablissement1_idx", columns={"idContactEtablissement", "idPersonneContactEtablissement"}), @ORM\Index(name="fk_EstContactRH_Etablissement1_idx", columns={"idEtablissement"})})
 * @ORM\Entity
 */
class Estcontactrh
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
     * @ORM\Column(name="dateDebutContactRH", type="date", nullable=false)
     */
    private $datedebutcontactrh;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateFinContactRH", type="date", nullable=true)
     */
    private $datefincontactrh;

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
    public function getDatedebutcontactrh(): \DateTime
    {
        return $this->datedebutcontactrh;
    }

    /**
     * @param \DateTime $datedebutcontactrh
     */
    public function setDatedebutcontactrh(\DateTime $datedebutcontactrh): void
    {
        $this->datedebutcontactrh = $datedebutcontactrh;
    }

    /**
     * @return \DateTime|null
     */
    public function getDatefincontactrh(): ?\DateTime
    {
        return $this->datefincontactrh;
    }

    /**
     * @param \DateTime|null $datefincontactrh
     */
    public function setDatefincontactrh(?\DateTime $datefincontactrh): void
    {
        $this->datefincontactrh = $datefincontactrh;
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
