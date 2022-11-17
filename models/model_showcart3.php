<?php
    class model_showcart3 extends Model{
        public function __construct(){
            parent::__construct();
        }

        function index(){

        }

        function getBasketRiview(){
            return parent::getBasket();
        }
    }
?>
