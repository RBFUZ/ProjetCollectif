<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AccueilController extends Controller
{
    public function affichage()
    {
        
        	$user = "User / Admin";
            return $this->render('accueil.html.twig', array(
		'user' => $user,
		));

        
    }
}
