<?php

namespace App\Controller;

use App\Entity\Adresse;
use App\Entity\Entreprise;
use App\Entity\Etablissement;
use App\Entity\Forum;
use App\Entity\Pays;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Personne;
use App\Entity\Ville;

class ImportController extends Controller
{
    /**
     * @Route("/import", name="import")
     */
    public function index()
    {
        return $this->render('import/index.html.twig', array());
    }

    /**
     * @Route("/import/data", name="import_data")
     */
    public function importData(Request $request)
    {
        //get data
        $data = $request->request->get("data");
        // get type
        $type = $request->request->get("type");

        $date_forum = $request->request->get("date_forum");
        if($date_forum=="")
        {
            $date_forum = date("Y");
        }

        // convert to json
        $json_data = json_decode($data,true);

        $this->parserForumData($json_data,$date_forum);
        // use like this
        //$json_data[0]; //get the first object
        //var_dump($json_data[9]["Fonction \"carte de visite\""]);//get the name of the first object
        /**
         * structure of data
         * [
            {
            ["NOM"]=> "ALIX"
            ["PRENOM"]=> "Claire"
            ["spe"]=> "DAE"
            ["entreprise"]=> "BATIGERE NORD-EST"
            ["où"]=> "Metz"
            },
            ["NOM"]=> "BLIX"
            ["PRENOM"]=> "TOTO"
            ["spe"]=> "DI"
            ["entreprise"]=> "BALAALA"
            ["où"]=> "TOURS"
            },
            ...
            ]
         */
        // return excute status, if succeed, return 200, else return 500
        return $this->json(array('status' => 200));
    }

    private function parserForumData($forum,$date_forum)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $name_temp = "";
        $address_temp = "";
        $cp_temp = "";
        $city_temp ="";
        foreach($forum as $data)
        {


            try
            {
                $nom_etablissement = $data["Dénomination"];
                $name_temp = $data["Dénomination"];
            }
            catch (\Exception $exc)
            {
                $nom_etablissement = $name_temp;
            }
            $nom_etablissement = trim($nom_etablissement);
            // search for enterprise
            $rep_ent = $this->getDoctrine()->getRepository(Entreprise::class);
            $ent = $rep_ent->findEnterpriseByName($nom_etablissement);
            // if not exist
            if($ent==NULL)
            {
                // create enterprise
                $ent = new Entreprise();
                $ent->setNomEntreprise($nom_etablissement);
                $entityManager->persist($ent);
                $entityManager->flush();
            }
            // create etablissement
            $etab = new Etablissement();
            $etab->setNomEtablissement($nom_etablissement);
            $etab->setIdEntreprise($ent);

            // get address
            $address = "";
            $cp = "";
            $city="";

            try
            {
                $address = $data["Adresse"];
                $address_temp = $data["Adresse"];
                $cp = $data["Code Postal"];
                $cp_temp = $data["Code Postal"];
                $city = $data["Ville"];
                $city_temp = $data["Ville"];

            }
            catch (\Exception $exc)
            {
                $address = $address_temp;

                $cp = $cp_temp;
                $city=$city_temp;
            }
            $address = trim($address);
            $cp = trim($cp);
            $city = trim($city);
            $add = $this->makeAddress($address,$city,$cp);
            /////
            $etab->setIdAdresse($add);
            $entityManager->persist($etab);
            $entityManager->flush();
            ////
            // create forum
            $forum = new Forum();
            $rep_address = $this->getDoctrine()->getRepository(Adresse::class);
            $forum->setIdAdresse($rep_address->find(169));

        }
    }

    private function makeAddress($address,$city_name,$cp,$comp=NULL)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $add = new Adresse();
        $add->setAdresse($address);
        $add->setCodePostal($cp);

        $rep_city = $this->getDoctrine()->getRepository(Ville::class);
        $city = $rep_city->findCityByName($city_name);
        if($city==NULL)
        {
            // create city
            $city = new Ville();
            $city->setDepartement(NULL);
            $rep_country = $this->getDoctrine()->getRepository(Pays::class);
            $city->setIdPays($rep_country->find(75)); // in France by default
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
