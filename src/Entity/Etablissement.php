<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etablissement
 *
 * @ORM\Table(name="etablissement", uniqueConstraints={@ORM\UniqueConstraint(name="siret_UNIQUE", columns={"num_siret"})}, indexes={@ORM\Index(name="fk_Etablissement_Adresse1_idx", columns={"id_adresse"}), @ORM\Index(name="fk_Etablissement_Entreprise1_idx", columns={"id_entreprise"})})
 * @ORM\Entity
 */
class Etablissement
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
     * @ORM\Column(name="nom_etablissement", type="string", length=255, nullable=false)
     */
    private $nomEtablissement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_siret", type="string", length=14, nullable=true)
     */
    private $numSiret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_structure", type="string", length=255, nullable=true)
     */
    private $typeStructure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="effectifs", type="string", length=45, nullable=true)
     */
    private $effectifs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="secteurs_activites", type="string", length=255, nullable=true)
     */
    private $secteursActivites;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_naf", type="string", length=45, nullable=true)
     */
    private $codeNaf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="site_web_etablissement", type="string", length=255, nullable=true)
     */
    private $siteWebEtablissement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire_etablissement", type="text", length=65535, nullable=true)
     */
    private $commentaireEtablissement;

    /**
     * @var \App\Entity\Adresse
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adresse", referencedColumnName="id")
     * })
     */
    private $idAdresse;

    /**
     * @var \App\Entity\Entreprise
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Entreprise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entreprise", referencedColumnName="id")
     * })
     */
    private $idEntreprise;



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
     * Set nomEtablissement.
     *
     * @param string $nomEtablissement
     *
     * @return Etablissement
     */
    public function setNomEtablissement($nomEtablissement)
    {
        $this->nomEtablissement = $nomEtablissement;

        return $this;
    }

    /**
     * Get nomEtablissement.
     *
     * @return string
     */
    public function getNomEtablissement()
    {
        return $this->nomEtablissement;
    }

    /**
     * Set numSiret.
     *
     * @param string|null $numSiret
     *
     * @return Etablissement
     */
    public function setNumSiret($numSiret = null)
    {
        $this->numSiret = $numSiret;

        return $this;
    }

    /**
     * Get numSiret.
     *
     * @return string|null
     */
    public function getNumSiret()
    {
        return $this->numSiret;
    }

    /**
     * Set typeStructure.
     *
     * @param string|null $typeStructure
     *
     * @return Etablissement
     */
    public function setTypeStructure($typeStructure = null)
    {
        $this->typeStructure = $typeStructure;

        return $this;
    }

    /**
     * Get typeStructure.
     *
     * @return string|null
     */
    public function getTypeStructure()
    {
        return $this->typeStructure;
    }

    /**
     * Set effectifs.
     *
     * @param string|null $effectifs
     *
     * @return Etablissement
     */
    public function setEffectifs($effectifs = null)
    {
        $this->effectifs = $effectifs;

        return $this;
    }

    /**
     * Get effectifs.
     *
     * @return string|null
     */
    public function getEffectifs()
    {
        return $this->effectifs;
    }

    /**
     * Set secteursActivites.
     *
     * @param string|null $secteursActivites
     *
     * @return Etablissement
     */
    public function setSecteursActivites($secteursActivites = null)
    {
        $this->secteursActivites = $secteursActivites;

        return $this;
    }

    /**
     * Get secteursActivites.
     *
     * @return string|null
     */
    public function getSecteursActivites()
    {
        return $this->secteursActivites;
    }

    /**
     * Set codeNaf.
     *
     * @param string|null $codeNaf
     *
     * @return Etablissement
     */
    public function setCodeNaf($codeNaf = null)
    {
        $this->codeNaf = $codeNaf;

        return $this;
    }

    /**
     * Get codeNaf.
     *
     * @return string|null
     */
    public function getCodeNaf()
    {
        return $this->codeNaf;
    }

    /**
     * Set siteWebEtablissement.
     *
     * @param string|null $siteWebEtablissement
     *
     * @return Etablissement
     */
    public function setSiteWebEtablissement($siteWebEtablissement = null)
    {
        $this->siteWebEtablissement = $siteWebEtablissement;

        return $this;
    }

    /**
     * Get siteWebEtablissement.
     *
     * @return string|null
     */
    public function getSiteWebEtablissement()
    {
        return $this->siteWebEtablissement;
    }

    /**
     * Set commentaireEtablissement.
     *
     * @param string|null $commentaireEtablissement
     *
     * @return Etablissement
     */
    public function setCommentaireEtablissement($commentaireEtablissement = null)
    {
        $this->commentaireEtablissement = $commentaireEtablissement;

        return $this;
    }

    /**
     * Get commentaireEtablissement.
     *
     * @return string|null
     */
    public function getCommentaireEtablissement()
    {
        return $this->commentaireEtablissement;
    }

    /**
     * Set idAdresse.
     *
     * @param \App\Entity\Adresse|null $idAdresse
     *
     * @return Etablissement
     */
    public function setIdAdresse(\App\Entity\Adresse $idAdresse = null)
    {
        $this->idAdresse = $idAdresse;

        return $this;
    }

    /**
     * Get idAdresse.
     *
     * @return \App\Entity\Adresse|null
     */
    public function getIdAdresse()
    {
        return $this->idAdresse;
    }

    /**
     * Set idEntreprise.
     *
     * @param \App\Entity\Entreprise|null $idEntreprise
     *
     * @return Etablissement
     */
    public function setIdEntreprise(\App\Entity\Entreprise $idEntreprise = null)
    {
        $this->idEntreprise = $idEntreprise;

        return $this;
    }

    /**
     * Get idEntreprise.
     *
     * @return \App\Entity\Entreprise|null
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }
}
