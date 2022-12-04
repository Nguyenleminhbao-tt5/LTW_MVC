<?php

class BaseController 
{
    
    private $pathViewDefault = './MVC/Views/Layout/DefaultLayout.php';
    private $pathViewLayout1 = './MVC/Views/Layout/Layout1.php';
    private $pathViewLayoutAdmin = './MVC/Views/Layout/LayoutAdmin.php';
    private $pathModel= './MVC/Models/';

    // lên view để xử lý
    protected function view($data)
    {   
        if($data['page']=='Login') require $this->pathViewLayout1;
        else if($data['page']=='Register') require $this->pathViewLayout1;
        else if ($data['page']=='AdminPrimary') require $this->pathViewLayoutAdmin;
        else if ($data['page']=='AdminEdit') require $this->pathViewLayoutAdmin;
        else require $this->pathViewDefault;
    }
    // khai báo class Models
    protected function loadModel($path)
    {
        require $this->pathModel.$path;
    }
}


?>
