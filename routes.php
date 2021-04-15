<?php

include('./util/routebuilder.php');

$routes = new Route();

$routes->addRoute('about', 'testController');
$routes->addRoute('blog', 'testController');
$routes->addRoute('testing', 'testController');

?>