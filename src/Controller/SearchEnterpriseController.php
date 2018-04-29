<?php

namespace App\Controller;

use App\Entity\ConventionStage;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Ville;
use App\Entity\Entreprise;
use App\Entity\Etablissement;

class SearchEnterpriseController extends Controller
{
    private function loadEnterprise()
    {
        $repository = $this->getDoctrine()->getRepository(Entreprise::class);
        return $repository->findAll();
    }
    private function loadCity()
    {
        $repository = $this->getDoctrine()->getRepository(Ville::class);
        return $repository->findAll();
    }
    /**
     * @Route("/search", name="search")
     */
    public function index()
    {
        $enterprise = $this->loadEnterprise();
        return $this->render('search/search_enterprise/index.html.twig', array(
            "enterprise"=>$enterprise
        ));
    }

    /**
     * @Route("/search_enterprise", name="search_enterprise")
     */
    public function searchEnterprise(Request $request)
    {
        $data = array();
        $nom = $request->request->get("nom_enterprise"); // get parametter

        $repository_etab = $this->getDoctrine()->getRepository(Etablissement::class);
        $etablissement = $repository_etab->findEtablissementByEnterpriseName($nom);

        $repository_conv = $this->getDoctrine()->getRepository(ConventionStage::class);

        foreach ($etablissement as $etab)
        {
            $result = array();
            // find stage.
            $convention = $repository_conv->findTraineeByEstablishment($etab->getId());

            //make one json object
            $result["id"]  = $etab->getId();
            $result["nomEtablissement"] = $etab->getNomEtablissement();
            $result["numSiret"] = $etab->getNumSiret();
            $result["ville"] = $etab->getIdAdresse()->getIdVille()->getNomVille();
            $result["nbStages"] = count($convention);

            // requetes a faire
            $result["nbApprenti"] = 0;
            $result["vaca"] = 0;
            $result["nbConferencier"] = 0;
            $result["taxNow"] = 0;
            $result["tax4Years"] = 0;
            //
            
            // add into data
            $data[] = $result;

        }

        return $this->json(array('data' => $data));
    }
}
