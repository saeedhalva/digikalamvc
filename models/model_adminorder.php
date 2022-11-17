<?php
    class model_adminorder extends Model{
        function __construct(){
            parent::__construct();
        }

        function index(){
        }

        function getOrders(){
            $sql="select * from tbl_order order by id desc";
            $result=$this->doselect($sql);
            return $result;
        }
    }
?>