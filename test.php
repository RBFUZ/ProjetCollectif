<?php
/**
 * XLS parsing uses php-excel-reader from http://code.google.com/p/php-excel-reader/
 */
	// require_once("class/Etudiant.php");
	// require_once("class/BilanDII.php");
	// require_once("class/contactEntreprise.php");
	require_once("class/forum.php");
	header('Content-Type: text/plain');

	$etu = new Etudiant;
	//$etu->initEtudiant("thibault", "DENIS", "DI");
	//$etu->parler();

	$ent = new Entreprise;
	// $ent->setEntreprise("ATOS", "TOURS");
	// $ent->parler();

	 //$con = new Contact;

	 //$ren = new Rencontre;

	if (isset($argv[1]))
	{
		$Filepath = $argv[1];
	}
	elseif (isset($_GET['File']))
	{
		$Filepath = $_GET['File'];
	}
	else
	{
		if (php_sapi_name() == 'cli')
		{
			echo 'Please specify filename as the first argument'.PHP_EOL;
		}
		else
		{
			echo 'Please specify filename as a HTTP GET parameter "File", e.g., "/test.php?File=test.xlsx"';
		}
		exit;
	}

	// Excel reader from http://code.google.com/p/php-excel-reader/	
	require('php-excel-reader/excel_reader2.php');
	require('SpreadsheetReader.php');

	try
	{
		$Spreadsheet = new SpreadsheetReader($Filepath);

		$Sheets = $Spreadsheet -> Sheets();

		echo '---------------------------------'.PHP_EOL;
		echo 'Spreadsheets:'.PHP_EOL;
		print_r($Sheets);
		echo '---------------------------------'.PHP_EOL;

		foreach ($Sheets as $Index => $Name)
		{
			echo '---------------------------------'.PHP_EOL;
			echo '*** Sheet '.$Name.' ***'.PHP_EOL;
			echo '---------------------------------'.PHP_EOL;

			$Spreadsheet -> ChangeSheet($Index);

			foreach ($Spreadsheet as $Key => $Rows)
			{
				if (!is_null($Rows) )
				{
                    foreach ($Rows as $Key => $Row){
                        if (!empty($Row) and strcmp($Row, "") != 0){
                        	/**if($Key <= $PastKey)
                        		echo "\n";

                            echo $Key . " => " .$Row."\t\t";*/

                            // LES PARSERS FONCTIONNENT AVEC LES BONS FICHIERS

	                      	// Etudiant::parseApprentissage($etu, $ent, $Key, $Row); // POUR LES APPRENTIS
	                      	Etudiant::parseDII($etu, $ent, $Key, $Row); // POUR LES DII
	                      	//Rencontre::parseContact($con, $ren, $Key, $Row); // POUR LES CONTACTS
	                      	//echo "COUCOU";
                            $PastKey = $Key;

                        }
                    }
				}
				else
				{
					var_dump($Rows);
				}
			}
			echo '---------------------------------'.PHP_EOL;
			echo '*** End of sheet '.$Name.' ***'.PHP_EOL;
			echo '---------------------------------'.PHP_EOL;
		}

	}
	catch (Exception $E)
	{
		echo $E -> getMessage();
	}

?>
