<?php
/**
 * XLS parsing uses php-excel-reader from http://code.google.com/p/php-excel-reader/
 */
require_once("class/departement.php");
require_once("class/Entreprise.php");
require_once("class/verse_taxe_apprentissage.php");
header('Content-Type: text/plain');

$Entreprises = array();
$VerseTA = array();
$Departements = array();

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

    foreach ($Sheets as $Index => $Name) //Pour chaque feuille (ici normalement pas besoin car une unique feuille de données)
    {
        $Spreadsheet -> ChangeSheet($Index);
        $Head = null; //Servira à stocker l'entête
        $lastPartieVersante = null; //Dans le cas de cellules fusionnées

        foreach ($Spreadsheet as $Key => $Rows)//Pour chaque ligne
        {
            if($Head == null)
                $Head = $Rows; //Première ligne : on récupère l'en-tête
            else {
                //print_r($Rows);
                if (!is_null($Rows) and strcmp($Rows[1], "") != 0) {

                    //RECUPERATION DE L'ENTREPRISE
                    $Entreprise = new Entreprise($Rows["1"], $Rows["2"], null, null, null);
                    //Ici il faut tester si l'entreprise est déjà dans la bdd, sinon il faut l'ajouter
                    array_push($Entreprises, $Entreprise);

                    //RECUPERATION DES DEPARTEMENTS
                    foreach (range(4, 10) as $i) {
                        if (strcmp($Rows[trim($i)], "") != 0) {
                            //RECUPERATION DES DEPARTEMENTS
                            $departement = new Departement($Head[$i]);
                            //Ici il faut tester si le département est déjà dans la bdd, sinon il faut l'ajouter
                            array_push($Departements, $departement);

                            //RECUPERATION DE LA TAXE
                            if(strcmp($Rows["0"], "") == 0)
                                $verseTA = new verse_taxe_apprentissage($Rows[$i], $lastPartieVersante, $departement, $Entreprise);
                            else{
                                $verseTA = new verse_taxe_apprentissage($Rows[$i], $Rows[$i], $departement, $Entreprise);
                                $lastPartieVersante = $Rows["0"];
                            }
                            //Ici il faut tester si la taxe est déjà dans la bdd, sinon il faut l'ajouter
                            array_push($VerseTA, $verseTA);
                        }
                    }

                } else {
                    var_dump("ERREUR LECTURE LIGNE | ");
                    print_r($Rows);
                }
            }
        }

        echo "Ont été détecté : ".sizeof($Entreprises)." Entreprises, ".sizeof($Departements)." Départements et ".sizeof($VerseTA)." Taxes d'apprentissages \n";
        //Affichage des entreprises
        if (PHP_OS == 'WINNT') {
            echo 'Afficher les Entreprises ? (y/n)';
            $line = stream_get_line(STDIN, 1024, PHP_EOL);
        }
        else
            $line = readline("Afficher les Entreprises ? (y/n)");
        if(strcmp($line, "y") == 0 || strcmp($line, "Y") == 0){
            foreach ($Entreprises as $Entreprise)
                $Entreprise->afficher();
        }
        //Affichage des entreprises
        if (PHP_OS == 'WINNT') {
            echo 'Afficher les Taxes ? (y/n)';
            $line = stream_get_line(STDIN, 1024, PHP_EOL);
        }
        else
            $line = readline("Afficher les Taxes ? (y/n)");
        if(strcmp($line, "y") == 0 || strcmp($line, "Y") == 0){
            foreach ($VerseTA as $TA)
                $TA->afficher();
        }
        //Affichage des départements
        if (PHP_OS == 'WINNT') {
            echo 'Afficher les département ? (y/n)';
            $line = stream_get_line(STDIN, 1024, PHP_EOL);
        }
        else
            $line = readline("Afficher les Départements ? (y/n)");
        if(strcmp($line, "y") == 0 || strcmp($line, "Y") == 0){
            foreach ($Departements as $departement)
                $departement->afficher();
        }
    }
}
catch (Exception $E)
{
    echo $E -> getMessage();
}

?>
