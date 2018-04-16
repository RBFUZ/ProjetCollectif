<?php

class Contact{
	private $_nom;
	private $_prenom;
	private $_mail;
	private $_telephone;
	private $_fonction;

	public function setNom($pnom){
		$this->_nom = $pnom;
	}

	public function setPrenom($pprenom){
		$this->_prenom = $pprenom;
	}

	public function setMail($pmail){
		$this->_mail = $pmail;
	}

	public function setTelephone($ptelephone){
		$this->_telephone = $ptelephone;
	}

	public function setFonction($pfonction){
		$this->_fonction = $pfonction;
	}

	public function parler(){
		echo "Je suis un contact nommé ".$this->_nom." avec comme mail ".$this->_mail." avec la fonction ".$this->_fonction."\n";
	}
}

class Etablissement{

	public $_denomination;
	private $_secteurActivite;
	public $_adresse;
	private $_cp;
	private $_ville;

	
	public function setDenomination($pdenomination){
		$_denomination = $pdenomination;
	}

	public function setSecteurActivite($psa){
		$_secteurActivite = $psa;
	}

	public function setAdresse($paddr){
		$_adresse = $paddr;
	}

	public function setCp($pcp){
		$_cp = $pcp;
	}

	public function setVille($pv){
		$_ville = $pv;
	}

}

class ParticipationForum extends Etablissement{

	private $_rStagiaire;
	private $_rDiplome;
	private $_rApprentis;
	private $_nEtudeRecherche;
	private $_filiaireRecherche;
	private $_commentaireParticipation;

	public function setRStagiaire($prs){
		$_rStagiaire = $prs;
	}

	public function setRDiplome($prd){
		$_rDiplome = $prd;
	}

	public function setRApprentis($pra){
		$_rApprentis = $pra;
	}

	public function setNEtudeRecherche($pner){
		$_nEtudeRecherche = $pner;
	}

	public function setFiliaireRecherche($pfr){
		$_filiaireRecherche = $pfr;
	}

	public function setCommentaire($pcp){
		$_commentaireParticipation = $pcp;
	}

	public function parler(){
		echo "entreprise " .$_denomination. "a l'adresse " .$_adresse;
	}


	public static function parseForum($for, $con, $Key, $Row)
	{
		if($Key == 0)
	        $for->setDenomination($Row);
	    if($Key == 1)
	    	$i = 1; // useless
        if($Key == 2)
			$for->setSecteurActivite($Row);

		if($Key == 3)
        	$con->setNom = $Row;
        if($Key == 4)
        	$con->setPrenom = $Row;
        if($Key == 5)
        	$con->setMail = $Row;
        if($Key == 6)
        	$con->setTelephone = $Row;
        if($Key == 7)
        	$con->setFonction = $Row;
        if($Key == 8)
        	$for->setRStagiaire = $Row;
        if($Key == 9)
        	$for->setRDiplome = $Row;
        if($Key == 10)
        	$for->setRApprentis = $Row;
        if($Key == 11)
        	$for->setFiliaireRecherche = $Row;
        if($Key == 12)
        	$for->setNEtudeRecherche = $Row;
        if($Key == 13)
        	$for->setCommentaire = $Row;
        if($Key == 14)
        	$for->setAdresse = $Row;
        if($Key == 15)
        	$for->setCp = $Row;
        if($Key == 16)
        	$for->setVille = $Row;
	}
}
