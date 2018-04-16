<?php

<<<<<<< HEAD

namespace App\Entity;
=======
namespace App\Entity;

>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
use Doctrine\ORM\Mapping as ORM;

/**
 * Startup
 *
<<<<<<< HEAD
 * @ORM\Table(name="Startup")
=======
 * @ORM\Table(name="startup")
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
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
<<<<<<< HEAD
     * @ORM\Column(name="nomStartup", type="string", length=100, nullable=false)
     */
    private $nomstartup;
=======
     * @ORM\Column(name="nom_startup", type="string", length=100, nullable=false)
     */
    private $nomStartup;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var \DateTime
     *
<<<<<<< HEAD
     * @ORM\Column(name="dateCreationStartup", type="date", nullable=false)
     */
    private $datecreationstartup;

    /**
     * @return int
     */
    public function getId(): int
=======
     * @ORM\Column(name="date_creation_startup", type="date", nullable=false)
     */
    private $dateCreationStartup;



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



=======
     * Set nomStartup.
     *
     * @param string $nomStartup
     *
     * @return Startup
     */
    public function setNomStartup($nomStartup)
    {
        $this->nomStartup = $nomStartup;

        return $this;
    }

    /**
     * Get nomStartup.
     *
     * @return string
     */
    public function getNomStartup()
    {
        return $this->nomStartup;
    }

    /**
     * Set dateCreationStartup.
     *
     * @param \DateTime $dateCreationStartup
     *
     * @return Startup
     */
    public function setDateCreationStartup($dateCreationStartup)
    {
        $this->dateCreationStartup = $dateCreationStartup;

        return $this;
    }

    /**
     * Get dateCreationStartup.
     *
     * @return \DateTime
     */
    public function getDateCreationStartup()
    {
        return $this->dateCreationStartup;
    }
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
}
