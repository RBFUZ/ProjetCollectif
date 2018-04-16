<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Serviceaccueil
 *
 * @ORM\Table(name="ServiceAccueil", indexes={@ORM\Index(name="fk_ServiceAccueil_Etablissement1_idx", columns={"idEtablissement"})})
 * @ORM\Entity
 */
class Serviceaccueil
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
     * @ORM\Column(name="nomService", type="string", length=100, nullable=false)
     */
    private $nomservice;

    /**
     * @var \Etablissement
     *
     * @ORM\ManyToOne(targetEntity="Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEtablissement", referencedColumnName="id")
     * })
     */
    private $idetablissement;

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
    public function getNomservice(): string
    {
        return $this->nomservice;
    }

    /**
     * @param string $nomservice
     */
    public function setNomservice(string $nomservice): void
    {
        $this->nomservice = $nomservice;
    }

    /**
     * @return \Etablissement
     */
    public function getIdetablissement(): \Etablissement
    {
        return $this->idetablissement;
    }

    /**
     * @param \Etablissement $idetablissement
     */
    public function setIdetablissement(\Etablissement $idetablissement): void
    {
        $this->idetablissement = $idetablissement;
    }



}
