<?php
    class Adminproduct extends Controller {

        public function __construct(){

            parent::__construct();
        }

        function index(){

            $product=$this->model->getProduct();
            $data=['product'=>$product];
            $this->view('admin/product/index',$data);
        }

        function addproduct($productId=""){
            if (isset($_POST['title'])){
                $this->model->addproduct($_POST,$productId,$_FILES['image']);
            }
            $category=$this->model->getcategory();
            $color=$this->model->getColor();
            $garantee=$this->model->getGarantee();
            $productInfo=$this->model->getProductInfo($productId);
            $data=['category'=>$category,'color'=>$color,'garantee'=>$garantee,'productInfo'=>$productInfo];
            $this->view('admin/product/addproduct',$data);
        }

        function naghd($productId){
            $productInfo=$this->model->getProductInfo($productId);
            $naghd=$this->model->getnaghd($productId);
            $data=['naghd'=>$naghd,'productInfo'=>$productInfo];
            $this->view('admin/product/naghd',$data);
        }

        function addnaghd($productId,$naghdId=''){
            if (isset($_POST['title'])){
                $this->model->addnaghd($productId,$_POST,$naghdId);
                header('location:'.url.'adminproduct/naghd/'.$productId.'');
            }
            $productInfo=$this->model->getProductInfo($productId);
            $naghdInfo=$this->model->naghdInfo($naghdId);
            $data=['productInfo'=>$productInfo,'naghdInfo'=>$naghdInfo];
            $this->view('admin/product/addnaghd',$data);
        }

        function gallery($productId){
            if (isset($_FILES['image'])){
                $this->model->addGallery($productId,$_FILES['image']);
            }
            $gallery=$this->model->getGallery($productId);
            $productInfo=$this->model->getProductInfo($productId);
            $data=['gallery'=>$gallery,'productInfo'=>$productInfo];
            $this->view('admin/product/gallery',$data);
        }

    }
?>