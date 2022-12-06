<?php

class AdminUserController extends BaseController
{
    private $adminProduct;
    public function __construct()
    {
       // $this->loadModel('AdminProductModel.php');
       // $this->adminProduct= new AdminProductModel();
    }
    public function show()
    {

        $data=['page'=>'AdminUser'];
        $this->view($data);
    }



}


?>