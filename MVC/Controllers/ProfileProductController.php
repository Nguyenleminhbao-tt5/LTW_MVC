<?php

class ProfileProductController extends BaseController
{
    private $profileProduct;
    public function __construct()
    {
        // $this->loadModel('ProfileProductModel.php');
        // $this->profileProduct = new ProfileProductModel();
    }
    public function show(/*$id*/)
    {
        // $detailProduct = $this->profileProduct->getFind('product', $id);
        //$detailProduct = $this->profileProduct->getFind('ProductID', 1);
        //$data = ['page' => 'ProfileProduct', 'detailProduct' => $detailProduct];
        $data = ['page' => 'ProfileProduct'];
        $this->view($data);
    }

}


?>