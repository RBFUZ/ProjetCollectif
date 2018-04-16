<?php

<<<<<<< HEAD

namespace App\Entity;
=======
namespace App\Entity;

>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
<<<<<<< HEAD
 * @ORM\Table(name="Entreprise")
=======
 * @ORM\Table(name="entreprise")
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
 * @ORM\Entity
 */
class Entreprise
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
     * @ORM\Column(name="nomEntreprise", type="string", length=255, nullable=false)
     */
    private $nomentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="numSIREN", type="string", length=9, nullable=false)
     */
    private $numsiren;
=======
     * @ORM\Column(name="nom_entreprise", type="string", length=255, nullable=false)
     */
    private $nomEntreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_siren", type="string", length=9, nullable=true)
     */
    private $numSiren;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="statutJuridique", type="string", length=45, nullable=false)
     */
    private $statutjuridique;
=======
     * @ORM\Column(name="statut_juridique", type="string", length=45, nullable=false)
     */
    private $statutJuridique;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="siteWebEntreprise", type="string", length=255, nullable=true)
     */
    private $sitewebentreprise;
=======
     * @ORM\Column(name="site_web_entreprise", type="string", length=255, nullable=true)
     */
    private $siteWebEntreprise;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="commentaireEntreprise", type="text", length=65535, nullable=true)
     */
    private $commentaireentreprise;

    /**
     * @return int
     */
    public function getId(): int
=======
     * @ORM\Column(name="commentaire_entreprise", type="text", length=65535, nullable=true)
     */
    private $commentaireEntreprise;



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
    public function getNomentreprise(): string
    {
        return $this->nomentreprise;
    }

    /**
     * @param string $nomentreprise
     */
    public function setNomentreprise(string $nomentreprise): void
    {
        $this->nomentreprise = $nomentreprise;
    }

    /**
     * @return string
     */
    public function getNumsiren(): string
    {
        return $this->numsiren;
    }

    /**
     * @param string $numsiren
     */
    public function setNumsiren(string $numsiren): void
    {
        $this->numsiren = $numsiren;
    }

    /**
     * @return string
     */
    public function getStatutjuridique(): string
    {
        return $this->statutjuridique;
    }

    /**
     * @param string $statutjuridique
     */
    public function setStatutjuridique(string $statutjuridique): void
    {
        $this->statutjuridique = $statutjuridique;
    }

    /**
     * @return null|string
     */
    public function getSitewebentreprise(): ?string
    {
        return $this->sitewebentreprise;
    }

    /**
     * @param null|string $sitewebentreprise
     */
    public function setSitewebentreprise(?string $sitewebentreprise): void
    {
        $this->sitewebentreprise = $sitewebentreprise;
    }

    /**
     * @return null|string
     */
    public function getCommentaireentreprise(): ?string
    {
        return $this->commentaireentreprise;
    }

    /**
     * @param null|string $commentaireentreprise
     */
    public function setCommentaireentreprise(?string $commentaireentreprise): void
    {
        $this->commentaireentreprise = $commentaireentreprise;
    }


=======
     * Set nomEntreprise.
     *
     * @param string $nomEntreprise
     *
     * @return Entreprise
     */
    public function setNomEntreprise($nomEntreprise)
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Get nomEntreprise.
     *
     * @return string
     */
    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }

    /**
     * Set numSiren.
     *
     * @param string|null $numSiren
     *
     * @return Entreprise
     */
    public function setNumSiren($numSiren = null)
    {
        $this->numSiren = $numSiren;

        return $this;
    }

    /**
     * Get numSiren.
     *
     * @return string|null
     */
    public function getNumSiren()
    {
        return $this->numSiren;
    }

    /**
     * Set statutJuridique.
     *
     * @param string $statutJuridique
     *
     * @return Entreprise
     */
    public function setStatutJuridique($statutJuridique)
    {
        $this->statutJuridique = $statutJuridique;

        return $this;
    }

    /**
     * Get statutJuridique.
     *
     * @return string
     */
    public function getStatutJuridique()
    {
        return $this->statutJuridique;
    }

    /**
     * Set siteWebEntreprise.
     *
     * @param string|null $siteWebEntreprise
     *
     * @return Entreprise
     */
    public function setSiteWebEntreprise($siteWebEntreprise = null)
    {
        $this->siteWebEntreprise = $siteWebEntreprise;

        return $this;
    }

    /**
     * Get siteWebEntreprise.
     *
     * @return string|null
     */
    public function getSiteWebEntreprise()
    {
        return $this->siteWebEntreprise;
    }

    /**
     * Set commentaireEntreprise.
     *
     * @param string|null $commentaireEntreprise
     *
     * @return Entreprise
     */
    public function setCommentaireEntreprise($commentaireEntreprise = null)
    {
        $this->commentaireEntreprise = $commentaireEntreprise;

        return $this;
    }

    /**
     * Get commentaireEntreprise.
     *
     * @return string|null
     */
    public function getCommentaireEntreprise()
    {
        return $this->commentaireEntreprise;
    }
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
}
