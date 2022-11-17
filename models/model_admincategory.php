<?php
    class model_admincategory extends Model{

        function __construct(){

            parent::__construct();

        }

        function index(){

        }

        function getCategory(){

            $sql="select * from tbl_category";
            $result=$this->doselect($sql);
            return $result;

        }

        function getChildren($idcategory){

            $sql="select * from tbl_category where parent=?";
            $result=$this->doselect($sql,[$idcategory]);
            return $result;
        }

        function getParents($idcategory){
            $categoryInfo=$this->categoryInfo($idcategory);
            $parent=$categoryInfo['parent'];
            $all_parents=[];
            while ($parent!=0) {
                $sql = "select * from tbl_category where id=?";
                $parentCategory = $this->doselect($sql, [$parent], 1);
                array_push($all_parents,$parentCategory);
                $parent=$parentCategory['parent'];
            }
            return $all_parents;
        }

        function categoryInfo($idcategory){
            $sql="select * from tbl_category where id=?";
            $result=$this->doselect($sql,[$idcategory],1);
            return $result;
        }

        function addcategory($title,$parent){
            $sql="insert into tbl_category (title,parent) Values (?,?)";
            $stmt=self::$con->prepare($sql);
            $stmt->bindValue(1,$title);
            $stmt->bindValue(2,$parent);
            $stmt->execute();
        }

    }
?>
