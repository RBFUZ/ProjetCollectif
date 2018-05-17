<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Conference;

class SearchConventionController extends Controller
{
    /**
     * @Route("/search/convention", name="search_convention")
     */
    public function index()
    {
        $conventions = $this->loadAllConventions();
        return $this->render('search/search_convention/index.html.twig', array(
            "conventions"=>$conventions
        ));
    }

    public function loadAllConventions()
    {
        $repository_conventions = $this->getDoctrine()->getRepository(Conference::class);
        return $repository_conventions->findAll();
    }
}
