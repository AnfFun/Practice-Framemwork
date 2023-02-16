<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;



function GetEntityManager()
{
    require "vendor/autoload.php";
    $isDevMode = true;
    $proxyDir = null;
    $cache = null;
    $useSimpleAnnotationReader = false;
    $config = Setup::createAnnotationMetadataConfiguration(array("App/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer yaml or XML
// $config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
// $config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
    $conn = [
        'dbname' => 'work',
        'user' => 'root',
        'password' => '',
        'host' => '127.0.0.1',
        'driver' => 'pdo_mysql'
    ];
    $em = EntityManager::create($conn, $config);
    return $em;
}