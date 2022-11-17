<?php
    class adminsetting extends Controller{
        function __construct(){
            parent::__construct();
        }

        function index(){
            $this->view('admin/setting/index');
        }
    }
?>