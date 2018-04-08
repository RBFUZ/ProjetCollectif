<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Startup
 *
 * @ORM\Table(name="Startup")
 * @ORM\Entity
 */
class Startup
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
     * @ORM\Column(name="nomStartup", type="string", length=100, nullable=false)
     */
    private $nomstartup;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreationStartup", type="date", nullable=false)
     */
    private $datecreationstartup;

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
    public function getNomstartup(): string
    {
        return $this->nomstartup;
    }

    /**
     * @param string $nomstartup
     */
    public function setNomstartup(string $nomstartup): void
    {
        $this->nomstartup = $nomstartup;
    }

    /**
     * @return \DateTime
     */
    public function getDatecreationstartup(): \DateTime
    {
        return $this->datecreationstartup;
    }

    /**
     * @param \DateTime $datecreationstartup
     */
    public function setDatecreationstartup(\DateTime $datecreationstartup): void
    {
        $this->datecreationstartup = $datecreationstartup;
    }



}
