<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="Departement", uniqueConstraints={@ORM\UniqueConstraint(name="libelleDepartement_UNIQUE", columns={"libelleDepartement"})})
 * @ORM\Entity
 */
class Departement
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
     * @ORM\Column(name="libelleDepartement", type="string", length=100, nullable=false)
     */
    private $libelledepartement;

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
    public function getLibelledepartement(): string
    {
        return $this->libelledepartement;
    }

    /**
     * @param string $libelledepartement
     */
    public function setLibelledepartement(string $libelledepartement): void
    {
        $this->libelledepartement = $libelledepartement;
    }



}
