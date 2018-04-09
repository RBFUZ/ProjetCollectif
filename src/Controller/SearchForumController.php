<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchForumController extends Controller
{
    /**
     * @Route("/search/forum", name="search_forum")
     */
    public function index()
    {
        return $this->render('search_forum/index.html.twig', [
            'controller_name' => 'SearchForumController',
        ]);
    }
}
