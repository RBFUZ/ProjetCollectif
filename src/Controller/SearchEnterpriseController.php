<?php

namespace App\Controller;

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
        $etablissement = array();

        // get parametter
        $nom = $request->request->get("nom_enterprise");
        $id_ville = $request->request->get("id_ville");


        // by name
        if($nom != "" &&$id_ville==""){

            $repository_etab = $this->getDoctrine()->getRepository(Etablissement::class);
            $etablissement = $repository_etab->findEtablissementByEnterpriseName($nom);
        }

        // by name and city
        if($nom != "" &&$id_ville!=""){

            $repository_etab = $this->getDoctrine()->getRepository(Etablissement::class);
            $etablissement = $repository_etab->findEtablissementByEnterpriseNameAndCity($nom,$id_ville);
        }

        // by city
        if($nom == "" &&$id_ville!=""){

            $repository_etab = $this->getDoctrine()->getRepository(Etablissement::class);
            $etablissement = $repository_etab->findEtablissementByCity($id_ville);
        }
        return $this->json(array('data' => $etablissement));
    }
}
