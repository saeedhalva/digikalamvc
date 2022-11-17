<?php
    class model_showcart4 extends Model{

        public function __construct(){
            parent::__construct();
        }

        function index(){
        }

        function chekcode($code){
            $sql="select * from tbl_code where code=? and used=0";
            $params=[$code];
            $result=$this->doselect($sql,$params);
            $darsad=$result[0]['darsad'];
            $resulttotal=[$result,$darsad];
            return $resulttotal;
//            if (sizeof($result)>0){
//                return true;
//            }
//            else{
//                return false;
//            }

        }

        function calculatetotalprice(){
            $basketinfo=self::getBasket();
            $basketprice=$basketinfo[1];
            $basketdiscount=$basketinfo[2];
            $pricetotal=$basketprice-$basketdiscount;
            return $pricetotal;
        }

        function saveorder(){
            self::sessionInit();
            $addressInfo=self::sessionGet('addressInfo');
            $unser=unserialize($addressInfo);
            $family=$unser['family'];
            $mobile=$unser['mobile'];
            $tell=$unser['tell'];
            $codeposti=$unser['codeposti'];
            $address=$unser['address'];
            $basketInfo=$this->getBasket();
            $basket=$basketInfo[0];
            $basket=serialize($basket);
            $basketprice=$basketInfo[1];
            $basketdiscount=$basketInfo[2];
            $userid=self::sessionGet('userId');
            $sql="insert into tbl_order (family,mobile,tell,code_posti,address,basket,userid) values (?,?,?,?,?,?,?)";
            $params=[$family,$mobile,$tell,$codeposti,$address,$basket,$userid];
            $this->doQuery($sql,$params);
        }
    }
?>