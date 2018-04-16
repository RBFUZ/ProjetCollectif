<?php

<<<<<<< HEAD

namespace App\Entity;
=======
namespace App\Entity;

>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
use Doctrine\ORM\Mapping as ORM;

/**
 * Gratification
 *
<<<<<<< HEAD
 * @ORM\Table(name="Gratification")
=======
 * @ORM\Table(name="gratification")
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
 * @ORM\Entity
 */
class Gratification
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
     * @var float
     *
<<<<<<< HEAD
     * @ORM\Column(name="montantGratification", type="float", precision=10, scale=0, nullable=false)
     */
    private $montantgratification;
=======
     * @ORM\Column(name="montant_gratification", type="float", precision=10, scale=0, nullable=false)
     */
    private $montantGratification;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="uniteGratification", type="string", length=45, nullable=false, options={"comment"="BRUT / NET"})
     */
    private $unitegratification;
=======
     * @ORM\Column(name="unite_gratification", type="string", length=45, nullable=false, options={"comment"="BRUT / NET"})
     */
    private $uniteGratification;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="uniteDureeGratification", type="string", length=45, nullable=false, options={"comment"="HEURE, MOIS, etc."})
     */
    private $unitedureegratification;

    /**
     * @return int
     */
    public function getId(): int
=======
     * @ORM\Column(name="unite_duree_gratification", type="string", length=45, nullable=false, options={"comment"="HEURE, MOIS, etc."})
     */
    private $uniteDureeGratification;



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
     * @return float
     */
    public function getMontantgratification(): float
    {
        return $this->montantgratification;
    }

    /**
     * @param float $montantgratification
     */
    public function setMontantgratification(float $montantgratification): void
    {
        $this->montantgratification = $montantgratification;
    }

    /**
     * @return string
     */
    public function getUnitegratification(): string
    {
        return $this->unitegratification;
    }

    /**
     * @param string $unitegratification
     */
    public function setUnitegratification(string $unitegratification): void
    {
        $this->unitegratification = $unitegratification;
    }

    /**
     * @return string
     */
    public function getUnitedureegratification(): string
    {
        return $this->unitedureegratification;
    }

    /**
     * @param string $unitedureegratification
     */
    public function setUnitedureegratification(string $unitedureegratification): void
    {
        $this->unitedureegratification = $unitedureegratification;
    }


=======
     * Set montantGratification.
     *
     * @param float $montantGratification
     *
     * @return Gratification
     */
    public function setMontantGratification($montantGratification)
    {
        $this->montantGratification = $montantGratification;

        return $this;
    }

    /**
     * Get montantGratification.
     *
     * @return float
     */
    public function getMontantGratification()
    {
        return $this->montantGratification;
    }

    /**
     * Set uniteGratification.
     *
     * @param string $uniteGratification
     *
     * @return Gratification
     */
    public function setUniteGratification($uniteGratification)
    {
        $this->uniteGratification = $uniteGratification;

        return $this;
    }

    /**
     * Get uniteGratification.
     *
     * @return string
     */
    public function getUniteGratification()
    {
        return $this->uniteGratification;
    }

    /**
     * Set uniteDureeGratification.
     *
     * @param string $uniteDureeGratification
     *
     * @return Gratification
     */
    public function setUniteDureeGratification($uniteDureeGratification)
    {
        $this->uniteDureeGratification = $uniteDureeGratification;

        return $this;
    }

    /**
     * Get uniteDureeGratification.
     *
     * @return string
     */
    public function getUniteDureeGratification()
    {
        return $this->uniteDureeGratification;
    }
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
}
