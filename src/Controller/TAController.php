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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class TAController extends Controller
{
    /**
     * @Route("/import/TA", name="import_ta")
     */
    public function importTA(Request $request)
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
        return $this->json(array('status' => 200));
    }

    private function parserTAData($TAs, $date)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $date_TA = date_create_from_format("Y",$date);

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
                   // var_dump($dep);

//                    if (empty($rep)) {
//                        $rep = new Departement();
//                        $rep->setLibelleDepartement($d);
//                        $entityManager->persist($rep);
//                        $entityManager->flush();
//                        //$iddepartement = $dep->getId();
//                    }
//                    else
//                        $iddepartement = intval($rep[0]);

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
//                    else
//                        $identerprise = intval($rep[0]);


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
                    $pv_temp = $rep_vp->findOneBy(["partieVersante"=>$last_partie_versante,"idDepartement"=>$dep,"idEntreprise"=>$ent]);
//                    var_dump($partie_versante);
//                    var_dump($ent);
//                    var_dump($pv_temp);
                    if($pv_temp==NULL){
                        $entityManager->persist($pv);
                        $entityManager->flush();
                    }
                    //var_dump($pv);

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
}

