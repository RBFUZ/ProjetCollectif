<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DownloadFileController extends Controller
{
    /**
     * @Route("/download/file", name="download_file")
     */
    public function index()
    {
        $pdfPath = 'filemodel/Models.zip';
        return $this->file($pdfPath);
    }
}
