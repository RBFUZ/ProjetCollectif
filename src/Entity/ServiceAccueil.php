<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceAccueil
 *
 * @ORM\Table(name="service_accueil", indexes={@ORM\Index(name="fk_ServiceAccueil_Etablissement1_idx", columns={"id_etablissement"})})
 * @ORM\Entity
 */
class ServiceAccueil
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
     * @ORM\Column(name="nom_service", type="string", length=100, nullable=false, options={"default"="Service d'accueil"})
     */
    private $nomService = 'Service d\'accueil';

    /**
     * @var \App\Entity\Etablissement
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_etablissement", referencedColumnName="id")
     * })
     */
    private $idEtablissement;



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
     * Set nomService.
     *
     * @param string $nomService
     *
     * @return ServiceAccueil
     */
    public function setNomService($nomService)
    {
        $this->nomService = $nomService;

        return $this;
    }

    /**
     * Get nomService.
     *
     * @return string
     */
    public function getNomService()
    {
        return $this->nomService;
    }

    /**
     * Set idEtablissement.
     *
     * @param \App\Entity\Etablissement|null $idEtablissement
     *
     * @return ServiceAccueil
     */
    public function setIdEtablissement(\App\Entity\Etablissement $idEtablissement = null)
    {
        $this->idEtablissement = $idEtablissement;

        return $this;
    }

    /**
     * Get idEtablissement.
     *
     * @return \App\Entity\Etablissement|null
     */
    public function getIdEtablissement()
    {
        return $this->idEtablissement;
    }
}
