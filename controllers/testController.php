<?php 

include("./util/controller.php");

class testController extends Controller{
    function get(){
        $data = array(
            'apis' => 'are',
            'super' => 'cool!'
        );

        $this->renderAPIResponse($data);
    }

    function post(){
        
    }
}

?>