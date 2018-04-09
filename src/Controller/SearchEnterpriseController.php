<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Entreprise;

class SearchEnterpriseController extends Controller
{
    /**
     * @Route("/search", name="search")
     */
    public function index()
    {
        return $this->render('search/search_enterprise/index.html.twig', array());
    }

    /**
     * @Route("/search_enterprise", name="search_enterprise")
     */
    public function searchEnterprise(Request $request)
    {
        $nom = $request->request->get("nom_entreprise");
        $repository = $this->getDoctrine()->getRepository(Entreprise::class);
        $entreprise = array();
        if($nom != ""){
            $entreprise = $repository->findBy(['nomentreprise' => $nom]);
        }

        return $this->json(array('data' => $entreprise));
    }
}
