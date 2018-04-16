<?php
// Nous créons une classe « Personne » et toutes celle qui l'extends.
class Contact{
	private $_InformationCon;
	private $_TypeCon;
	private $_entrepriseCon;

	public function setInformation($pinfo){
		$this->_InformationCon = $this->_InformationCon . $pinfo.';';
	}

	public function resetnformation(){
	 	$this->_InformationCon = "";	
	}

	public function setType($pType){
		$this->_typeCon = $this->_typeCon . $pType.';';
	}

	public function resetType(){
		$this->_typeCon = "";
	}

	public function setEntreprise($pnomE){
		$this->_entrepriseCon = $pnomE;
	}

	public function parler(){
		echo "Je suis un contact de type ".$this->_typeCon." avec comme information ".$this->_InformationCon." de l'entreprise ".$this->_entrepriseCon."\n";
	}
}

class Rencontre{
	private $_dateRen;
	private $_lieuRen;
	private $_telRen;
	private $_sujetRen;
	private $_suiteRen;

	private function parler(){
		echo "Je suis un rendez-vous de type : ";
		if (!empty($_lieuRen) and strcmp($_lieuRen, "") != 0)	
			echo "téléphonique, au numéro : ".$this->_telRen." a la date ".$this->_dateRen." au sujet de : ".$this->_sujetRen."\n";
		else
			echo "face a face, à ".$this->_lieuRen.", a la date ".$this->_dateRen." au sujet de : ".$this->_sujetRen."\n";
	}

	public static function parseContact($con, $ren, $Key, $Row)
	{
		if($Key == 0)
        	$con->setEntreprise($Row);
        if($Key == 1){
        	$con->setInformation($Row);
        	$con->setType("Contact RH");
        	$con->parler();
        }
        if($Key == 2){
        	$con->setInformation($Row);
        	$con->setType("Contact Technique");
        	$con->parler();
        }
		if($Key == 3)
        	$ren->_dateRen = $Row;
        if($Key == 4)
        	$ren->_lieuRen = $Row;
        if($Key == 5)
        	$ren->_dateRen = $ren->_dateRen .';'. $Row;
        if($Key == 6)
        	$ren->_telRen = $Row;

        if($Key == 7)
        	$ren->_sujetRen = $Row;
        if($Key == 8){
        	$ren->_suiteRen = $Row;
        	$ren->parler();
        }

        $con->resetType();
        $con->resetnformation();
        
	}
}
