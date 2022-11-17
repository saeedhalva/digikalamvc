<?php
class App{

    public $controller="index";
    public $method="index";
    public $params=[];


    function __construct(){
        if(isset($_GET['url'])) {

            $url = $_GET['url'];
            $url = $this->parseurl($url);
            $this->controller = $url[0];
            unset($url[0]);
            if(isset($url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
            $this->params = array_values($url);
        }
        $controllerurl='controllers/'.$this->controller.'.php';
        if(file_exists($controllerurl)){
            require ( $controllerurl);
            $object=new $this->controller;
            if (method_exists($object,'model')){
            $object->model($this->controller);
            }
            if(method_exists($object,$this->method)){
                call_user_func_array([$object,$this->method],$this->params);
            }

        }

    }

    function parseurl($url){
        filter_var($url,FILTER_SANITIZE_URL);
        $url=rtrim($url,'/');
        $url=explode('/',$url);
        return $url;
    }






}




?>