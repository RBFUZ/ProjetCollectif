<?php
/**
 * Created by PhpStorm.
 * User: thiba
 * Date: 16/04/2018
 * Time: 16:26
 */

class verse_taxe_apprentissage{
    private $montant;
    private $partie_versante;
    private $departement;

    /**
     * verse_taxe_apprentissage constructor.
     * @param $montant
     * @param $partie_versante
     * @param $departement
     * @param $Entreprise
     */
    public function __construct($montant, $partie_versante, $departement, $Entreprise)
    {
        $this->montant = $montant;
        $this->partie_versante = $partie_versante;
        $this->departement = $departement;
        $this->Entreprise = $Entreprise;
    }

    public function afficher(){
        echo 'Taxe '.$this->montant.' | '.$this->partie_versante.' | '.$this->departement->getLibelleDepartement()." \n";
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param mixed $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return mixed
     */
    public function getPartieVersante()
    {
        return $this->partie_versante;
    }

    /**
     * @param mixed $partie_versante
     */
    public function setPartieVersante($partie_versante)
    {
        $this->partie_versante = $partie_versante;
    }

    /**
     * @return mixed
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * @param mixed $departement
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
    }

    /**
     * @return mixed
     */
    public function getEntreprise()
    {
        return $this->Entreprise;
    }

    /**
     * @param mixed $Entreprise
     */
    public function setEntreprise($Entreprise)
    {
        $this->Entreprise = $Entreprise;
    }
    private $Entreprise;
}