<?php

    class Controller{
        function __construct(){
        }
        function view($viewurl,$data=[],$noincludeheaderandfooter=''){

            if ($noincludeheaderandfooter=='') {
                require('header.php');
                require('views/' . $viewurl . '.php');
                require('footer.php');
            }
            else{
                require('views/' . $viewurl . '.php');
            }

        }
        function model($modelurl){
            require ('models/model_'.$modelurl.'.php');
            $classname='model_'.$modelurl;
            $this-> model=new $classname;
        }
    }


?>