<?php

namespace App\controllers;

use App\core\Controller;

class BooksController extends Controller
{
    public function booksPageAction()
    {
        $this->view->render('List of Books');
    }
}