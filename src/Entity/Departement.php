<?php

<<<<<<< HEAD

namespace App\Entity;
=======
namespace App\Entity;

>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
<<<<<<< HEAD
 * @ORM\Table(name="Departement", uniqueConstraints={@ORM\UniqueConstraint(name="libelleDepartement_UNIQUE", columns={"libelleDepartement"})})
=======
 * @ORM\Table(name="departement", uniqueConstraints={@ORM\UniqueConstraint(name="libelleDepartement_UNIQUE", columns={"libelle_departement"})})
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
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
<<<<<<< HEAD
     * @ORM\Column(name="libelleDepartement", type="string", length=100, nullable=false)
     */
    private $libelledepartement;

    /**
     * @return int
     */
    public function getId(): int
=======
     * @ORM\Column(name="libelle_departement", type="string", length=100, nullable=false)
     */
    private $libelleDepartement;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
    {
        return $this->id;
    }

    /**
<<<<<<< HEAD
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



=======
     * Set libelleDepartement.
     *
     * @param string $libelleDepartement
     *
     * @return Departement
     */
    public function setLibelleDepartement($libelleDepartement)
    {
        $this->libelleDepartement = $libelleDepartement;

        return $this;
    }

    /**
     * Get libelleDepartement.
     *
     * @return string
     */
    public function getLibelleDepartement()
    {
        return $this->libelleDepartement;
    }
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
}
