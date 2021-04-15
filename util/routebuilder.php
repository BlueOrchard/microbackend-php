<?php

class Route{
    public $routes = array();
    public $currentPageKey = 0;

    function __construct(){
        $route404 = new RouteBuilder();
        $route404->buildRouter('*', 'page404');

        $routeHome = new RouteBuilder();
        $routeHome->buildRouter('', 'homeController');

        $this->routes[] = $route404;
        $this->routes[] = $routeHome;
    }

    function addRoute($path, $controller){
        $route = new RouteBuilder();
        $route->buildRouter($path, $controller);

        $this->routes[] = $route;
    }

    function resolveRoute($needle){
        foreach($this->routes as $key=>$route){
            if($route->path == $needle){
                $this->currentPageKey = $key;
                break;
            }
        }
    }

    function useController(){
        $controllerName = $this->routes[$this->currentPageKey]->controller;
        $controllerPath = $this->routes[$this->currentPageKey]->controller . ".php";
        include("./controllers/$controllerPath");

        new $controllerName();
    }
}

class RouteBuilder{
    public $path;
    public $controller;

    function buildRouter($path, $controller){
        $this->path = $path;
        $this->controller = $controller;
    }
}