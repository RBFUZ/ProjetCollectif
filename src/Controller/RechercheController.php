<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Entreprise;

class RechercheController extends Controller
{
    /**
     * @Route("/recherche", name="recherche")
     */
    public function index()
    {
        return $this->render('recherche/index.html.twig', array());
    }

    /**
     * @Route("/recherche_entreprise", name="recherche_entreprise")
     */
    public function rechercheEntreprise(Request $request)
    {
        $nom = $request->request->get("nom_entreprise");
        $repository = $this->getDoctrine()->getRepository(Entreprise::class);
        $entreprise = $repository->findBy(['nomentreprise' => $nom]);

        return $this->json(array('data' => $entreprise));
    }
}
