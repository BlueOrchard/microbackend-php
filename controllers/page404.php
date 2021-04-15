<?php 
include("./util/controller.php");

class page404 extends Controller{
    function get(){
        $this->renderView('404', null);
    }

    function post(){

    }
}

?>