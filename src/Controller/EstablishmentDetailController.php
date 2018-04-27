<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints\DateTime;
use App\Entity\Etablissement;
use App\Entity\ConventionStage;
use App\Entity\Apprentissage;
use App\Entity\Conference;
use App\Entity\TypeForum;
use App\Entity\Forum;

class EstablishmentDetailController extends Controller
{
    /**
     * @Route("/establishment/detail/{idEstablishment}", name="establishment_detail")
     */
    public function index($idEstablishment)
    {
        $repository = $this->getDoctrine()->getRepository(Etablissement::class);
        $establishment = $repository->find($idEstablishment);

        $repository_stage = $this->getDoctrine()->getRepository(ConventionStage::class);
        $trainee = $repository_stage->findTraineeByEstablishment($idEstablishment);

        $repository_apprentissage = $this->getDoctrine()->getRepository(Apprentissage::class);
        $apprenticeship = $repository_apprentissage->findAprenticeshipByEstablishment($idEstablishment);

        $repository_convention = $this->getDoctrine()->getRepository(Conference::class);
        $convention = $repository_convention->findConventionByEstablishment($idEstablishment);

        $repository_type_forum = $this->getDoctrine()->getRepository(TypeForum::class);
        $type_forum = $repository_type_forum->findAll();

        $type_forum = $this->checkIfForumCreateOrNot($type_forum); // // Supprime les types de forum du tableau quand aucun forum de ce type n'a été ajouté
        $years_forum = $this->fillYearForumUntilToday($type_forum); // Remplir les années de la plus ancienne jusqu'a aujourd'hui

        return $this->render('establishment_detail/index.html.twig', [
            'establishment' => $establishment,
            'trainee' => $trainee,
            'apprenticeship' => $apprenticeship,
            'convention' => $convention,
            'type_forum' => $type_forum,
            'forum' => $years_forum
        ]);
    }

    public function checkIfForumCreateOrNot($type_forum): array
    {
        foreach ($type_forum as $key=>$type) {
            $repository_forum = $this->getDoctrine()->getRepository(Forum::class); // Récupération de l'année la plus ancienne (forum)
            $forum = $repository_forum->checkIfForumExist($type->getId());

            if (count($forum) == 0) {
                unset($type_forum[$key]); // Supprime les types de forum du tableau quand aucun forum de ce type n'a été ajouté.
            }
        }
        return $type_forum;
    }

    public function fillYearForumUntilToday($type_forum): array
    {
        $years_array_all_forum = array(); // Contiendra l'ensemble des années pour chacun des types de forum (tableau deux dimensions)

        foreach ($type_forum as $key=>$type) {
            $repository_forum = $this->getDoctrine()->getRepository(Forum::class); // Récupération de l'année la plus ancienne (forum)
            $forum = $repository_forum->getOldestForum($type->getId());

            $oldest_year = date_format($forum[0]['dateDebutForum'], "Y"); // Extraire l'année de la date reçu
            $current_year = date("Y"); // Année courante

            $year_array_one_forum = array();

            for ($i = $oldest_year; $i <= $current_year; $i++) {
                array_push($year_array_one_forum, $i);
            }

            array_push($years_array_all_forum, $year_array_one_forum);
        }
        return $years_array_all_forum;
    }
}
