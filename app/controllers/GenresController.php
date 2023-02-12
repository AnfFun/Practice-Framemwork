<?php

namespace app\controllers;

use app\core\Controller;

class GenresController extends Controller
{
    public function genrePageAction()
    {
        $this->view->render('Genres list');
    }

}