<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchApprenticeshipController extends Controller
{
    /**
     * @Route("/search/apprenticeship", name="search_apprenticeship")
     */
    public function index()
    {
        return $this->render('search_apprenticeship/index.html.twig', [
            'controller_name' => 'SearchApprenticeshipController',
        ]);
    }
}
