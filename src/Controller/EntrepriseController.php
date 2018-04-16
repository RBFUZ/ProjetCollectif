<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Entreprise;

class EntrepriseController extends Controller
{
    /**
     * @Route("/entreprise", name="entreprise")
     */
    public function index()
    {

	/*$entityManager = $this->getDoctrine()->getManager();

        $entreprise = new Entreprise();
        $entreprise->setNom('CGI');
        $entreprise->setSIRET('12569774MLKH56T');
        $entreprise->setAdresse('10 rue du chemin vert');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($entreprise);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();*/


        return $this->render('entreprise/index.html.twig', [
            'controller_name' => 'EntrepriseController',        ]);

	
    }
}
