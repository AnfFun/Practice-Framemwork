<?php

namespace App\controllers;

use App\core\Controller;
use UserRepository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class VisitorsController extends Controller
{
    public function visitorsPageAction()
    {
        $this->view->render('Visitors List');


    }


}