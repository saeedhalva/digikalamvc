<?php

    class Showcart2 extends Controller{

        function __construct(){

        }

        function index(){
            $address=$this->model->getAddress();
            $data=['address'=>$address];
            $this->view('showcart2/index',$data);


        }

        function addaddress($editAddressId){
            $this->model->addAddress($_POST, $editAddressId);
        }

        function editaddress($addressId){
            $addressInfo=$this->model->getaddressInfo($addressId);
            echo json_encode($addressInfo);
        }

        function makesession (){
            $addressId=($_POST['addressId']);
            print_r($this->model->getaddressInfo($addressId));
        }

        function deleteAddress($id){
            $this->model->deleteAddress($id);
        }

    }

?>