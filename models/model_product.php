<?php
    class model_product extends Model{

        function __construct(){

            parent::__construct();

        }

        function productInfo($id){



                $sql = "select * from tbl_product where id=?";
                $result = $this->doselect($sql, [$id], 1);
                $price = $result['price'];
                $discount = $result['discount'];
                $price_calculate = $this->calculatediscount($price, $discount);
                $result['price_discount'] = $price_calculate[0];
                $result['price_total'] = $price_calculate[1];
                $colors = $result['colors'];
                $colors = explode(',', $colors);
                $colors = array_filter($colors);
                $all_colors = [];

                foreach ($colors as $color) {
                    $colorInfo = $this->colorInfo($color);
                    array_push($all_colors, $colorInfo);

                }
                $result['all_colors'] = $all_colors;

                $garantee = $result['garantee'];
                $garantee = explode(',', $garantee);
                $garantee = array_filter($garantee);
                $all_garantee = [];

                foreach ($garantee as $id) {
                    $garanteeInfo = $this->garanteeInfo($id);
                    array_push($all_garantee, $garanteeInfo);

                }
                $result['all_garantee'] = $all_garantee;

                return $result;





        }

        function colorInfo($id){
            $sql="select * from tbl_color where id=?";
            $result=$this->doselect($sql,[$id],1);
            return $result;
        }

        function garanteeInfo($id){

            $sql="select * from tbl_garantee where id=?";
            $result=$this->doselect($sql,[$id],1);
            return $result;

        }

        function getgallery($idproduct){
            $sql="select * from tbl_gallery where idproduct=?";
            $result=$this->doselect($sql,[$idproduct]);
            return$result;
        }
        function getthombs($idproduct){
            $sql="select * from tbl_gallery where idproduct=? limit 4";
            $result=$this->doselect($sql,[$idproduct]);
            return$result;
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

        function naghd($id){
            $sql='select * from tbl_naghd where idproduct=?';
            $result=$this->doselect($sql,[$id]);
            return $result;


        }

        function fanni($idcategory,$idproduct){
            $sql="select * from tbl_attr where idcategory=? and parent=0";
            $params=[$idcategory];//doselect
            $result=$this->doselect($sql,$params);
            foreach ($result as $key=>$row){
                $sql2="select tbl_attr.title,tbl_product_attr.value from tbl_attr left join tbl_product_attr on tbl_attr.id=tbl_product_attr.idattr and tbl_product_attr.idproduct=? where tbl_attr.parent=?";
                $params=[$idproduct,$row['id']];
                $result2=$this->doselect($sql2,$params);
                $result[$key]['children']=$result2;
            }
            return $result;


        }

        function comment_param($idcategory,$idproduct){
            $sql="select * from tbl_comment_param where idcategory=?";
            $x=[$idcategory];//doselect
            $result=$this->doselect($sql,$x);

            $sql="select * from tbl_comment where idproduct=?";
            $res=$this->doselect($sql,[$idproduct]);
            $scores_total=[];

            foreach ($res as $row){

                $params_score=$row['param'];
                $params_score=unserialize($params_score);
                foreach ($params_score as $key=>$val){
                    $param_id=$key;
                    $score=$val;
                    if (!isset($scores_total[$param_id])){
                        $scores_total[$param_id]=0;
                    }
                    @$scores_total[$param_id]=$scores_total[$param_id]+$score;

                }

            }

            $totalcomment= sizeof($res);

            foreach ($scores_total as $key=>$val){
                $val=$val/$totalcomment;
                $scores_total[$key]=$val;
            }
           // print_r($scores_total);

          return [$result,$scores_total];





        }

        function getComment($idproduct){
            $sql="select * from tbl_comment where idproduct=?";
            $data=[$idproduct];//doselect
            $result=$this->doselect($sql,$data);
            return $result;

        }

        function getQuestion ($idproduct){

            $sql="select * from tbl_question where idproduct=? and parent=0";
            $questions=$this->doselect($sql,[$idproduct]);
            $sql="select * from tbl_question where parent!=0";
            $all_answers=$this->doselect($sql);
            $all_answers_new=[];
            foreach ($all_answers as $answer){
                $parent=$questions_id=$answer['parent'];
                $all_answers_new[$questions_id]=$answer;

            };




//            foreach ($questions as $key=>$row){
//                $sql="select * from tbl_question where parent=?";
//                $data=[$row['id']];
//                $answer=$this->doselect($sql,$data,1);
//                $questions[$key]['answer']=$answer;
//            }
//            print_r($questions);
           return [$questions,$all_answers_new];


        }

        function addToBasket($productId,$color,$garantee){
            $cookie=self::getBasketCookie();
            $sql="select * from tbl_basket where cookie=? and idproduct=? and color=? and garantee=?";
            $params=[$cookie,$productId,$color,$garantee];
            $result=$this->doselect($sql,$params);
            if (isset($result[0])){
                $sql="update tbl_basket set tedad=tedad+1 where cookie=? and idproduct=? and color=? and garantee=?";
                $params=[$cookie,$productId,$color,$garantee];
                $this->doQuery($sql,$params);
            }
            else {
                $sql = "insert into tbl_basket (cookie,idproduct,tedad,color,garantee) values (?,?,1,?,?)";
                $params = [$cookie, $productId,$color,$garantee];
                $this->doQuery($sql, $params);
            }

        }



    }
?>