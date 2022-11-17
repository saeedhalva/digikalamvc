<?php
    class Showcart4 extends Controller{

        function __construct(){

        }

        function index(){
            $this->view('showcart4/index');
        }

        function chekcode($code){
            $result=$this->model->chekcode($code);
           print_r($result[1]);
        }

        function calculatetotalprice(){
           echo $this->model->calculatetotalprice();
        }

        function saveorder(){
            $this->model->saveorder();
        }

    }
?>