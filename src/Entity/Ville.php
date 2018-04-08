<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="Ville", indexes={@ORM\Index(name="fk_Ville_Pays1_idx", columns={"idPays"})})
 * @ORM\Entity
 */
class Ville
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
     * @ORM\Column(name="nomVille", type="string", length=200, nullable=false)
     */
    private $nomville;

    /**
     * @var \Pays
     *
     * @ORM\ManyToOne(targetEntity="Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPays", referencedColumnName="id")
     * })
     */
    private $idpays;

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
    public function getNomville(): string
    {
        return $this->nomville;
    }

    /**
     * @param string $nomville
     */
    public function setNomville(string $nomville): void
    {
        $this->nomville = $nomville;
    }

    /**
     * @return \Pays
     */
    public function getIdpays(): \Pays
    {
        return $this->idpays;
    }

    /**
     * @param \Pays $idpays
     */
    public function setIdpays(\Pays $idpays): void
    {
        $this->idpays = $idpays;
    }



}
