<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Etablissement;
use App\Entity\ConventionStage;
use App\Entity\Apprentissage;

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

        return $this->render('establishment_detail/index.html.twig', [
            'establishment' => $establishment, 'trainee' => $trainee, 'apprenticeship' => $apprenticeship
        ]);
    }
}
