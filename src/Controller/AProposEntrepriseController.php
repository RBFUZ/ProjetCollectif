<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AProposEntrepriseController extends Controller
{
    /**
     * @Route("aproposentreprise", name="a_propos_entreprise")
     */
    public function index()
    {
        return $this->render('a_propos_entreprise/index.html.twig', array());
    }
}
