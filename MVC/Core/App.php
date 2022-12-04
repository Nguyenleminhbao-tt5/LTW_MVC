<?php

// khai báo class Database
require './MVC/Core/Database.php';
// khai báo class BaseController
require './MVC/Controllers/BaseController.php';
// khai báo class BaseModel
require './MVC/Models/BaseModel.php';

class App 
{
    protected $controller="HomePageController";
    protected $action="show";
    protected $params=[];
    protected $obj;

    function __construct(){
 
  
        $arr = $this->UrlProcess();

        // Controller !empty($arr[0]) &&
        if(  file_exists("./MVC/Controllers/".$arr[0]."Controller.php") ){
            $this->controller = $arr[0].'Controller';
            unset($arr[0]);
        }
        require_once "./MVC/Controllers/". $this->controller .".php";
        $this->obj = new $this->controller;
        

        // Action
        if(isset($arr[1])){
            if( method_exists( $this->controller , $arr[1]) ){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        // Params
        $this->params = $arr?array_values($arr):[];
        
        call_user_func_array([$this->obj, $this->action], $this->params );
        

    }

    function UrlProcess(){
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
};

