<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
 * @ORM\Table(name="Adresse", indexes={@ORM\Index(name="fk_Adresse_Ville1_idx", columns={"Ville_idVille"})})
 * @ORM\Entity
 */
class Adresse
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
     * @ORM\Column(name="adresse", type="string", length=200, nullable=false)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="complementAdresse", type="string", length=200, nullable=true)
     */
    private $complementadresse;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=45, nullable=false)
     */
    private $codepostal;

    /**
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Ville_idVille", referencedColumnName="id")
     * })
     */
    private $villeville;

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
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return null|string
     */
    public function getComplementadresse(): ?string
    {
        return $this->complementadresse;
    }

    /**
     * @param null|string $complementadresse
     */
    public function setComplementadresse(?string $complementadresse): void
    {
        $this->complementadresse = $complementadresse;
    }

    /**
     * @return string
     */
    public function getCodepostal(): string
    {
        return $this->codepostal;
    }

    /**
     * @param string $codepostal
     */
    public function setCodepostal(string $codepostal): void
    {
        $this->codepostal = $codepostal;
    }

    /**
     * @return \Ville
     */
    public function getVilleville(): Ville
    {
        return $this->villeville;
    }

    /**
     * @param \Ville $villeville
     */
    public function setVilleville(Ville $villeville): void
    {
        $this->villeville = $villeville;
    }


}
