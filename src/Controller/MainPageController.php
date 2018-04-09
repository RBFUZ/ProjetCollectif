<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MainPageController extends Controller
{
	/**
     * @Route("/index", name="index")
     */
    public function index()
    {
        	$user = "User / Admin";
            return $this->render('index/index.html.twig', array(
		'user' => $user,
		));
    }
}
