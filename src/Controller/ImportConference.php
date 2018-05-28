<?php
/**
 * Created by PhpStorm.
 * User: thiba
 * Date: 13/05/2018
 * Time: 15:57
 **/
namespace App\Controller;

use App\Entity\Conference;
use App\Entity\ContactEtablissement;
use App\Entity\Departement;
use App\Entity\Entreprise;
use App\Entity\Etablissement;
use App\Entity\Personne;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class ImportConference extends Controller
{
    /**
     * @Route("/import/conference", name="import_conference")
     */
    public function importTA(Request $request)
    {
        //get data
        $data = $request->request->get("data");
        // get type
        $type = $request->request->get("type");
        $date_TA = $request->request->get("date_taxe");

        // convert to json
        $json_data = json_decode($data, true);

        if ($type == "Conference") {
            $this->parserTAData($json_data, $date_TA);
        }

        // use like this
        //$json_data[0]; //get the first object
        //var_dump($json_data[9]["ENTREPRISE"]);//obtenir l'entreprise de la neuvième partie versante
        /**
         * structure of data
         * [
         * {
         * ["Nom intervenant"]=> ""
         * ["Fonction" (unused)]=> ""
         * ["Etablissement"]=> ""
         * ["Sujet"]=> ""
         * ["Date"]=> ""
         * ["Commentaire" (unused)] => ""
         * },
         * ...
         * ]
         */
        // return excute status, if succeed, return 200, else return 500
        return $this->json(array('status' => 200));
    }

    private function parserTAData($TAs)
    {
        $entityManager = $this->getDoctrine()->getManager();

        foreach ($TAs as $data) {
            $etablissement = $this->getValue($data, "Etablissement");
            $nomsIntervevants = $this->getValue($data, "Nom intervenant");
            $sujet = $this->getValue($data, "Sujet conférence");
            $date = $this->getValue($data, "Date");

            //Get the enterprise
            $rep_ent = $this->getDoctrine()->getRepository(Etablissement::class);
            $ent = $rep_ent->findEtablissementeByName($etablissement);
            if (empty($ent)) {
                $ent = new Etablissement();
                $ent->setNomEtablissement($etablissement);
                $entityManager->persist($ent);
                $entityManager->flush();
            }

            $conference = new Conference();
            $conference->setIdEtablissement($ent);

//            var_dump($date);
            if($date != ""){
                $date = str_replace("/", "-", trim($date));
                $date = strtotime($date);
                $date = date_create_from_format("d-m-Y", date('d-m-Y', $date));
                $conference->setDateConference($date);
            }
            else{
                $conference->setDateConference(null);
            }

            if ($sujet != "")
                $conference->setSujetConference($sujet);
            $conference->setAnnulee(false);
            if($this->getValue($data,"Commentaire")=="Annulé"){
                $conference->setAnnulee(true);
            }

            $nomsIntervenants = $this->getNomsPrenoms($nomsIntervevants);

            foreach ($nomsIntervenants as $nomIntervevant) {
                //Get the Person
                $rep_per = $this->getDoctrine()->getRepository(Personne::class);
                if(count($nomIntervevant)==2){
                    $per = $rep_per->findPersonByName($nomIntervevant[1], null);
                }
                else{
                    $per = $rep_per->findPersonByName($nomIntervevant[0], null);
                }

                if (empty($per)) {
                    $per = new Personne();
                    if (count($nomIntervevant) == 2) {
                        $per->setPrenom($nomIntervevant[0]);
                        $per->setNom($nomIntervevant[1]);
                    } else
                        $per->setNom($nomIntervevant[0]);
                    $entityManager->persist($per);
                    $entityManager->flush();
                }
                //Get contact from personne
                //CONTACT ETABLISSEMENT DEPOSITORY A CREER ?!
                $rep_con = $this->getDoctrine()->getRepository(ContactEtablissement::class);
                $con = $rep_con->findContactByPersonne($per->getId());
                if (empty($con)) {
                    $con = new ContactEtablissement();
                    $con->setIdPersonne($per);
                    $con->setId((int)($rep_con->findMaxId()) + 1);
                    $entityManager->persist($con);
                    $entityManager->flush();
                }

//                $participe_conference  = new ParticipeConference();
                // $participe_conference
                //->setId_conference($conference->getId());
//                $participe_conference->setId_contact($con->getId());
                $conference->addIdContactEtablissement($con);
            }

            $entityManager->persist($conference);
            $entityManager->flush();
        }
    }

    private function getValue($data, $key)
    {
        try {
            $value = $data[$key];
        } catch (\Exception $exc) {
            $value = "";
        }
        return $value;
    }

//parse nom prenoms, return a table of table, ex : [[nom1, prenom1], [nom2, prenom2],...]
    private function getNomsPrenoms($data)
    {
        $finalParse = array();
        $nomsprenoms = explode(",", $data);

        foreach ($nomsprenoms as $nomprenom) {
            $temp = explode(" ", trim($nomprenom));
//            var_dump($temp);
//            if (($key = array_search("", $temp)) !== false) {
//                unset($temp[$key]);
//            }
//            var_dump($finalParse);
            array_push($finalParse, $temp);
        }
        return $finalParse;
    }
}

