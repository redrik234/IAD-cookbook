<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Main;
use application\models\Post;

class AdminController extends Controller{

    public function postsAction() {
        $mainModel = new Main;
        $pagination = new Pagination($this->route, $mainModel->getCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $mainModel->recipesList($this->route),
		];
		$this->view->render('Посты', $vars);
    }

    public function deleteAction() {
        $postModel = new Post;
        if (!$postModel->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
        $this->model->deleteRecipe($this->route['id']);
		$this->view->redirect('/admin/posts');
    }
}