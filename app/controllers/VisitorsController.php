<?php

namespace app\controllers;

use app\core\Controller;

class VisitorsController extends Controller
{
    public function visitorsPageAction()
    {
        $this->view->render('Visitors List');



    }
}