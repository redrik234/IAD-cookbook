<?php

namespace application\lib;

use PDO;
use application\lib\DataBase;

class User {

    public static function register($login, $email, $password, $subnews) {
        $db = Database::getInstance();
        $query = "INSERT INTO users (login, email, password, date, subnews) " .
                    "VALUES (:login, :email, :password, NOW(), :subnews)";
        $response = $db->prepare($query);
        $response->bindParam(':login', $login, PDO::PARAM_STR);
        $response->bindParam(':email', $email, PDO::PARAM_STR);
        $hashedPassword = md5($password);
        $response->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
        $response->bindParam(':subnews', $subnews, PDO::PARAM_STR);
        
        return $response->execute();
    }

    public static function matchesLogin($login) {
        $regex = "/[a-zA-Z][_a-zA-Z0-9]{3,}/";
        return preg_match($regex, $login);
    }

    public static function matchesPassword($password) {
        return strlen($password) >= 6;
    }

    public static function matchesEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function emailExists($email) {
        $db = Database::getInstance();
        $query = "SELECT COUNT(*) FROM `users` WHERE `email` = :email";
        $result = $db->prepare($query);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        $count = intval($result->fetchColumn());
        return $count >= 1;
    }

    public static function loginExists($login) {
        $db = Database::getInstance();
        $query = "SELECT COUNT(*) FROM `users` WHERE `login` = :login";
        $response = $db->prepare($query);
        $response->bindParam(':login', $login, PDO::PARAM_STR);
        $response->execute();
        $count = intval($response->fetchColumn());
        return $count >= 1;
    }

    public static function getId($login, $password) {
        $db = Database::getInstance();
        $query = "SELECT * FROM `users` WHERE `login` = :login AND `password` = :password";
        $response = $db->prepare($query);
        $response->bindParam(':login', $login, PDO::PARAM_STR);
        $hashedPassword = md5($password);
        $response->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
        $response->execute();
        if ($user = $response->fetch())
        {
            return $user['id'];
        }
        return false;
    }

    public static function getById($id) {
        $db = Database::getInstance();
        $query = "SELECT * FROM `users` WHERE `id` = :id";
        $response = $db->prepare($query);
        $response->bindParam(':id', $id, PDO::PARAM_INT);
        $response->setFetchMode(PDO::FETCH_ASSOC);
        $response->execute();
        return $response->fetch();
    }

    public static function updateEmail($id, $email) {
        $db = Database::getInstance();
        $query = "UPDATE `users` SET `email` = :email WHERE `id` = :id";
        $response = $db->prepare($query);
        $response->bindParam(':id', $id, PDO::PARAM_INT);
        $response->bindParam(':email', $email, PDO::PARAM_STR);
        return $response->execute();
    }

    public static function updatePassword($id, $password) {
        $db = Database::getInstance();
        $query = "UPDATE `users` SET `password` = :password WHERE `id` = :id";
        $response = $db->prepare($query);
        $response->bindParam(':id', $id, PDO::PARAM_INT);
        $hashedPassword = md5($password);
        $response->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
        return $response->execute();
    }

    public static function auth($data) {
        $_SESSION['auth'] = $data;

        if ((int)$data['access_level'] === 0) {
            $_SESSION['admin'] = 0;
        }
    }

    public static function isLogged() {
        return isset($_SESSION['auth']);
    }

    public static function logout() {
        unset($_SESSION['auth']);
        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }
    }
}