<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table(name="Entreprise")
 * @ORM\Entity
 */
class Entreprise
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
     * @ORM\Column(name="nomEntreprise", type="string", length=255, nullable=false)
     */
    private $nomentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="numSIREN", type="string", length=9, nullable=false)
     */
    private $numsiren;

    /**
     * @var string
     *
     * @ORM\Column(name="statutJuridique", type="string", length=45, nullable=false)
     */
    private $statutjuridique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="siteWebEntreprise", type="string", length=255, nullable=true)
     */
    private $sitewebentreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaireEntreprise", type="text", length=65535, nullable=true)
     */
    private $commentaireentreprise;

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
    public function getNomentreprise(): string
    {
        return $this->nomentreprise;
    }

    /**
     * @param string $nomentreprise
     */
    public function setNomentreprise(string $nomentreprise): void
    {
        $this->nomentreprise = $nomentreprise;
    }

    /**
     * @return string
     */
    public function getNumsiren(): string
    {
        return $this->numsiren;
    }

    /**
     * @param string $numsiren
     */
    public function setNumsiren(string $numsiren): void
    {
        $this->numsiren = $numsiren;
    }

    /**
     * @return string
     */
    public function getStatutjuridique(): string
    {
        return $this->statutjuridique;
    }

    /**
     * @param string $statutjuridique
     */
    public function setStatutjuridique(string $statutjuridique): void
    {
        $this->statutjuridique = $statutjuridique;
    }

    /**
     * @return null|string
     */
    public function getSitewebentreprise(): ?string
    {
        return $this->sitewebentreprise;
    }

    /**
     * @param null|string $sitewebentreprise
     */
    public function setSitewebentreprise(?string $sitewebentreprise): void
    {
        $this->sitewebentreprise = $sitewebentreprise;
    }

    /**
     * @return null|string
     */
    public function getCommentaireentreprise(): ?string
    {
        return $this->commentaireentreprise;
    }

    /**
     * @param null|string $commentaireentreprise
     */
    public function setCommentaireentreprise(?string $commentaireentreprise): void
    {
        $this->commentaireentreprise = $commentaireentreprise;
    }


}
