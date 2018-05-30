<?php

namespace App\Controller;

use App\Entity\Apprentissage;
use App\Entity\Conference;
use App\Entity\ConventionStage;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Ville;
use App\Entity\Entreprise;
use App\Entity\Etablissement;
use App\Entity\EffectueVacation;
use App\Entity\VerseTaxeApprentissage;

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
        if($nom==""){
            $etablissement = $repository_etab->findAll();
        }
        else{
            $etablissement = $repository_etab->findEtablissementByEnterpriseName($nom);
        }
        $repository_conv = $this->getDoctrine()->getRepository(ConventionStage::class);
        $repository_apprenti = $this->getDoctrine()->getRepository(Apprentissage::class);
        $repository_conf = $this->getDoctrine()->getRepository(Conference::class);
        $repository_vaca = $this->getDoctrine()->getRepository(EffectueVacation::class);
        $repository_taxe = $this->getDoctrine()->getRepository(VerseTaxeApprentissage::class);

        foreach ($etablissement as $etab) {
            if($etab->getNomEtablissement()==""){
                continue;
            }
            $result = array();
            // find stage.
            $convention = $repository_conv->findTraineeByEstablishment($etab->getId());

            //make one json object
            $result["id"]  = $etab->getId();

            $result["nomEtablissement"] = $etab->getNomEtablissement();
            $result["numSiret"] = $etab->getNumSiret();
            if($etab->getIdAdresse()!=null){
                $result["ville"] = $etab->getIdAdresse()->getIdVille()->getNomVille();
            }
            else{
                $result["ville"] = null;
            }
            $result["nbStages"] = count($convention);

            $apptrntissage = $repository_apprenti->findAprenticeshipByEstablishment($etab->getId());
            $result["nbApprenti"] = count($apptrntissage);

            $contact = $repository_vaca->findContactByEtablissementId($etab->getId());
            $result["vaca"] = count($contact);

            $conferences = $repository_conf->findConventionByEstablishment($etab->getId());
            $count = 0;
            foreach ($conferences as $conf) {
                $count+=count($conf->getIdContactEtablissement());
            }
            $result["nbConferencier"] = $count;
            $count_taxe_one_year = $repository_taxe->countTaxeEachYear($etab->getId(), date("Y"));
           // var_dump($count_taxe_one_year[0]["amount"]);
            $result["taxNow"] = (float)$count_taxe_one_year[0]["amount"];
            $fourYears = date('Y', strtotime('-1 year'));
            $tax4years = 0;
            for($i = 0;$i<4;$i++)
            {
                $fourYears = date('Y', strtotime('-'.$i.' year'));
                //var_dump((float)$repository_taxe->countTaxeEachYear($etab->getId(), $fourYears));
                $tax4years = $tax4years + (float)$repository_taxe->countTaxeEachYear($etab->getId(), $fourYears)[0]["amount"];
            }
            $result["tax4Years"] =$tax4years;
            //


            // add into data
            $data[] = $result;
        }

        return $this->json(array('data' => $data));
    }
}
