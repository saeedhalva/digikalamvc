<?php

class Admincategory extends Controller{

    function __construct(){

        parent::__construct();

    }

    function index(){
        $allcategory=$this->model->getCategory();
        $data=['allcategory'=>$allcategory];
        $this->view('admin/category/index',$data);
    }

    function showchildren($idcategory){
        $categoryInfo=$this->model->categoryInfo($idcategory);
        $children=$this->model->getChildren($idcategory);
        $parents=$this->model->getParents($idcategory);
        $data=['categoryInfo'=>$categoryInfo,'category'=>$children,'parents'=>$parents];
        $this->view('admin/category/index',$data);
    }

    function maincategory(){
        $category=$this->model->getChildren(0);
        $data=['category'=>$category];
        $this->view('admin/category/index',$data);

    }

    function addcategory($parentId=0){
        if (isset($_POST['title'])){
            $title=$_POST['title'];
            $parent=$_POST['parent'];

            $this->model->addcategory($title,$parent);
        }

        $category=$this->model->getCategory();
        $data=['category'=>$category,'parentId'=>$parentId];
        $this->view('admin/category/addcategory',$data);

    }

}


?>