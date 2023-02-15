<?php

namespace App\controllers;

use App\core\Controller;

class GenresController extends Controller
{
    public function genrePageAction()
    {
        $this->view->render('Genres list');
    }

}