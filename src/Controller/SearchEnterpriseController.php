<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Etablissement;

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
        $nom = $request->request->get("nom_etablissement");
        $repository = $this->getDoctrine()->getRepository(Etablissement::class);
        $etablissement = array();
        if($nom != ""){
            $etablissement = $repository->findBy(['nometablissement' => $nom]);
        }

        return $this->json(array('data' => $etablissement));
    }
}
