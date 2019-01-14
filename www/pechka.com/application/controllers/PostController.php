<?php

namespace application\controllers;

use application\core\Controller;

class PostController extends Controller{

    public function viewAction() {
        if (!isset($this->route['id']) || !$this->model->isPostExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        
        $data = $this->model->getRecipes($this->route['id']);
        
        $vars = [
            'data' => $data
        ];

        $this->view->render('Рецепт №'. $data['id'], $vars);
    }

    public function addAction() {
        if (!empty($_POST)) {
            if (!$id = $this->model->addRecipe($_POST)) {
                $this->view->message('Error', $this->model->getError());
            }
            
            $this->view->location('/post/' . $id);
        }
        $this->view->render('Добавление рецепта');
    }
}