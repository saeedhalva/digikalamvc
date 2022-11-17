<?php
    class admincomment extends Controller{

        function __construct(){
            parent::__construct();
        }

        function index(){
            $comment=$this->model->getComment();
            $data=['comment'=>$comment];
            $this->view('admin/comment/index',$data);
        }

        function confirm(){
            //$ids=$_POST['id'];
            $this->model->confirm($_POST);
            header('location:'.url.'admincomment');
        }

        function unconfirm(){
            $ids=$_POST['id'];
            $this->model->unconfirm($ids);
            header('location:'.url.'admincomment');
        }

        function delete(){
            $ids=$_POST['id'];
            $this->model->delete($ids);
            header('location:'.url.'admincomment');
        }
    }
?>