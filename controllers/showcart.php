<?php
    class Showcart extends Controller{
        function __construct(){

        }

        function index(){
            $basketInfo=$basket=$this->model->getBasket();
            $basket=$basketInfo[0];
            $pricetotalall=$basketInfo[1];
            $data=['basket'=>$basket,'pricetotalall'=>$pricetotalall];

            $this->view('showcart/index',$data);
        }

        function deletebasket($productId){
            $this->model->deleteBasket($productId);
            $basketInfo=$this->model->getBasket();
            echo json_encode($basketInfo);

        }

        function updatebasket(){
           $this->model->updatebasket($_POST);
            $basketInfo=$this->model->getBasket();
            echo json_encode($basketInfo);

        }
    }
?>