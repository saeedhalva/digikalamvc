<?php
    class model_showcart extends Model{

        public function __construct(){
            parent::__construct();
        }

        function getBasket(){
            $sql="select b.tedad,b.id as basketRow,p.*,c.title as colorTitle,g.title as garanteeTitle from tbl_basket b left join tbl_product p on b.idproduct=p.id left join tbl_color c on b.color=c             .id left join tbl_garantee g on b.garantee=g.id where cookie=?";

            $cookie=self::getBasketCookie();
            $params=[$cookie];
            $result=$this->doselect($sql,$params);
            $pricetotalall=0;
            foreach ($result as $row){
                $price=$row['price'];
                $tedad=$row['tedad'];
                $pricetotal=$price*$tedad;
                $pricetotalall=$pricetotalall+$pricetotal;
            }
            return [$result,$pricetotalall];


        }

        function deleteBasket($productId){
            $sql="delete from tbl_basket where id=?";
            $params=[$productId];
            $this->doQuery($sql,$params);
        }

        function updatebasket($data){
            $tedad=$data['tedad'];
            $basketrow=$data['basketrow'];
            $sql="update tbl_basket set tedad=? where id=?";
            $params=[$tedad,$basketrow];
            $this->doQuery($sql,$params);

        }
    }
?>