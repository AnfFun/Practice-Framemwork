<?php

namespace App\core;

use App\core\View;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
abstract class Controller
{
    public $route;
    public $view;

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
    }
}