<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

    public function registerAction() {
        if (!empty($_POST)) {
            if (!$this->model->validateData($_POST)) {
                $this->view->message('Error', $this->model->getError());
            }
            $this->view->location('login');
        }
        $this->view->render('Регистрация');
    }

    public function loginAction() {
        if (!empty($_POST)) {
            if (!$this->model->login($_POST)) {
                $this->view->message('Error', $this->model->getError());
            }
            $this->view->location('/account/profile');
        }
        $this->view->render('Вход');
    }

    public function profileAction() {
        if (!empty($_POST)) {
            if (!$this->model->editData($_POST)) {
                $this->view->message('Error', $this->model->getError());
            }
            $this->view->message('Успех!', 'Данные успешно обновлены');
        }
        $this->view->render('Профиль');
    }

    public function logoutAction() {
        $this->model->logout();
        $this->view->redirect('login');
    }

    public function recoveryAction() {
        if (!empty($_POST)) {
            if(!$this->model->recovery($_POST['email'])) {
                $this->view->message('Error', $this->model->getError());
            }
        } 
        $this->view->render('Восстановление пароля');
    }
}
