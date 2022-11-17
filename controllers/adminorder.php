<?php
    class Adminorder extends Controller{
        public function __construct(){
            parent::__construct();
        }

        function index(){
            $order=$this->model->getOrders();
            $data=['orders'=>$order];
            $this->view('admin/order/index',$data);
        }

    }
?>