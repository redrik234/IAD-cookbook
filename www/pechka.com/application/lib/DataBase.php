<?php

namespace application\lib;

use PDO;

class DataBase {

    private static $db = null;

    public static function getInstance() {
        if (self::$db === null) {
            self::connect();
        }

        return self::$db;
    }

    private static function connect() {
        $config = require 'application/config/db.php';
        
        self::$db = new PDO('mysql:host=' . $config['host']
                            . ';dbname=' . $config['dbname'],
                            $config['user'],
                            $config['password']);
        self::$db->query("SET NAMES utf8");
    }

    public static function query($sql, $params = []) {
        $stmt = self::$db->prepare($sql);
        
        if (!empty($params)) {
            foreach($params as $key => $val) {

                if (is_int($val)) {
                    $type = PDO::PARAM_INT;
                }
                else {
                    $type = PDO::PARAM_STR;
                }

                $stmt->bindValue(':' . $key, $val, $type);
            }
        }

        $stmt->execute();

        return $stmt;
    }

    public static function row($sql, $params = []) {
        $result = self::query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function column($sql, $params = []) {
        $result = self::query($sql, $params);
        return $result->fetchColumn();
    }

    public static function lastInsertId() {
        return self::$db->lastInsertId();
    }
}