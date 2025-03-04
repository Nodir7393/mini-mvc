<?php
namespace App\Core;
class Router {
    public function dispatch($url) {
        $url = trim($url, '/');
        $url = explode('/', $url);

        $controllerName = !empty($url[0]) ? ucfirst($url[0]) . 'Controller' : 'HomeController';
        $methodName = !empty($url[1]) ? $url[1] : 'index';

        $controllerClass = "App\\Controllers\\$controllerName";

        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();

            if (method_exists($controller, $methodName)) {
                $controller->$methodName();
            } else {
                echo "404 - Method $methodName not found!";
            }
        } else {
            echo "404 - Controller '$controllerClass' not found!";
        }
    }
}