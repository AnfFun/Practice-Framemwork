<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Db;
class MainController extends Controller
{
    public function homeAction()
    {
        $db = new Db();
        $this->view->render('Home');
    }
}
