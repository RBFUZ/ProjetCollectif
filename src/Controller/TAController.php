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
use App\Entity\Forum;
use App\Entity\VerseTaxeApprentissage;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ImportForumController extends Controller
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

        $date_forum = $request->request->get("date_forum");

        if($date_forum == "")
        {
            $date_forum = date("d-m-Y");
        }

        // convert to json
        $json_data = json_decode($data,true);

        if($type=="Forum")
        {
            $this->parserForumData($json_data,$date_forum);
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

    private function parserForumData($TAs,$date_ta)
    {
        $entityManager = $this->getDoctrine()->getManager();

        // create forum
        $year = date_create_from_format("d-m-Y",$date_ta);
        $name_ta = "TA ".$year->format('Y');

        $rep_forum = $this->getDoctrine()->getRepository(Forum::class);
        $ta = $rep_forum->findTAByName($name_ta);

        foreach($ta as $data)
        {
            $partie_versante = $data["PARTIE VERSANTE"];
            $entreprise = $data["ENTREPRISE"];
            $status = $data["STATUT"];
            $montant = $data["MONTANT"];
            $aco = $data["ACO"];
            $peip = $data["PeiP"];
            $dae = $data["DAE"];
            $di = $data["DI"];
            $dii = $data["DII"];
            $dee = $data["DEE"];
            $dms = $data["DMS"];
            $depts = [$aco, $peip, $dae, $di, $dii, $dee, $dms];

            foreach ($depts as $d){
                if($d != "") {

                    //Get the Department
                    $rep_ent = $this->getDoctrine()->getRepository(Departement::class);
                    $rep = $rep_ent->getIdByName($d);
                    if (empty($rep)) {
                        $dep = new Departement();
                        $dep->setLibelleDepartement($d);
                        $entityManager->persist($dep);
                        $entityManager->flush();
                        $iddepartement = $dep->getId();
                    } else
                        $iddepartement = intval($rep[0]);

                    //Get the enterprise
                    $rep_ent = $this->getDoctrine()->getRepository(Entreprise::class);
                    $ent = $rep_ent->findEntrepriseByName($entreprise);
                    if (empty($ent)) {
                        $e = new Entreprise();
                        $e->setNomEntreprise($entreprise);
                        $e->setStatutJuridique($status);
                        $entityManager->persist($dep);
                        $entityManager->flush();
                        $identerprise = $dep->getId();
                    } else
                        $identerprise = intval($rep[0]);


                    if ($partie_versante != "")
                        $last_partie_versante = $partie_versante;

                    //Create the taxe
                    $pv = new VerseTaxeApprentissage();
                    $pv->setMontantTaxe(floatval($montant));
                    $pv->setPartieVersante($partie_versante);
                    $pv->setIdDepartement($iddepartement);
                    $pv->setIdEntreprise($identerprise);

                    $entityManager->persist($pv);
                    $entityManager->flush();
                }
            }
        }
    }
}

