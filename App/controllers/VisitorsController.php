<?php

namespace App\controllers;

use App\core\Controller;
use App\src\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManager as em;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\OptimisticLockException;

class VisitorsController extends Controller
{
    public function visitorsPageAction()

    {
        $this->view->render('Visitors List');


    }
    public function addData(EntityManagerInterface $entityManager): void
    {

        $user = new User();
        $user->setName('Max');
        $entityManager->persist($user);
        $entityManager->flush();
    }
}