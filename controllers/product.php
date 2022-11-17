<?php
class Product extends Controller {


    function __construct(){

    }



    function index($id="",$activetab="naghd"){
        if ($id=="") {
            $id=1;
            $productInfo = $this->model->productInfo($id);
            $gallery = $this->model->getgallery($id);
            $thombs = $this->model->getthombs($id);
            $onlyclicksite = $this->model->onlyclicksite();
            $naghd=$this->model->naghd(1);

            $data = ['productInfo' => $productInfo, 'gallery' => $gallery, 'thombs' => $thombs, 'onlyclicksite' => $onlyclicksite,'naghd' => $naghd,'activetab'=>$activetab];
            $this->view("product/index", $data);
        }
        else{
            $productInfo = $this->model->productInfo($id);
            $gallery = $this->model->getgallery($id);
            $thombs = $this->model->getthombs($id);
            $onlyclicksite = $this->model->onlyclicksite();
            $naghd=$this->model->naghd(1);
            $data = ['productInfo' => $productInfo, 'gallery' => $gallery, 'thombs' => $thombs, 'onlyclicksite' => $onlyclicksite,'naghd' => $naghd];
            $this->view("product/index", $data);
        }
    }

    function tab($id,$idcategory){
        $number= $_POST ['number'];

        if ($number==0){
            $naghd=$this->model->naghd($id);
            $data=[$naghd];
            $this->view('product/tab1',$data,1);
        }

        if ($number==1){
            $fanni=$this->model->fanni($idcategory,$id);
            $data=[$fanni];
            $this->view('product/tab2',$data,1);
        }

        if ($number==2){
            $comment_param=$this->model->comment_param($idcategory,$id);
            $comment_param_names=$comment_param[0];
            $comment_param_score=$comment_param[1];
            $comments=$this->model->getcomment($id);
            $data=[$comment_param_names,$comments,$comment_param_score];
            $this->view('product/tab3',$data,1);

        }

        if ($number==3){
            $getquestions=$this->model->getQuestion($id);
            $questions=$getquestions[0];
            $answers=$getquestions[1];
            $data=[$questions,$answers];
            $this->view('product/tab4',$data,1);
        }

    }

    function addtobasket($productId,$color='',$garantee=''){
        echo  $this->model->addToBasket($productId,$color,$garantee);
    }



}
?>