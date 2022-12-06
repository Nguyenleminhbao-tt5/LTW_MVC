<?php

class AdminProductController extends BaseController
{
    private $adminProduct;
    private $listCategory;
    private $listPublisher;
    private $listBook;
    public function __construct()
    {
        $this->loadModel('AdminProductModel.php');
        $this->adminProduct= new AdminProductModel();
    }
    public function show()
    {

        $data=['page'=>'AdminProduct'];
        $this->view($data);
    }
    

}


?>