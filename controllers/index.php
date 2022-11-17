<?php
    class index extends Controller {
        function __construct() {

        }

        function index(){

            $slider1= $this->model->getslider1();
            $slider2= $this->model->getslider2();
            $onlyclicksite=$this->model->onlyclicksite();
            $directaccsess= $this->model->directaccsess();
            $data=[$slider1,$slider2,$onlyclicksite,$directaccsess];
            $this->view('index/index',$data);
        }


    }


?>