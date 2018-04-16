<?php

<<<<<<< HEAD

namespace App\Entity;
=======
namespace App\Entity;

>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
use Doctrine\ORM\Mapping as ORM;

/**
 * Etablissement
 *
<<<<<<< HEAD
 * @ORM\Table(name="Etablissement", uniqueConstraints={@ORM\UniqueConstraint(name="siret_UNIQUE", columns={"numSIRET"})}, indexes={@ORM\Index(name="fk_Etablissement_Adresse1_idx", columns={"idAdresse"}), @ORM\Index(name="fk_Etablissement_Entreprise1_idx", columns={"idEntreprise"})})
 * @ORM\Entity
=======
 * @ORM\Table(name="etablissement", uniqueConstraints={@ORM\UniqueConstraint(name="siret_UNIQUE", columns={"num_siret"})}, indexes={@ORM\Index(name="fk_Etablissement_Adresse1_idx", columns={"id_adresse"}), @ORM\Index(name="fk_Etablissement_Entreprise1_idx", columns={"id_entreprise"})})
 * @ORM\Entity(repositoryClass="App\Repository\EtablissementRepository")
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
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
<<<<<<< HEAD
     * @ORM\Column(name="nomEtablissement", type="string", length=200, nullable=false)
     */
    private $nometablissement;

    /**
     * @var string
     *
     * @ORM\Column(name="numSIRET", type="string", length=14, nullable=false)
     */
    private $numsiret;
=======
     * @ORM\Column(name="nom_etablissement", type="string", length=255, nullable=false)
     */
    private $nomEtablissement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_siret", type="string", length=14, nullable=true)
     */
    private $numSiret;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="typeStructure", type="string", length=45, nullable=true)
     */
    private $typestructure;
=======
     * @ORM\Column(name="type_structure", type="string", length=255, nullable=true)
     */
    private $typeStructure;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string|null
     *
     * @ORM\Column(name="effectifs", type="string", length=45, nullable=true)
     */
    private $effectifs;

    /**
     * @var string|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="secteursActivites", type="string", length=200, nullable=true)
     */
    private $secteursactivites;
=======
     * @ORM\Column(name="secteurs_activites", type="string", length=255, nullable=true)
     */
    private $secteursActivites;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="codeNAF", type="string", length=45, nullable=true)
     */
    private $codenaf;
=======
     * @ORM\Column(name="code_naf", type="string", length=45, nullable=true)
     */
    private $codeNaf;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="siteWebEtablissement", type="string", length=255, nullable=true)
     */
    private $sitewebetablissement;
=======
     * @ORM\Column(name="site_web_etablissement", type="string", length=255, nullable=true)
     */
    private $siteWebEtablissement;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="commentaireEtablissement", type="text", length=65535, nullable=true)
     */
    private $commentaireetablissement;

    /**
     * @var \Adresse
     *
     * @ORM\ManyToOne(targetEntity="Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAdresse", referencedColumnName="id")
     * })
     */
    private $idadresse;

    /**
     * @var \Entreprise
     *
     * @ORM\ManyToOne(targetEntity="Entreprise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEntreprise", referencedColumnName="id")
     * })
     */
    private $identreprise;

    /**
     * @return int
     */
    public function getId(): int
=======
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
    public function getNometablissement(): string
    {
        return $this->nometablissement;
    }

    /**
     * @param string $nometablissement
     */
    public function setNometablissement(string $nometablissement): void
    {
        $this->nometablissement = $nometablissement;
    }

    /**
     * @return string
     */
    public function getNumsiret(): string
    {
        return $this->numsiret;
    }

    /**
     * @param string $numsiret
     */
    public function setNumsiret(string $numsiret): void
    {
        $this->numsiret = $numsiret;
    }

    /**
     * @return null|string
     */
    public function getTypestructure(): ?string
    {
        return $this->typestructure;
    }

    /**
     * @param null|string $typestructure
     */
    public function setTypestructure(?string $typestructure): void
    {
        $this->typestructure = $typestructure;
    }

    /**
     * @return null|string
     */
    public function getEffectifs(): ?string
=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
    {
        return $this->effectifs;
    }

    /**
<<<<<<< HEAD
     * @param null|string $effectifs
     */
    public function setEffectifs(?string $effectifs): void
    {
        $this->effectifs = $effectifs;
    }

    /**
     * @return null|string
     */
    public function getSecteursactivites(): ?string
    {
        return $this->secteursactivites;
    }

    /**
     * @param null|string $secteursactivites
     */
    public function setSecteursactivites(?string $secteursactivites): void
    {
        $this->secteursactivites = $secteursactivites;
    }

    /**
     * @return null|string
     */
    public function getCodenaf(): ?string
    {
        return $this->codenaf;
    }

    /**
     * @param null|string $codenaf
     */
    public function setCodenaf(?string $codenaf): void
    {
        $this->codenaf = $codenaf;
    }

    /**
     * @return null|string
     */
    public function getSitewebetablissement(): ?string
    {
        return $this->sitewebetablissement;
    }

    /**
     * @param null|string $sitewebetablissement
     */
    public function setSitewebetablissement(?string $sitewebetablissement): void
    {
        $this->sitewebetablissement = $sitewebetablissement;
    }

    /**
     * @return null|string
     */
    public function getCommentaireetablissement(): ?string
    {
        return $this->commentaireetablissement;
    }

    /**
     * @param null|string $commentaireetablissement
     */
    public function setCommentaireetablissement(?string $commentaireetablissement): void
    {
        $this->commentaireetablissement = $commentaireetablissement;
    }

    /**
     * @return \Adresse
     */
    public function getIdadresse(): \Adresse
    {
        return $this->idadresse;
    }

    /**
     * @param \Adresse $idadresse
     */
    public function setIdadresse(\Adresse $idadresse): void
    {
        $this->idadresse = $idadresse;
    }

    /**
     * @return \Entreprise
     */
    public function getIdentreprise(): \Entreprise
    {
        return $this->identreprise;
    }

    /**
     * @param \Entreprise $identreprise
     */
    public function setIdentreprise(\Entreprise $identreprise): void
    {
        $this->identreprise = $identreprise;
    }


=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
}
