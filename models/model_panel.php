<?php
    class model_panel extends Model{
        private $userId;
        function __construct(){
            parent::__construct();
            @Model::sessionInit();
            $this->userId=Model::sessionGet('userId');
        }

        function index(){
        }

        function getUserInfo(){
            @Model::sessionInit();
            $this->userId=Model::sessionGet('userId');
            $sql="select * from tbl_user where id=?";
            $params=[$this->userId];
            $result=$this->doselect($sql,$params,1);
            return $result;
        }

        function getStat(){
            $stat=[];
            $sql="select * from tbl_order where userid=?";
            $params=[$this->userId];
            $result=$this->doselect($sql,$params);
            $stat['order_number']=sizeof($result);

            $sql="select * from tbl_order where userid=? and status=1";
            $params=[$this->userId];
            $result=$this->doselect($sql,$params);
            $stat['order_taeed_number']=sizeof($result);

            $sql="select * from tbl_comment where user=?";
            $params=[$this->userId];
            $result=$this->doselect($sql,$params);
            $stat['tedad_comment']=sizeof($result);

            $sql="select * from tbl_message where userid=?";
            $params=[$this->userId];
            $result=$this->doselect($sql,$params);
            $stat['tedad_message']=sizeof($result);
            return $stat;
        }

        function getMessage(){
            $userId=$this->userId;
            $sql="select * from tbl_message where userid=?";
            $result=$this->doselect($sql,[$userId]);
            foreach ($result as $row){
                $sql="update tbl_message set status=1 where id=?";
                $this->doQuery($sql,[$row['id']]);
            }
            return $result;
        }

        function getOrder(){
            $userId=$this->userId;
            $sql="select tbl_order. *,tbl_order_status.title from tbl_order left join tbl_order_status on tbl_order_status.id=tbl_order.status where userid=?";
            $result=$this->doselect($sql,[$userId]);
            return $result;
        }

        function getFolder(){
            $userId=$this->userId;
            $sql="select * from tbl_favorite where userid=? and parent=0";
            $result=$this->doselect($sql,[$userId]);
            return $result;
        }

        function getFavorite($folderId){
            $userId=$this->userId;
            if ($folderId!=0){
                $sql="select tbl_favorite.*,tbl_product.title as producttitle from tbl_favorite left join tbl_product on tbl_favorite.idproduct=tbl_product.id where userid=? and parent=?";
            }else if($folderId==0){
                $sql="select tbl_favorite.*,tbl_product.title as producttitle from tbl_favorite left join tbl_product on tbl_favorite.idproduct=tbl_product.id where userid=? and parent!=?";

            }

            $result=$this->doselect($sql,[$userId,$folderId]);
            return $result;
        }

        function saveEdit($folderId,$newName){
            $sql="update tbl_favorite set title=? where id=?";
            $params=[$newName,$folderId];
            $this->doQuery($sql,$params);

        }

        function deleteFavorite($favoriteId){
            $sql="delete from tbl_favorite where id=?";
            $this->doQuery($sql,[$favoriteId]);
        }

        function getComment(){
            $userid=$this->userId;
            $sql="select tbl_comment.*,tbl_product.title as producttitle from tbl_comment left join tbl_product on tbl_comment.idproduct=tbl_product.id where user=?";
            $result=$this->doselect($sql,[$userid]);
            return $result;
        }

        function deleteComment($commentid){
            $sql="delete from tbl_comment where id=?";
            $this->doQuery($sql,[$commentid]);
        }

        function getCode(){
            $userid=$this->userId;
            $sql="select * from tbl_code where userid=?";
            $result=$this->doselect($sql,[$userid]);
            foreach ($result as $key=>$row){
                $sql="select * from tbl_order where code=? and userid=?";
                $orders=$this->doselect($sql,[$row['code'],$userid]);
                $result[$key]['orders']=$orders;
            }
            return $result;

        }

        function editProfile($data){
            $userid=$this->userId;
            $sql="update tbl_user set family=?,code_melli=?,tell=?,mobile=?,address=?,jensiat=? where id=?";
            $params=[$data['family'],$data['codemelli'],$data['tell'],$data['mobile'],$data['address'],$data['jensiat'],$userid];
            $this->doQuery($sql,$params);

        }
    }
?>