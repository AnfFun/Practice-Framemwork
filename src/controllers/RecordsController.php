<?php

namespace App\controllers;

use App\core\Controller;

class RecordsController extends Controller
{
    public function recordsPageAction()
    {
        $this->view->render('Books Records');


    }
}