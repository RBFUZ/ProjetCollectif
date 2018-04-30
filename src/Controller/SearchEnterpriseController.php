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
        $etablissement = $repository_etab->findEtablissementByEnterpriseName($nom);

        $repository_conv = $this->getDoctrine()->getRepository(ConventionStage::class);
        $repository_apprenti = $this->getDoctrine()->getRepository(Apprentissage::class);
        $repository_conf = $this->getDoctrine()->getRepository(Conference::class);
        $repository_vaca = $this->getDoctrine()->getRepository(EffectueVacation::class);
        $repository_taxe = $this->getDoctrine()->getRepository(VerseTaxeApprentissage::class);

        foreach ($etablissement as $etab) {
            $result = array();
            // find stage.
            $convention = $repository_conv->findTraineeByEstablishment($etab->getId());

            //make one json object
            $result["id"]  = $etab->getId();
            $result["nomEtablissement"] = $etab->getNomEtablissement();
            $result["numSiret"] = $etab->getNumSiret();
            $result["ville"] = $etab->getIdAdresse()->getIdVille()->getNomVille();
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
            $count_taxe_one_year = 0;//$repository_taxe->countTaxeEachYear($etab->getId(), date("Y"));
            $result["taxNow"] = $count_taxe_one_year;
            $result["tax4Years"] = 0;
            //


            // add into data
            $data[] = $result;
        }

        return $this->json(array('data' => $data));
    }
}
