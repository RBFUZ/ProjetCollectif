<?php
/**
 * Created by PhpStorm.
 * User: PENGHanyuan
 * Date: 5/15/18
 * Time: 18:03
 */

namespace App\Service;


class SaveService
{
    public function saveDatabase()
    {
        $base = 'db_rel_ent_pol_tours';
        $user = 'root';
        $pass = 'phy8955743';
        $host = '127.0.0.1';
        $dumppath ="/usr/local/Cellar/mysql/5.7.21/bin/mysqldump"; // Mon chemin vers mysqldump en local, à adapter sur le server
        $actualdate = date("d-m-y_H-m");
        $save_name = "../Backup/dump_".$base.$actualdate.'.sql';
        $cmd_mysqldump = $dumppath." --routines=true --host=".$host." --user=".$user." --password=".$pass." ".$base." > ".$save_name;
        return system($cmd_mysqldump);

        // exec("mysqldump db_rel_ent_pol_tours > dump".$actualdate.".sql");

    }
}