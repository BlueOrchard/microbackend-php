<?php

abstract class Controller{
    private $requestType;

    function __construct(){
        $this->requestType = $_SERVER['REQUEST_METHOD'];

        switch($this->requestType){
            case "GET":
                $this->get();
                break;
            case "POST":
                $this->post();
                break;
            default:
                return;
        }
    }

    function renderView($viewName, $data){
        include("./views/$viewName.php");
    }

    function renderAPIResponse($data){
        print(json_encode($data));
    }

    abstract function get();
    abstract function post();
}