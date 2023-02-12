<?php

namespace app\controllers;

use app\core\Controller;

class BooksController extends Controller
{
    public function booksPageAction()
    {
        $this->view->render('List of Books');
    }
}