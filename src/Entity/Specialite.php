<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Specialite
 *
 * @ORM\Table(name="Specialite", uniqueConstraints={@ORM\UniqueConstraint(name="libelleSpecialite_UNIQUE", columns={"libelleSpecialite"})}, indexes={@ORM\Index(name="fk_Specialite_Departement1_idx", columns={"idDepartement"})})
 * @ORM\Entity
 */
class Specialite
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
     * @ORM\Column(name="libelleSpecialite", type="string", length=100, nullable=false)
     */
    private $libellespecialite;

    /**
     * @var \Departement
     *
     * @ORM\ManyToOne(targetEntity="Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDepartement", referencedColumnName="id")
     * })
     */
    private $iddepartement;

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
    public function getLibellespecialite(): string
    {
        return $this->libellespecialite;
    }

    /**
     * @param string $libellespecialite
     */
    public function setLibellespecialite(string $libellespecialite): void
    {
        $this->libellespecialite = $libellespecialite;
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



}
