<?php

namespace application\core;

class View {
    
    private $path;
    private $route;
    private $layout = 'default';

    public function __construct($route) {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    public function render($title, $vars = []) {

        if (!empty($vars)) {
            extract($vars);
        }

        $path = 'application/views/' . $this->path . '.php';

        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require_once 'application/views/layout/' . $this->layout . '.php';
        }
    }

    public function getPath() {
        return $tins->path;
    }

    public function getRoute() {
        return $tins->route;
    }

    public static function errorCode($code) {
        $path = 'application/views/error/' . $code . '.php';
        
        if (file_exists($path)) {
            http_response_code($code);
            require $path;
        } 
        die;
    }

    public function redirect($url) {
        $direct = 'location: ' . $url;
        header($direct);
        die;
    }

    public function message($status, $message) {
        exit(json_encode(['status' => $status, 'message' => $message]));
    }

    public function location($url) {
        exit(json_encode(['url' => $url]));
    }
}