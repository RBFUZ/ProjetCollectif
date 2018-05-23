<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Startup
 *
 * @ORM\Table(name="startup")
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
     * @ORM\Column(name="nom_startup", type="string", length=100, nullable=false, options={"default"="Inconnu"})
     */
    private $nomStartup = 'Inconnu';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation_startup", type="date", nullable=false, options={"default"="1900-01-01"})
     */
    private $dateCreationStartup = '1900-01-01';



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
}
