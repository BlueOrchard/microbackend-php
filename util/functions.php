<?php
include('./routes.php');

function loadRouteController(){
    global $routes;
    $path = "";

    if(isset($_GET["path"])){
        $path = $_GET["path"];
    }

    $routes->resolveRoute($path);
    $routes->useController();
}

function getHeader($headerName){
    include('./views/header.php');
}

function getFooter(){
    include('./views/footer.php');
}


?>