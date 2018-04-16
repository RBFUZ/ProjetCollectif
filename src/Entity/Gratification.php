<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Gratification
 *
 * @ORM\Table(name="Gratification")
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
     * @ORM\Column(name="montantGratification", type="float", precision=10, scale=0, nullable=false)
     */
    private $montantgratification;

    /**
     * @var string
     *
     * @ORM\Column(name="uniteGratification", type="string", length=45, nullable=false, options={"comment"="BRUT / NET"})
     */
    private $unitegratification;

    /**
     * @var string
     *
     * @ORM\Column(name="uniteDureeGratification", type="string", length=45, nullable=false, options={"comment"="HEURE, MOIS, etc."})
     */
    private $unitedureegratification;

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


}
