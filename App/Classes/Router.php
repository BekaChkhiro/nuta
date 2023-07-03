<?php

namespace App\Classes;

class Router
{
    public $routes = [];

    public function addRoute($url, $class, $func)
    {
        $this->routes[$url] = [
            'class' => $class,
            'func' => $func
        ];
    }

    public function dispatch()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = str_replace('/Beka', '', $uri);
        $uri = explode('?', $uri)[0];
        // if in array
        if (isset($this->routes[$uri])) {
            $route = $this->routes[$uri];
            $callback = $route['func'];
            echo $route['class']->$callback();
        } else {
            echo '404 page not found';
        }
    }
}
