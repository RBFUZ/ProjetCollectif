<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table(name="entreprise")
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
     * @ORM\Column(name="nom_entreprise", type="string", length=255, nullable=false)
     */
    private $nomEntreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_siren", type="string", length=9, nullable=true)
     */
    private $numSiren;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_juridique", type="string", length=45, nullable=false)
     */
    private $statutJuridique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="site_web_entreprise", type="string", length=255, nullable=true)
     */
    private $siteWebEntreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire_entreprise", type="text", length=65535, nullable=true)
     */
    private $commentaireEntreprise;



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
}
