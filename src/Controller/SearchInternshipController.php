<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchInternshipController extends Controller
{
    /**
     * @Route("/search/internship", name="search_internship")
     */
    public function index()
    {
        return $this->render('search_internship/index.html.twig', [
            'controller_name' => 'SearchInternshipController',
        ]);
    }
}
