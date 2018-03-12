<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ImportationController extends Controller
{
    /**
     * @Route("/importation", name="importation")
     */
    public function index()
    {
        return $this->render('importation/index.html.twig', array());
    }
}
