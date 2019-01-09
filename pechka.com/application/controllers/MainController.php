<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;

class MainController extends Controller{

    public function indexAction() {
        $pagination = new Pagination($this->route, $this->model->getCount());
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $this->model->recipesList($this->route)
        ];

        $this->view->render('Главная', $vars);
    }
}
