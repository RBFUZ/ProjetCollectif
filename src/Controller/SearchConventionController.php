<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchConventionController extends Controller
{
    /**
     * @Route("/search/convention", name="search_convention")
     */
    public function index()
    {
        return $this->render('search_convention/index.html.twig', [
            'controller_name' => 'SearchConventionController',
        ]);
    }
}
