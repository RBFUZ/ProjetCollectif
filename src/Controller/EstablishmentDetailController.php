<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Etablissement;
use App\Entity\ConventionStage;
use App\Entity\Apprentissage;
use App\Entity\Conference;
use Symfony\Component\HttpFoundation\Session\Session;

class EstablishmentDetailController extends Controller
{
    /**
     * @Route("/establishment/detail/{idEstablishment}", name="establishment_detail")
     */
    public function index($idEstablishment)
    {
        $session = new Session();


        $session->set('etabid', $idEstablishment);

        $repository = $this->getDoctrine()->getRepository(Etablissement::class);
        $establishment = $repository->find($idEstablishment);

        $repository_stage = $this->getDoctrine()->getRepository(ConventionStage::class);
        $trainee = $repository_stage->findTraineeByEstablishment($idEstablishment);

        $repository_apprentissage = $this->getDoctrine()->getRepository(Apprentissage::class);
        $apprenticeship = $repository_apprentissage->findAprenticeshipByEstablishment($idEstablishment);

        $repository_convention = $this->getDoctrine()->getRepository(Conference::class);
        $convention = $repository_convention->findConventionByEstablishment($idEstablishment);

        return $this->render('establishment_detail/index.html.twig', [
            'establishment' => $establishment,
            'trainee' => $trainee,
            'apprenticeship' => $apprenticeship,
            'convention' => $convention
        ]);
    }

    /**
     * @Route("/establishment/minStageYear", name="min_stage_year")
     */
    public function getOldestStageYear()
    {
        $session = new Session();
        $idEstablishment = $session->get('etabid');
        $repository_stage = $this->getDoctrine()->getRepository(ConventionStage::class);
        $cov = $repository_stage->findOldestYear($idEstablishment);
        $year = strtok($cov[0]["date"], '-');
        //var_dump($cov);
        return $this->json(array("data"=>$year));
    }


}
