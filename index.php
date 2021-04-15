<?php 

session_start();

include('./util/functions.php');
loadRouteController();

session_destroy();

?>