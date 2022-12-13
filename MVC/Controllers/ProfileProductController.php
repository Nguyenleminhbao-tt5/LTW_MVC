<?php

class ProfileProductController extends BaseController
{
    private $profileProduct;
    public function __construct()
    {
        $this->loadModel('ProfileProductModel.php');
        $this->profileProduct = new ProfileProductModel();
    }
    public function show($id)
    {
        $detailProduct = $this->profileProduct->getFind('ProductID', $id);
        $data = ['page' => 'ProfileProduct', 'detailProduct' => $detailProduct];
        $this->view($data);
    }

}


?>