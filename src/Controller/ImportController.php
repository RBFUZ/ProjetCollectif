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
        $this->saveDatabase();
        return $this->render('import/index.html.twig', array());
    }

    public function saveDatabase()
    {
        $base = 'db_rel_ent_pol_tours';
        $user = 'root';
        $pass = '';
        $host = '127.0.0.1';
        $dumppath ="D:\wamp64\bin\mysql\mysql5.7.19\bin\mysqldump"; // Mon chemin vers mysqldump en local, à adapter sur le server
        $actualdate = date("d-m-y_H-m");
        $save_name = "dump_".$base.$actualdate.'.sql';
        $cmd_mysqldump = $dumppath." --host=".$host." --user=".$user." --password=".$pass." ".$base." > ".$save_name;
        system($cmd_mysqldump);

        //exec("mysqldump db_rel_ent_pol_tours > dump".$actualdate.".sql");

    }
}
