<?php

namespace app\core;

class Router
{
    protected $routs = [];
    protected $params = [];

    public function __construct()
    {
        echo "Я клас роута ";
    }

    public function add()
    {
    }

    public function match()
    {
    }

    public function run()
    {
        echo "start";
    }

}