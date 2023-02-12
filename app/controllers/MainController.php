<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{
    public function homeAction()
    {
        $this->view->render('Home');
//        echo '<p style="text-align: center;font-size: 32px">MAIN PAGE</p>';
    }
}