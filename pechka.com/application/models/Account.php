<?php

namespace application\models;

use application\core\Model;
use application\lib\User;

class Account extends Model{

    private $error;
    
    public function validateData($input) {
        $subnews = 0;

        $login = $input['login'];
        $email = $input['email'];
        $password = $input['password'];

        if (isset($input['subNews'])) {
            $subnews = 1;
        }
        else {
            $subnews = 0;
        }
        if (!User::matchesLogin($login)) {
            $this->error ="Логин должен начинаться с буквы, минимальная длина - 4 символа";
            return false;
        }
        if (!User::matchesEmail($email)) {
            $this->error = "Неправильный email";
            return false;
        }
        if (!User::matchesPassword($password)) {
            $this->error = "Пароль должен быть не короче 6 символов";
            return false;
        }
        if (User::emailExists($email)) {
            $this->error = "Такой email уже используется";
            return false;
        }
        if (User::loginExists($login)) {
            $this->error = "Пользователь с таким логином уже существует";
            return false;
        }
        
        User::register($login, $email, $password, $subnews);

        return true;
    }

    public function login($inputPost) {
        $login = $inputPost['login'];
        $password = $inputPost['password'];

        if (!(User::matchesLogin($login) || User::matchesPassword($password))) {
            $this->error = "Логин или пароль указан неверно. Поробуйти ввести еще раз.";
            return false;
        }
        elseif ($userId = User::getId($login, $password)) {
            $data = User::getById($userId);
            User::auth($data);
        }
        else {
            $this->error = "Пользователя с такими данными не существует";
            return false;
        }

        return true;
    }

    public function logout() {
        User::logout();
    }

    public function recovery($email) {
        if (!User::matchesEmail($email)){
            $this->error = "Неправильный email";
            return false;
        }
        elseif (!User::emailExists($email)) {
            $this->error = "Пользователя с таким e-mail не существует";
            return false;
        }

        //$token = $this->createToken(10);

        //mail($email, 'Cброс пароля:', 'Подтверждение: http://pechka.com/account/reset/' . $token);

        $this->error = "Данная функция пока недоступна";
        return false;
    }

    public function editData($inputData) {
        $id              = $_SESSION['auth']['id'];
        $email           = $inputData['email'];
        $currEmail       = $_SESSION['auth']['email'];
        $confirmPassword = $inputData['confirmPassword'];
        $password        = $inputData['password'];

        if (strcasecmp($email, $currEmail) == 0 && empty($password)) {
            $this->error = "Нет изменений в данных!";
            return false;
        }

        if (!User::matchesEmail($email)) {
            $this->error = "Неправильный email";
            return false;
        }
        elseif (User::emailExists($email) && strcasecmp($email, $currEmail) != 0) {
            $this->error = "Такой email уже используется";
            return false;
        }
        elseif (strcasecmp($email, $currEmail) != 0) {
            User::updateEmail($id, $email);
        }

        if (!empty($password))
        {
            if (!User::matchesPassword($password))
            {
                $this->error = "Некорректный пароль";
                return false;
            }
            elseif (strcmp($password, $confirmPassword) != 0)
            {
                $this->error = "Пароли не совпадают";
                return false;
            }
            User::updatePassword($id, $password);
        }
        
        $data = User::getById($id);
        User::logout();
        User::auth($data);
        return true;
    }

    public function getError() {
        $tmpErr = $this->error;
        $this->error = '';
        return $tmpErr;
    }

    public function createToken($length) {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }
}
