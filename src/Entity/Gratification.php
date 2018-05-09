<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gratification
 *
 * @ORM\Table(name="gratification")
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
     * @ORM\Column(name="montant_gratification", type="float", precision=10, scale=0, nullable=false)
     */
    private $montantGratification;

    /**
     * @var string
     *
     * @ORM\Column(name="unite_gratification", type="string", length=45, nullable=false, options={"default"="Brut","comment"="BRUT / NET"})
     */
    private $uniteGratification = 'Brut';

    /**
     * @var string
     *
     * @ORM\Column(name="unite_duree_gratification", type="string", length=45, nullable=false, options={"default"="Mensuel","comment"="HEURE, MOIS, etc."})
     */
    private $uniteDureeGratification = 'Mensuel';



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
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
}
