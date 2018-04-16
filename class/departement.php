<?php
/**
 * Created by PhpStorm.
 * User: thiba
 * Date: 16/04/2018
 * Time: 16:26
 */

class Departement{
    private $libelle_departement;

    /**
     * departement constructor.
     * @param $libelle_departement
     */
    public function __construct($libelle_departement)
    {
        $this->libelle_departement = $libelle_departement;
    }

    public function afficher(){
        echo 'Departement '.$this->libelle_departement."\n";
    }

    /**
     * @return mixed
     */
    public function getLibelleDepartement()
    {
        return $this->libelle_departement;
    }

    /**
     * @param mixed $libelle_departement
     */
    public function setLibelleDepartement($libelle_departement)
    {
        $this->libelle_departement = $libelle_departement;
    }

}