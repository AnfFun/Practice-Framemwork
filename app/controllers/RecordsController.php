<?php

namespace app\controllers;

use app\core\Controller;

class RecordsController extends Controller
{
    public function recordsPageAction()
    {
        $this->view->render('Books Records');


    }
}