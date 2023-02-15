<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require "vendor/autoload.php";
$isDevMode = true;

$config = Setup::createAnnotationMetadataConfiguration(array("../"), $isDevMode);

$connection = array(
    "dbname" => "mvc",
    "user" => "root",
    "password" => "",
    "host" => "127.0.0.1",
    "driver" => "pdo_mysql"
);
$entityManager = EntityManager::create($connection,$config);