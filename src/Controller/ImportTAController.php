<?php
/**
 * Created by PhpStorm.
 * User: thiba
 * Date: 13/05/2018
 * Time: 15:57
 **/
namespace App\Controller;

use App\Entity\Departement;
use App\Entity\Entreprise;
use App\Entity\VerseTaxeApprentissage;
use App\Entity\Etablissement;
use App\Entity\Adresse;
use App\Entity\Ville;
use App\Entity\Pays;
use App\Service\SaveService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class ImportTAController extends Controller
{
    /**
     * @Route("/import/TA", name="import_ta")
     */
    public function importTA(Request $request,SaveService $saveService)
    {
        //get data
        $data = $request->request->get("data");
        // get type
        $type = $request->request->get("type");
        $date_TA = $request->request->get("date_taxe");

//        if($date_TA == "")
//        {
//            $date_TA = date("Y");
//        }

        // convert to json
        $json_data = json_decode($data,true);

        if($type=="Taxe")
        {
            $this->parserTAData($json_data, $date_TA);
        }

        // use like this
        //$json_data[0]; //get the first object
        //var_dump($json_data[9]["ENTREPRISE"]);//obtenir l'entreprise de la neuvième partie versante
        /**
         * structure of data
         * [
        {
        ["PARTIE VERSANTE"] => ""
        ["ENTREPRISE"]=> ""
        ["STATUT"]=> ""
        ["MONTANT"]=> ""
        ["ACO"]=> ""
        ["PeiP"]=> ""
        ["DAE"]=> ""
        ["DI"]=> ""
        ["DII"]=> ""
        ["DEE"]=> ""
        ["DMS"]=> ""
        },
        ...
        ]
         */
        // return excute status, if succeed, return 200, else return 500
        $saveService->saveDatabase();
        return $this->json(array('status' => 200));
    }

    private function parserTAData($TAs, $date)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $date_TA = (int)$date;

        foreach($TAs as $data)
        {

            $partie_versante = $this->getValue($data,"PARTIE VERSANTE");
            if($partie_versante == "FRAIS DIVERS")
                break;
            $entreprise = $this->getValue($data, "ENTREPRISE");
            $status = $this->getValue($data, "STATUT");
            $depts = ["ACO", "PeiP", "DAE", "DI", "DII", "DEE", "DMS"];

            foreach ($depts as $d){
                if($this->getValue($data, $d) != "") {

                    //Get the Department
                    $rep_dep = $this->getDoctrine()->getRepository(Departement::class);
                    $dep = $rep_dep->getDepByName($d);
                    //var_dump($d);

                    //Get the enterprise
                    $rep_ent = $this->getDoctrine()->getRepository(Entreprise::class);
                    $ent = $rep_ent->findEnterpriseByName($entreprise);
                    if (empty($ent)) {
                        $ent = new Entreprise();
                        $ent->setNomEntreprise($entreprise);
                        $ent->setStatutJuridique($status);
                        $entityManager->persist($ent);
                        $entityManager->flush();
                       // $identerprise = $e->getId();
                    }

                    //check etablissement
                    $etablissement = $this->checkEtablissement($entreprise);

                    if ($etablissement == NULL) {
                        //create etablissement
                        $address_string = "";
                        $city = "";
                        $cp = "";
                        $country = "France";
                        $address_etablissement = $this->makeAddress($address_string,$city,$cp,$country);
                        $etablissement = $this->makeEtablissement($entreprise,$ent,$address_etablissement);
                    }

                    if ($partie_versante != "")
                        $last_partie_versante = $partie_versante;

                    //Create the taxe
                    $pv = new VerseTaxeApprentissage();
                    $pv->setMontantTaxe(floatval($this->getValue($data, $d)));
                    $pv->setPartieVersante($last_partie_versante);

                    //$rep_dep = $this->getDoctrine()->getRepository(Departement::class);
                    $pv->setIdDepartement($dep);
                    //$rep_ent = $this->getDoctrine()->getRepository(Entreprise::class);
                    $pv->setIdEntreprise($ent);
                    $pv->setAnneeVersement($date_TA);

                    $rep_vp = $this->getDoctrine()->getRepository(VerseTaxeApprentissage::class);

                    $pv_temp = $rep_vp->findOneBy(["anneeVersement"=>$date_TA,"partieVersante"=>$last_partie_versante,"idDepartement"=>$dep,"idEntreprise"=>$ent]);
//                    var_dump($partie_versante);
//                    var_dump($ent);
//                    var_dump($pv_temp);
                    if($pv_temp==NULL){
                        $entityManager->persist($pv);
                        $entityManager->flush();
                    }


                }
            }
        }
    }

    private function getValue($data,$key)
    {
        try
        {
            $value = $data[$key];
        }
        catch (\Exception $exc)
        {
            $value = "";
        }
        return $value;
    }

    /**
     * @param $nom_etablissement
     * @return Etablissement
     */
    private function checkEtablissement($nom_etablissement):?Etablissement
    {
        // check etablissement exist or not
        $rep_etab = $this->getDoctrine()->getRepository(Etablissement::class);
        $nom_etablissement = strtoupper(trim($nom_etablissement));
        $etab = $rep_etab->findOneBy(["nomEtablissement"=>$nom_etablissement]);
        return $etab;
    }

    /**
     * @param $address
     * @param $nom_etablissement
     * @param $enterprise
     * @param $type_struc
     * @param $effectif
     * @param $code_naf
     * @return Etablissement
     */
    private function makeEtablissement($nom_etablissement,$enterprise, $address):?Etablissement
    {
        $entityManager = $this->getDoctrine()->getManager();
        $etab = new Etablissement();
        $etab->setNomEtablissement($nom_etablissement);
        $etab->setIdEntreprise($enterprise);
        $etab->setIdAdresse($address);
        $entityManager->persist($etab);
        $entityManager->flush();
        return $etab;
    }

    /**
     * @param $address
     * @param $city_name
     * @param $cp
     * @param $country
     * @param null $comp
     * @return Adresse
     */
    public function makeAddress($address,$city_name,$cp,$country,$comp = NULL):?Adresse
    {
        $entityManager = $this->getDoctrine()->getManager();
        $add = new Adresse();
        $add->setAdresse($address);
        $add->setCodePostal($cp);

        $rep_city = $this->getDoctrine()->getRepository(Ville::class);
        //var_dump($city_name);
        $city = $rep_city->findCityByName($city_name,$cp);
        if($city==NULL)
        {
            // create city
            $city = new Ville();
            $city->setDepartement(NULL);
            $rep_country = $this->getDoctrine()->getRepository(Pays::class);
            $city->setIdPays($rep_country->findCountryByName($country)); // in France by default
            $city->setNomVille($city_name);
            $entityManager->persist($city);
            $entityManager->flush();
        }

        $add->setIdVille($city);
        $entityManager->persist($add);
        $entityManager->flush();
        return $add;
    }

}

