<?php

<<<<<<< HEAD

namespace App\Entity;
=======
namespace App\Entity;

>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
<<<<<<< HEAD
 * @ORM\Table(name="Pays")
=======
 * @ORM\Table(name="pays", uniqueConstraints={@ORM\UniqueConstraint(name="code_UNIQUE", columns={"code"}), @ORM\UniqueConstraint(name="alpha2_UNIQUE", columns={"alpha2"}), @ORM\UniqueConstraint(name="alpha3_UNIQUE", columns={"alpha3"})})
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
 * @ORM\Entity
 */
class Pays
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
<<<<<<< HEAD
     * @var string
     *
     * @ORM\Column(name="nomPays", type="string", length=200, nullable=false)
     */
    private $nompays;

    /**
     * @return int
     */
    public function getId(): int
=======
     * @var int
     *
     * @ORM\Column(name="code", type="integer", nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="alpha2", type="string", length=2, nullable=false)
     */
    private $alpha2;

    /**
     * @var string
     *
     * @ORM\Column(name="alpha3", type="string", length=3, nullable=false)
     */
    private $alpha3;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_en_gb", type="string", length=45, nullable=false)
     */
    private $nomEnGb;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_fr_fr", type="string", length=45, nullable=false)
     */
    private $nomFrFr;



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
    public function getNompays(): string
    {
        return $this->nompays;
    }

    /**
     * @param string $nompays
     */
    public function setNompays(string $nompays): void
    {
        $this->nompays = $nompays;
    }


=======
     * Set code.
     *
     * @param int $code
     *
     * @return Pays
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code.
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set alpha2.
     *
     * @param string $alpha2
     *
     * @return Pays
     */
    public function setAlpha2($alpha2)
    {
        $this->alpha2 = $alpha2;

        return $this;
    }

    /**
     * Get alpha2.
     *
     * @return string
     */
    public function getAlpha2()
    {
        return $this->alpha2;
    }

    /**
     * Set alpha3.
     *
     * @param string $alpha3
     *
     * @return Pays
     */
    public function setAlpha3($alpha3)
    {
        $this->alpha3 = $alpha3;

        return $this;
    }

    /**
     * Get alpha3.
     *
     * @return string
     */
    public function getAlpha3()
    {
        return $this->alpha3;
    }

    /**
     * Set nomEnGb.
     *
     * @param string $nomEnGb
     *
     * @return Pays
     */
    public function setNomEnGb($nomEnGb)
    {
        $this->nomEnGb = $nomEnGb;

        return $this;
    }

    /**
     * Get nomEnGb.
     *
     * @return string
     */
    public function getNomEnGb()
    {
        return $this->nomEnGb;
    }

    /**
     * Set nomFrFr.
     *
     * @param string $nomFrFr
     *
     * @return Pays
     */
    public function setNomFrFr($nomFrFr)
    {
        $this->nomFrFr = $nomFrFr;

        return $this;
    }

    /**
     * Get nomFrFr.
     *
     * @return string
     */
    public function getNomFrFr()
    {
        return $this->nomFrFr;
    }
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
}
