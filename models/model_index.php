<?php
    class model_index extends Model {

        function __construct(){
            parent::__construct();

        }
        function getslider1(){

            $sql="select * from tbl_slider1";
            $result=$this->doselect($sql);
            return $result;
        }

        function getslider2(){

            $sql="select * from tbl_product where special=? order by id desc ";
            $values=[1];
            $result=$this->doselect($sql,$values);
            foreach ($result as $key=>$row){
                $price_total=$this->calculatediscount($row['price'],$row['discount'])[1];
                $result[$key]['price_total']=$price_total;
            }
            return $result;



        }
        function onlyclicksite(){
            $sql="select * from tbl_option where setting='limit_sliders'";
            $stmt=self::$con->prepare($sql);
            $result=$this->doselect($sql,[],1);
            $limit=$result['value'];
            ///////////////////////////////////////////////////////
            $sql="select * from tbl_product where onlyclicksite=1 limit ".$limit." ";
            $result=$this->doselect($sql);
            return $result;
        }
        function directaccsess(){
            $sql="select * from tbl_directaccsess";
            $result=$this->doselect($sql);
            return $result;
        }

    }
?>