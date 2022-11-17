<?php
    class Model{
        public static $con="";
        function __construct(){
            $servername='localhost';
            $username='root';
            $pasword='';
            $dbname='digi_mvc';
            $attr=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
            self::$con=new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$pasword,$attr);
        }
        public static function getoption(){
            $spl="select * from tbl_option";
            $stmt=self::$con->prepare($spl);
            $stmt->execute();
            $options=$stmt->fetchAll();
            $options_new=[];
            foreach ($options as $option){
                $setting=$option['setting'];
                $value=$option['value'];
                $options_new[$setting]=$value;
            }
            return $options_new;

        }

        function calculatediscount($price,$discount){
            $price_discount=($discount*$price)/100;
            $price_total=$price-$price_discount;
            return [$price_discount,$price_total];


        }
        function doselect($sql,$values=[],$fetch='',$fetchStyle=PDO::FETCH_ASSOC){

            $stmt=self::$con->prepare($sql);

            foreach ($values as $key=>$value){
                $stmt->bindValue($key+1,$value);
            }

            $stmt->execute();

            if ($fetch==''){
                $result=$stmt->fetchAll($fetchStyle);
            }
            else{
                $result=$stmt->fetch($fetchStyle);
            }

            return $result;
        }

        function doQuery($sql,$values=[]){

            $stmt=self::$con->prepare($sql);

            foreach ($values as $key=>$value){
                $stmt->bindValue($key+1,$value);
            }

            $stmt->execute();
        }

        public static function sessionInit(){
            ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);
            ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 365);
            @session_start();
        }

        public static function sessionSet($name,$value){
            $_SESSION[$name]=$value;
        }

        public static function sessionGet($name){
            if (isset($_SESSION[$name])){
                return $_SESSION[$name];
            }
            else{
                return false;
            }
        }

        public static function getBasketCookie(){
            if (isset($_COOKIE['basket'])){
                $cookie=$_COOKIE['basket'];
            }
            else{
                $expire=time()+7*24*3600;
                $value=time();
                setcookie('basket',$value,$expire,'/');
                $cookie=$value;
            }
            return $cookie;

        }

        function getBasket(){
            $sql="select b.tedad,b.id as basketRow,p.*,c.title as colorTitle,g.title as garanteeTitle from tbl_basket b left join tbl_product p on b.idproduct=p.id left join tbl_color c on b.color=c.id left join tbl_garantee g on b.garantee=g.id where cookie=?";

            $cookie=self::getBasketCookie();
            $params=[$cookie];
            $result=$this->doselect($sql,$params);
            $discountTotalAll=0;
            foreach ($result as $key=>$row){
                $discount=($row['discount']*$row['price'])/100;
                $discountTotal=$row['tedad']*$discount;
                $discountTotalAll=$discountTotalAll+$discountTotal;
                $result[$key]['discountTotal']=$discountTotal;
            }
            $pricetotalall=0;
            foreach ($result as $row){
                $price=$row['price'];
                $tedad=$row['tedad'];
                $pricetotal=$price*$tedad;
                $pricetotalall=$pricetotalall+$pricetotal;
            }
            return [$result,$pricetotalall,$discountTotalAll];


        }
    }

?>