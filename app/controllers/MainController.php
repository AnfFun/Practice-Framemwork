<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{
    public function homeAction()
    {
        echo '<p style="text-align: center;font-size: 32px">MAIN PAGE</p>';
    }
}