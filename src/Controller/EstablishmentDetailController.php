<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Etablissement;
class EstablishmentDetailController extends Controller
{
    /**
     * @Route("/establishment/detail/{idEstablishment}", name="establishment_detail")
     */
    public function index($idEstablishment)
    {
        $repository = $this->getDoctrine()->getRepository(Etablissement::class);
        $establishment = $repository->find($idEstablishment);
        return $this->render('establishment_detail/index.html.twig', [
            'establishment' => $establishment,
        ]);
    }

}
