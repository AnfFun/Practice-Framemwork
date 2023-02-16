<?php

namespace App\controllers;

use App\core\Controller;
class MainController extends Controller
{
    public function homeAction()
    {
        $this->view->render('Home');
    }
}
