<?php
session_start();

require 'src/lib/autoload.php';

use App\core\Router;


$rout = new Router();
$rout->load();
$rout->run();

