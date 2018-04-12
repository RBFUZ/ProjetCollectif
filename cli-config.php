<?php
/**
 * Created by PhpStorm.
 * User: PENGHanyuan
 * Date: 4/12/18
 * Time: 11:15
 */

require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);