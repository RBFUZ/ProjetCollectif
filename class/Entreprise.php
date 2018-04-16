<?php
/**
 * Created by PhpStorm.
 * User: thiba
 * Date: 16/04/2018
 * Time: 16:29
 */

class Entreprise{

    private $nom_entreprise;
    private $statut_juridique;
    private $num_siren;
    private $site_web_entreprise;
    private $commentaire_entreprise;

    /**
     * Entreprise constructor.
     * @param $nom_entreprise
     * @param $statut_juridique
     * @param $num_siren
     * @param $site_web_entreprise
     * @param $commentaire_entreprise
     */
    public function __construct($nom_entreprise, $statut_juridique, $num_siren, $site_web_entreprise, $commentaire_entreprise)
    {
        $this->nom_entreprise = $nom_entreprise;
        $this->statut_juridique = $statut_juridique;
        $this->num_siren = $num_siren;
        $this->site_web_entreprise = $site_web_entreprise;
        $this->commentaire_entreprise = $commentaire_entreprise;
    }

    public function afficher()
    {
        echo "Entreprise ".$this->nom_entreprise." | ".$this->statut_juridique." | ".$this->num_siren." | ".$this->site_web_entreprise." | ".$this->commentaire_entreprise."\n";
    }
    /**
     * @return mixed
     */
    public function getNomEntreprise()
    {
        return $this->nom_entreprise;
    }

    /**
     * @param mixed $nom_entreprise
     */
    public function setNomEntreprise($nom_entreprise)
    {
        $this->nom_entreprise = $nom_entreprise;
    }

    /**
     * @return mixed
     */
    public function getStatutJuridique()
    {
        return $this->statut_juridique;
    }

    /**
     * @param mixed $statut_juridique
     */
    public function setStatutJuridique($statut_juridique)
    {
        $this->statut_juridique = $statut_juridique;
    }

    /**
     * @return mixed
     */
    public function getNumSiren()
    {
        return $this->num_siren;
    }

    /**
     * @param mixed $num_siren
     */
    public function setNumSiren($num_siren)
    {
        $this->num_siren = $num_siren;
    }

    /**
     * @return mixed
     */
    public function getSiteWebEntreprise()
    {
        return $this->site_web_entreprise;
    }

    /**
     * @param mixed $site_web_entreprise
     */
    public function setSiteWebEntreprise($site_web_entreprise)
    {
        $this->site_web_entreprise = $site_web_entreprise;
    }

    /**
     * @return mixed
     */
    public function getCommentaireEntreprise()
    {
        return $this->commentaire_entreprise;
    }

    /**
     * @param mixed $commentaire_entreprise
     */
    public function setCommentaireEntreprise($commentaire_entreprise)
    {
        $this->commentaire_entreprise = $commentaire_entreprise;
    }
}