<?php
    class Login extends Controller{
        function __construct(){
            parent::__construct();
        }

        function index(){

            $this->view('login/index');

        }

        function checkuser(){
            $form=$_POST;
            $this->model->checkUser($form);
            Model::sessionInit();
            $check=Model::sessionGet('userId');
            if ($check==false){
                header('location:http://127.0.0.1/digikalamvc/login');
            }
            else{
                header('location:http://127.0.0.1/digikalamvc/');
            }
        }

    }
?>