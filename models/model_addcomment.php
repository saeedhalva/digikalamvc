<?php
    class model_addcomment extends Model{

        function __construct(){
            parent::__construct();
        }

        function productInfo($productId){
            $sql="select * from tbl_product where id=?";
            $result=$this->doselect($sql,[$productId],1);
            return $result;
        }

        function getParam($productId){
            $productInfo=$this->productInfo($productId);
            $categoryId=$productInfo['cat'];
            $sql="select * from tbl_comment_param where idcategory=?";
            $result=$this->doselect($sql,[$categoryId]);
            return $result;
        }

        function saveComment($data,$productId){
           $comment_params=$this->getParam($productId);
           $param_result=[];
           foreach ($comment_params as $row){
               $paramid=$row['id'];
               $value=$_POST['param'.$paramid];
               $param_result[$paramid]=$value;
           }
           $title=$_POST['title'];
           $posotive=$_POST['posotive'];
           $negative=$_POST['negative'];
           $comment=$_POST['comment'];
           self::sessionInit();
           $userid=self::sessionGet('userId');
           $sql="select * from tbl_comment where user=? and idproduct=?";
           $params=[$userid,$productId];
           $result=$this->doselect($sql,$params);
           if (isset($result[0])){
               $commentid=$result[0]['id'];
               $sql = "update tbl_comment set  title=?,matn=?,positive=?,negative=?,param=? where id=?";
               $array = [$title, $comment, $posotive, $negative, serialize($param_result),$commentid];
               $this->doQuery($sql, $array);
           }else {
               $sql = "insert into tbl_comment (title,matn,positive,negative,idproduct,param,user) values (?,?,?,?,?,?,?)";
               $array = [$title, $comment, $posotive, $negative, $productId, serialize($param_result), $userid];
               $this->doQuery($sql, $array);
           }
            header('location:' . url . 'addcomment/index/' . $productId);
        }

        function commentInfo($productId){
            self::sessionInit();
            $userid=self::sessionGet('userId');
            $sql="select * from tbl_comment where idproduct=? and user=?";
            $params=[$productId,$userid];
            $result=$this->doselect($sql,$params,1);
            return $result;

        }


    }
?>