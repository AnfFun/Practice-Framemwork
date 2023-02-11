<?php
session_start();

require 'app/lib/autoload.php';

use app\core\Router;


$rout = new Router();
$rout->run();
