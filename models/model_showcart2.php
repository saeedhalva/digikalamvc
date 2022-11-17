<?php
    class model_showcart2 extends Model{
        function __construct(){
            parent::__construct();

        }

        function addAddress($data,$editAddressId){
            $family=$data['family'];
            $mobile=$data['mobile'];
            $tell=$data['tell'];
            $codeposti=$data['codeposti'];
            $address=$data['address'];
            Model::sessionInit();
            $userid=Model::sessionGet('userId');
            if ($editAddressId==0) {
                $sql = "insert into tbl_user_addaddress (family,mobile,tell,codeposti,address,userid) values (?,?,?,?,?,?)";
                $params = [$family, $mobile, $tell, $codeposti, $address, $userid];
            }
            else{
                $sql = "update tbl_user_addaddress set family=?,mobile=?,tell=?,codeposti=?,address=? where id=?";
                $params = [$family, $mobile, $tell, $codeposti, $address,$editAddressId];
            }
            $this->doQuery($sql,$params);

        }

        function getAddress(){
            Model::sessionInit();
            $userId=Model::sessionGet('userId');
            $sql="select * from tbl_user_addaddress where userid=?";
            $params=[$userId];
            $result=$this->doselect($sql,$params);
            return $result;

        }

        function getAddressInfo($addressId){
            $sql="select * from tbl_user_addaddress where id=?";
            $params=[$addressId];
            $result=$this->doselect($sql,$params,1);
            self::sessionInit();
            self::sessionSet('addressInfo',serialize($result));
            return $result;
        }

        function editAddress($addressId){

        }

        function deleteAddress($id){
            $sql="delete from tbl_user_addaddress where id=?";
            $params=[$id];
            $this->doQuery($sql,$params);
        }
    }
?>