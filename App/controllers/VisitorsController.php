<?php

namespace App\controllers;

use App\core\Controller;

class VisitorsController extends Controller
{
    public function visitorsPageAction()
    {
        $this->view->render('Visitors List');



    }
}