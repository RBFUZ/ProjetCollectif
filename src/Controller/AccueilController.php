<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AccueilController extends Controller
{
	/**
     * @Route("/accueil", name="accueil")
     */
    public function affichage()
    {
        	$user = "User / Admin";
            return $this->render('accueil/index.html.twig', array(
		'user' => $user,
		));
    }
}
