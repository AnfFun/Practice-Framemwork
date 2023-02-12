<?php

namespace app\core;

class Router
{
    protected $routs = [];
    protected $params = [];

    public function __construct()
    {

    }

    public function load()
    {
        $arr = require 'app/config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
    }

    public function add($route, $param)
    {
        $route = '#^' . $route . '$#';
        $this->routs[$route] = $param;
    }

    public function match()
    {
        $url = trim( $_SERVER['REQUEST_URI'],'/');
        foreach ($this->routs as $route => $params) {
            if (preg_match($route, $url, $matches)){
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function run()
    {
        if ($this->match()){
            $path = 'app\controllers\\' . $this->params['controller'].'Controller';
            if (class_exists($path)){
                $action = $this->params['action']. 'Action';
                if (method_exists($path,$action)){
                    $controller = new $path($this->params);
                    $controller->$action();
                }
                else{
                    echo 'Action not found';
                }
            }
            else{
                echo 'Controller not found ' . $path;
            }
        }
        else{
            echo 'Route mismatched';
        }
    }

}