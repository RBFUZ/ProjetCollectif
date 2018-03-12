<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PopUpController extends Controller
{
    /**
     * @Route("/pop_up", name="pop_up")
     */
    public function index()
    {
        return $this->render('pop_up/index.html.twig', [
            'controller_name' => 'PopUpController',
        ]);
    }
}
