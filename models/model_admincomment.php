<?php
    class model_admincomment extends Model{

        function __construct(){
            parent::__construct();
        }

        function getComment(){
            $sql="select * from tbl_comment order by id desc ";
            $result=$this->doselect($sql,[]);
            return $result;
        }

        function confirm($data){
            foreach ($data['id'] as $id){
                $sql="update tbl_comment set title=?,positive=?,negative=?,matn=? where id=?";
                $params=[$data['title'.$id],$data['posotive'.$id],$data['negative'.$id],$data['matn'.$id],$id];
                $this->doQuery($sql,$params);
            }
            $ids=implode(',',$data['id']);
            $sql="update tbl_comment set confirm=1 where id in (".$ids.")";
            $this->doQuery($sql);
        }

        function unconfirm($ids){

            $ids=implode(',',$ids);
            $sql="update tbl_comment set confirm=0 where id in (".$ids.")";
            $this->doQuery($sql);
        }

        function delete($ids){
            $ids=implode(',',$ids);
            $sql="delete from tbl_comment where id in (".$ids.")";
            $this->doQuery($sql);
        }
    }
?>