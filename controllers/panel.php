<?php
    class Panel extends Controller{
        public $checkLogin="";
        function __construct(){
            Model::sessionInit();
            $this->checkLogin=Model::sessionGet('userId');
            if ($this->checkLogin==false){
                header('location:http://127.0.0.1/digikalamvc/login');
            }
        }

        function index(){
            $comment=$this->model->getComment();
            $result=$this->model->getUserInfo();
            $stat=$this->model->getStat();
            $message=$this->model->getMessage();
            $order=$this->model->getOrder();
            $folder=$this->model->getFolder();
            $code=$this->model->getCode();
            $data=['userInfo'=>$result,'stat'=>$stat,'message'=>$message,'order'=>$order,'folder'=>$folder,'comment'=>$comment,'code'=>$code];
            $this->view('panel/index',$data);
        }

        function getFavorite(){
           $folderId=$_POST['folderId'];
            $x=$this->model->getFavorite($folderId);
            echo json_encode($x);
        }

        function saveEdit(){
            $folderId=$_POST['folderId'];
            $newName=$_POST['newName'];
            $this->model->saveEdit($folderId,$newName);
        }

        function deleteFavorite(){
            $favoriteId=$_POST['favoriteId'];
            $this->model->deleteFavorite($favoriteId);
        }

        function deleteComment($commentid){
            $this->model->deleteComment($commentid);
        }

        function profile(){
            $userInfo=$this->model->getUserInfo();
            $data=['userInfo'=>$userInfo];
            $this->view('panel/profile',$data);
        }

        function editProfile(){
            $data=$_POST;
            $this->model->editProfile($data);
            header('location:http://127.0.0.1/digikalamvc/panel/profile');
        }
    }
?>