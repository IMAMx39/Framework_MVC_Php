<?php

namespace App\Framework;

class Router
{

    public string $url;
    public array $routes = [];

    public function __construct($url)
    {
        $this->url = trim($url,'/') ;
    }

    public function get(string $path, string $action)
    {
        $this->routes['GET'][] = new Route($path,$action);
    }

    public function run()
    {
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
            $route->matches($this->url);
        }

    }
}