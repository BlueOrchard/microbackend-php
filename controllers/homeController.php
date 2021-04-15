<?php 

include("./util/controller.php");

class homeController extends Controller{
    function get(){
        $data = array(
            'test-data' => 'This is a test',
            'fizz' => 'buzz',
            'fizzbuzz' => 'i % 3 == 0 && i % 5 == 0'
        );

        $this->renderView('home', $data);
        $this->renderAPIResponse($data);
    }

    function post(){
        
    }
}

?>