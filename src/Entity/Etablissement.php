<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Etablissement
 *
 * @ORM\Table(name="Etablissement", uniqueConstraints={@ORM\UniqueConstraint(name="siret_UNIQUE", columns={"numSIRET"})}, indexes={@ORM\Index(name="fk_Etablissement_Adresse1_idx", columns={"idAdresse"}), @ORM\Index(name="fk_Etablissement_Entreprise1_idx", columns={"idEntreprise"})})
 * @ORM\Entity
 */
class Etablissement
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
     * @var string
     *
     * @ORM\Column(name="nomEtablissement", type="string", length=200, nullable=false)
     */
    private $nometablissement;

    /**
     * @var string
     *
     * @ORM\Column(name="numSIRET", type="string", length=14, nullable=false)
     */
    private $numsiret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="typeStructure", type="string", length=45, nullable=true)
     */
    private $typestructure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="effectifs", type="string", length=45, nullable=true)
     */
    private $effectifs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="secteursActivites", type="string", length=200, nullable=true)
     */
    private $secteursactivites;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codeNAF", type="string", length=45, nullable=true)
     */
    private $codenaf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="siteWebEtablissement", type="string", length=255, nullable=true)
     */
    private $sitewebetablissement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaireEtablissement", type="text", length=65535, nullable=true)
     */
    private $commentaireetablissement;

    /**
     * @var \Adresse
     *
     * @ORM\ManyToOne(targetEntity="Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAdresse", referencedColumnName="id")
     * })
     */
    private $idadresse;

    /**
     * @var \Entreprise
     *
     * @ORM\ManyToOne(targetEntity="Entreprise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEntreprise", referencedColumnName="id")
     * })
     */
    private $identreprise;

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
     * @return string
     */
    public function getNometablissement(): string
    {
        return $this->nometablissement;
    }

    /**
     * @param string $nometablissement
     */
    public function setNometablissement(string $nometablissement): void
    {
        $this->nometablissement = $nometablissement;
    }

    /**
     * @return string
     */
    public function getNumsiret(): string
    {
        return $this->numsiret;
    }

    /**
     * @param string $numsiret
     */
    public function setNumsiret(string $numsiret): void
    {
        $this->numsiret = $numsiret;
    }

    /**
     * @return null|string
     */
    public function getTypestructure(): ?string
    {
        return $this->typestructure;
    }

    /**
     * @param null|string $typestructure
     */
    public function setTypestructure(?string $typestructure): void
    {
        $this->typestructure = $typestructure;
    }

    /**
     * @return null|string
     */
    public function getEffectifs(): ?string
    {
        return $this->effectifs;
    }

    /**
     * @param null|string $effectifs
     */
    public function setEffectifs(?string $effectifs): void
    {
        $this->effectifs = $effectifs;
    }

    /**
     * @return null|string
     */
    public function getSecteursactivites(): ?string
    {
        return $this->secteursactivites;
    }

    /**
     * @param null|string $secteursactivites
     */
    public function setSecteursactivites(?string $secteursactivites): void
    {
        $this->secteursactivites = $secteursactivites;
    }

    /**
     * @return null|string
     */
    public function getCodenaf(): ?string
    {
        return $this->codenaf;
    }

    /**
     * @param null|string $codenaf
     */
    public function setCodenaf(?string $codenaf): void
    {
        $this->codenaf = $codenaf;
    }

    /**
     * @return null|string
     */
    public function getSitewebetablissement(): ?string
    {
        return $this->sitewebetablissement;
    }

    /**
     * @param null|string $sitewebetablissement
     */
    public function setSitewebetablissement(?string $sitewebetablissement): void
    {
        $this->sitewebetablissement = $sitewebetablissement;
    }

    /**
     * @return null|string
     */
    public function getCommentaireetablissement(): ?string
    {
        return $this->commentaireetablissement;
    }

    /**
     * @param null|string $commentaireetablissement
     */
    public function setCommentaireetablissement(?string $commentaireetablissement): void
    {
        $this->commentaireetablissement = $commentaireetablissement;
    }

    /**
     * @return \Adresse
     */
    public function getIdadresse(): \Adresse
    {
        return $this->idadresse;
    }

    /**
     * @param \Adresse $idadresse
     */
    public function setIdadresse(\Adresse $idadresse): void
    {
        $this->idadresse = $idadresse;
    }

    /**
     * @return \Entreprise
     */
    public function getIdentreprise(): \Entreprise
    {
        return $this->identreprise;
    }

    /**
     * @param \Entreprise $identreprise
     */
    public function setIdentreprise(\Entreprise $identreprise): void
    {
        $this->identreprise = $identreprise;
    }


}
