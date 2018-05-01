<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\TypeForum;
use App\Entity\ParticipationForum;
use App\Entity\Forum;

class SearchForumController extends Controller
{
    /**
     * @Route("/search_forum", name="search_forum")
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

    /**
     * @Route("/search_forum_custom", name="search_forum_custom")
     */
    public function loadEtablishment(Request $request)
    {
        $nom = $request->request->get("nom_forum"); // get parametter

        $repository_forum = $this->getDoctrine()->getRepository(ParticipationForum::class);
        $forum = $repository_forum->findEtablissementByForum($nom);
        return $this->json(array('data' => $forum));
    }

    /**
     * @Route("/search_forum_year", name="search_forum_year")
     */
    public function getOldestForum(Request $request)
    {
        $nom = $request->request->get("libelleTypeForum"); // get parametter

        $repository_forum = $this->getDoctrine()->getRepository(Forum::class);
        $data = $repository_forum->getOldestForum($nom);

        if ($data[0]["date"] == null) {
            $data = null;
        } else {
            $data = strtok($data[0]["date"], '-');
        }

        return $this->json(array('data' => $data));
    }
}
