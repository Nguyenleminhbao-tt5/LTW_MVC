<?php

class BaseController 
{
    
    private $pathView = './Views/frontend/Admin';
    private $pathModel= './Models/';

    // lên view để xử lý
    protected function view($path)
    {   
        require $this->pathView.$path;
    }
    // khai báo class Models
    protected function loadModel($path)
    {
        require $this->pathModel.$path;
    }
}


?>
