<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\TypeForum;
use App\Entity\ParticipationForum;

class SearchForumController extends Controller
{
    /**
     * @Route("/search/forum", name="search_forum")
     */
    public function index()
    {
        $forum = $this->loadTypeForum();
        return $this->render('search/search_forum/index.html.twig', array(
            "forum"=>$forum
        ));
    }

    private function loadTypeForum()
    {
        $repository = $this->getDoctrine()->getRepository(TypeForum::class);
        return $repository->findAll();
    }
}
