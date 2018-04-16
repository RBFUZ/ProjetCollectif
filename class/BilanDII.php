<?php
// Nous créons une classe « Personne » et toutes celle qui l'extends.
class Personne{
	private $_idPer;
	private $_nomPer = 'testInit';
	private $_prenomPer;
	private $_mailPer;
	private $_codeSexePer;
	private $_nationalitePer;
}

class Entreprise{
	private $_idEnt;
	private $_PmeGroupe;
	private $_nomEnt;
	private $_villeEnt;
	private $_adresseEnt;
	private $_codePostalEnt;

	public function setId(){
	}

	public function setEntreprise($pnom, $pville, $ppmeGrpe, $padresse, $pCP){
		$this->_nomEnt = $pnom;
		$this->_villeEnt = $plieu;
		$this->_PmeGroupe = $ppmeGrpe;
		$this->_adresseEnt = $padresse;
		$this->_codePostalEnt = $pCP;
		$this->setId();
	}
	public function setNom($pnom){
		if (!empty($pnom) and strcmp($pnom, "") != 0)
			$this->_nomEnt = $pnom;
	}
	public function setVille($pville){
		if (!empty($pville) and strcmp($pville, "") != 0)
			$this->_villeEnt = $pville;
	}
	public function setPmeGroupe($ppmeGrpe){
		if (!empty($ppmeGrpe) and strcmp($ppmeGrpe, "") != 0)
			$this->_PmeGroupe = $ppmeGrpe;
	}
	public function setAdresse($padresse){
		if (!empty($padresse) and strcmp($padresse, "") != 0)
			$this->_adresseEnt = $padresse;
	}
	public function setCp($pCP){
		if (!empty($pCP) and strcmp($pCP, "") != 0)
			$this->_codePostalEnt = $pCP;
	}

	public function parler()
	{
	echo 'Je suis l Entreprise '.$this->_nomEnt.' dans la ville '.$this->_villeEnt." au code postal ".$this->_codePostalEnt.". \n";
	}

}


class Etudiant extends Personne
{
	private $_idEtu;
	private $_numEtu;
	private $_mailEtu;
	private $_anneeEtu;
	private $_diplomeEtu;
	private $_full = false; //temporaire
	private $dateDiplomationEtu;
	// TABLE APPRENTISSAGE
	private $_dureeApp;
	private $_debutApp;
	private $_finApp;
	private $_gratificationApp;

	private function initEtudiant($pnom, $pprenom,$psexe, $pnat, $pDuree)
	{
		$this->_nomPer = $pnom;
		$this->_prenomPer = $pprenom;
		$this->_diplomeEtu = "DII";
		$this->_codeSexePer = $psexe;
		$this->_nationalitePer = $pnat;
		$this->_dureeApp = $pDuree;

	}

	private function setNom($pnom){
		if (!empty($pnom) and strcmp($pnom, "") != 0)
			$this->_nomPer = $pnom;
	}
	private function setPrenom($pprenom){
		if (!empty($pprenom) and strcmp($pprenom, "") != 0)
			$this->_prenomPer = $pprenom;
	}
	private function setSexe($psexe){	
		if (!empty($psexe) and strcmp($psexe, "") != 0)	{
			$this->_codeSexePer = $psexe;
			$this->_full = true;
		}
	}
	private function setNat($pnat){
		if (!empty($pnat) and strcmp($pnat, "") != 0)
			$this->_nationalitePer = $pnat;
	}
	private function setDuree($pDuree){
		if (!empty($pDuree) and strcmp($pDuree, "") != 0)
			$this->_dureeApp = $pDuree;
	}


	private function parler()
	{
	echo 'Je suis l Etudiant '.$this->_nomPer.' '.$this->_prenomPer.' en specialité '.$this->_diplomeEtu." pour une durée de ".$this->_dureeApp.". \n";
	$this->_full = false;
	}

	public static function parseDII($etu, $ent, $Key, $Row)
	{
		if($Key == 0)
        	$ent->setNom($Row);
        if($Key == 1)
        	$ent->setVille($Row);
        if($Key == 2)
        	$ent->setCp($Row);
		if($Key == 3)
        	$ent->setVille($Row);
        if($Key == 5){
        	$ent->setPmeGroupe($Row);
        	$ent->parler();
        }
        if($Key == 6)
        	$etu->setNom($Row);
        if($Key == 7)
        	$etu->setPrenom($Row);
        if($Key == 8)
        	$etu->setSexe($Row);
        if($Key == 9)
        	$etu->setNat($Row);
        if($Key == 10){
        	$etu->setDuree($Row);
        	$etu->parler();
        }
        
	}
}
