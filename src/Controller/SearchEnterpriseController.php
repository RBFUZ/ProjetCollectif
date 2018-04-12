<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Entreprise;
use App\Entity\Etablissement;
use App\Entity\Ville;

class SearchEnterpriseController extends Controller
{
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
        $cities = $this->loadCity();
        return $this->render('search/search_enterprise/index.html.twig', array(
            "cities"=>$cities
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

        // search entreprise
        $repository_entr = $this->getDoctrine()->getRepository(Entreprise::class);
        // search adresse

        if($nom != ""){
            $entreprise = $repository_entr->findOneBy(['nomentreprise' => $nom]);

            // search etablissement
            $repository_etab = $this->getDoctrine()->getRepository(Etablissement::class);
            if($entreprise!=null) {
                $etablissement = $repository_etab->findBy(
                    ['identreprise' => $entreprise->getId()]
                );

                // search by ville if not null
                if ($id_ville != "")
                {

                }
            }

        }

        return $this->json(array('data' => $etablissement));
    }
}
