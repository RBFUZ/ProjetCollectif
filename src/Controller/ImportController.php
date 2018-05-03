<?php

namespace App\Controller;

use App\Entity\Entreprise;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Personne;
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

        // convert to json
        $json_data = json_decode($data,true);

        // use like this
        //$json_data[0]; //get the first object
        var_dump($json_data[9]["Fonction \"carte de visite\""]);//get the name of the first object
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

    private function parserForumData($forum):int
    {
        foreach($forum as $data)
        {
            try
            {
                $nom_etablissement = $data["Dénomination"];
                $rep_ent = $this->getDoctrine()->getRepository(Entreprise::class);
                $ent = $rep_ent->findEnterpriseByName($nom_etablissement);
            }
            catch (\Exception $exc)
            {
                return 500;
            }
        }

    }
}
