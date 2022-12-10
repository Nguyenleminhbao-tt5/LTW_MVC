<?php

class BaseController 
{
    
    private $pathViewDefault = './MVC/Views/Layout/DefaultLayout.php';
    private $pathViewLayout1 = './MVC/Views/Layout/Layout1.php';
    private $pathViewLayoutAdmin = './MVC/Views/Layout/LayoutAdmin.php';
    private $pathViewLayoutAccount = './MVC/Views/Layout/LayoutAccount.php';
    private $pathModel= './MVC/Models/';
    private $accountName ='';
    private $accountAvatar='';

    // lên view để xử lý
    protected function view($data)
    {   

        if(!empty($data['accountName'])) $this->accountName=$data['accountName'];
        if(!empty($data['accountAvatar'])) $this->accountName=$data['accountAvatar'];


        
        if($data['page']=='Login') require $this->pathViewLayout1;
        else if($data['page']=='Register') require $this->pathViewLayout1;
        else if (substr($data['page'],0,5)=='Admin') require $this->pathViewLayoutAdmin;
        else if (!empty($data['accountName'])) require $this->pathViewLayoutAccount;
        else require $this->pathViewDefault;
    }
    // khai báo class Models
    protected function loadModel($path)
    {
        require $this->pathModel.$path;
    }
}


?>
