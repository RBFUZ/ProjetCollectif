<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/Entity"), $isDevMode, null, null, FALSE);

// or if you prefer XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config"), $isDevMode);
// database configuration parameters
$conn = array(
    'dbname' => 'db_rel_ent_pol_tours',
    'user' => 'root',
    'password' => 'phy8955743',
    'host' => 'localhost',
    'driver' => 'pdo_mysql'
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);