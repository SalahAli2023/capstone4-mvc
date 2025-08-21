<?php

class Router {
    protected $routes = [];

    public function addRoute($route, $controller, $method) {
        $this->routes[$route] = ['controller' => $controller, 'method' => $method];
    }

    public function dispatch($uri) {
        if (array_key_exists($uri, $this->routes)) {
            $controller = $this->routes[$uri]['controller'];
            $method = $this->routes[$uri]['method'];

            $controllerInstance = new $controller();
            $controllerInstance->$method();
        } else {
            throw new Exception("No route found for URI: $uri");
        }
    }
}