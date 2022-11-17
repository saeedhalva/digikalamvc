<?php
    class Showcart3 extends Controller{

        function __construct(){

        }

        function index(){
            $basketInfo=$this->model->getBasketRiview();
            Model::sessionInit();
            $addressInfo=Model::sessionGet('addressInfo');
            $addressInfo=unserialize($addressInfo);
            $data=['basketInfo'=>$basketInfo,'addressInfo'=>$addressInfo];
            $this->view('showcart3/index',$data);
        }

    }
?>