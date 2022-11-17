<?php
    class model_adminproduct extends Model{

        public function __construct(){

            parent::__construct();

        }

        function getProduct(){
            $sql="select * from tbl_product";
            $result=$this->doselect($sql);
            return $result;

        }

        function getCategory(){
            $sql="select * from tbl_category";
            $result=$this->doselect($sql);
            return $result;
        }

        function getColor(){
            $sql="select * from tbl_color";
            $result=$this->doselect($sql);
            return $result;
        }

        function getGarantee(){
            $sql="select * from tbl_garantee";
            $result=$this->doselect($sql);
            return $result;
        }

        function addproduct($data=[],$productId,$file=[]){
            $title=$data['title'];
            $categoryId=$data['categoryId'];
            $price=$data['price'];
            $introduction=$data['introduction'];
            $discount=$data['discount'];
            $tedadmojood=$data['tedadmojood'];
            $colors=$data['color'];
            $colors=join(',',$colors);
            $garantees=$data['garantee'];
            $garantees=join(',',$garantees);



            if ($productId=="") {
                $sql = "insert into tbl_product (title,price,cat,introduction,discount,tedad_mojood,colors,garantee) values (?,?,?,?,?,?,?,?)";
                $value = [$title, $price, $categoryId, $introduction, $discount, $tedadmojood, $colors, $garantees];
                $this->doQuery($sql, $value);
            }
            else{
                $sql = "update tbl_product set title=?,price=?,cat=?,introduction=?,discount=?,tedad_mojood=?,colors=?,garantee=? where id=?";
                $value = [$title, $price, $categoryId, $introduction, $discount, $tedadmojood, $colors, $garantees,$productId];
                $this->doQuery($sql, $value);
            }
            $productId=parent::$con->lastInsertId();
            mkdir('public/images/products/'.$productId);

            $filename=$file['name'];
            $filesaze=$file['size'];
            $fileTmp=$file['tmp_name'];
            $fileType=$file['type'];
            $target='public/images/products/'.$productId.'/';
            $newname='product';
            $uploadok=1;

            if ($fileType!='image/jpeg' and $fileType!='image/jpg'){
                $uploadok=0;
            }
            if ($filesaze>5242880){
                $uploadok=0;
            }
            if ($uploadok==1){
                $ext=pathinfo($filename,PATHINFO_EXTENSION);
                $target=$target.$newname.'.'.$ext;
                move_uploaded_file($fileTmp,$target);
            }
        }

        function getProductInfo($productId){
            $sql="select * from tbl_product where id=?";
            $result=$this->doselect($sql,[$productId],1);
            $colors=$result['colors'];
            $garantees=$result['garantee'];
            $colors=explode(',',$colors);
            $garantees=explode(',',$garantees);
            $result['colorsInfo']=[];
            $result['garanteesInfo']=[];

            foreach ($colors as $color){
                $sql="select * from tbl_color where id=?";
                $colorInfo=$this->doselect($sql,[$color],1);
                array_push( $result['colorsInfo'],$colorInfo);
            }

            foreach ($garantees as $garantee){
                $sql="select * from tbl_garantee where id=?";
                $garanteeInfo=$this->doselect($sql,[$garantee],1);
                array_push( $result['garanteesInfo'],$garanteeInfo);
            }
            return $result;
        }

        function getnaghd($productId){
            $sql="select * from tbl_naghd where idproduct=?";
            $result=$this->doselect($sql,[$productId]);
            return $result;
        }

        function addnaghd($productId,$data=[],$naghdId=""){
            if ($naghdId=="") {
                $sql = "insert into tbl_naghd (title,description,idproduct) values (?,?,?)";
                $params = [$data['title'], $data['description'], $productId];//this is for do query
                $this->doQuery($sql, $params);
            }
            else{
                $sql = "update tbl_naghd set title=?,description=? where id=?";
                $params = [$data['title'], $data['description'], $productId];
                $this->doQuery($sql, $params);

            }

        }

        function naghdInfo($naghdId){
            $sql="select * from tbl_naghd where id=?";
            $data=[$naghdId];//this is for do select
            $result=$this->doselect($sql,$data,1);
            return $result;
        }

        function getGallery($productId){
            $sql="select * from tbl_gallery where idproduct=?";
            $result=$this->doselect($sql,[$productId]);
            return $result;
        }

        function addGallery($productId,$file){
            $filename=$file['name'];
            $filesaze=$file['size'];
            $fileTmp=$file['tmp_name'];
            $fileType=$file['type'];
            $target='public/images/products/'.$productId.'/gallery/large/';
            $newname=time();
            $uploadok=1;

            if ($fileType!='image/jpeg' and $fileType!='image/jpg'){
                $uploadok=0;
            }
            if ($filesaze>5242880){
                $uploadok=0;
            }
            if ($uploadok==1){
                $ext=pathinfo($filename,PATHINFO_EXTENSION);
                $target=$target.$newname.'.'.$ext;
                move_uploaded_file($fileTmp,$target);

                $sql="insert into tbl_gallery (img,idproduct) values (?,?)";
                $params=[$newname.'.'.$ext,$productId];
                $this->doQuery($sql,$params);
            }

        }

    }
?>