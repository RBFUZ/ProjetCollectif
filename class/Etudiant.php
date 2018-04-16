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
	//private static $_idMax = 0;
	private $_idEnt;
	private $_nomEnt;
	private $_localisationEnt;

	/*private function setId(){
		$this->_idEnt = $_idMax;
		$_idMax++;
	}*/

	public function setEntreprise($pnom, $plieu){
		$this->_nomEnt = $pnom;
		$this->_localisationEnt = $plieu;
		// $this->setId();
	}
	public function setNom($pnom){
		if (!empty($pnom) and strcmp($pnom, "") != 0)
			$this->_nomEnt = $pnom;
	}
	public function setLieu($plieu){
		if (!empty($plieu) and strcmp($plieu, "") != 0)
			$this->_localisationEnt = $plieu;
	}

	public function parler()
	{
	echo 'Je suis l Entreprise '.$this->_nomEnt.' dans la ville '.$this->_localisationEnt." avec l'id".$this->_idEnt.". \n";
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

	private function initEtudiant($pnom, $pprenom, $pspe)
	{
		$this->_nomPer = $pnom;
		$this->_prenomPer = $pprenom;
		$this->_diplomeEtu = $pspe;
	}

	private function setNom($pnom){
		if (!empty($pnom) and strcmp($pnom, "") != 0)
			$this->_nomPer = $pnom;
	}
	private function setPrenom($pprenom){
		if (!empty($pprenom) and strcmp($pprenom, "") != 0)
			$this->_prenomPer = $pprenom;
	}
	private function setSpe($pspe){	
		if (!empty($pspe) and strcmp($pspe, "") != 0)	{
			$this->_diplomeEtu = $pspe;
			$this->_full = true;
		}
	}

	private function parler()
	{
	echo 'Je suis l Etudiant '.$this->_nomPer.' '.$this->_prenomPer.' en specialité '.$this->_diplomeEtu.". \n ";
	$this->_full = false;
	}
	public static function parseApprentissage($etu, $ent, $Key, $Row)
	{
		if($Key == 0)
        	$etu->setNom($Row);
        if($Key == 1)
        	$etu->setPrenom($Row);
        if($Key == 2){
        	$etu->setSpe($Row);
			$etu->parler();
		}
		if($Key == 3)
        	$ent->setNom($Row);
        if($Key == 4){
        	$ent->setLieu($Row);
        	$ent->parler();
        }
	}

}

