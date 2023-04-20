<?php

namespace config;

use Exception;

class Router
{
    private array $routes = array();

    public function addRoute($url, $action){
        $this->routes[$url] = $action;
    }

    /**
     * @throws Exception
     */
    public function route($url) {
        if (array_key_exists($url, $this->routes)) {
            return $this->routes[$url];
        } else {
            throw new Exception("No route found for URL '$url'");
        }
    }

}