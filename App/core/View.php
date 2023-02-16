<?php

namespace App\core;

class View
{
    public $path;
    public $route;
    public $layout = 'default';


    public function __construct($route)
    {

        $this->route = $route;
        $this->path = $this->route['controller'] . '/' . $this->route['action'];
    }

    public function render($title, $vars = [])
    {
        if (file_exists('App/views/' . $this->path . '.php')) {
            ob_start();
            require 'App/views/' . $this->path . '.php';
            $content = ob_get_clean();
            require 'App/views/Layouts/' . $this->layout . '.php';
        }else{
            echo $this->path . "is not exist";
        }
    }

}