<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ImportController extends Controller
{
    /**
     * @Route("/import", name="import")
     */
    public function index()
    {
        return $this->render('import/index.html.twig', array());
    }
}