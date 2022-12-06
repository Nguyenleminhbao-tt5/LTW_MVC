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
        // $detailProduct = $this->profileProduct->getFind('BookID', $id);
        // $data = ['page' => 'ProfileProduct', 'detailProduct' => $detailProduct];
        $data = ['page' => 'ProfileProduct'];
        $this->view($data);
    }

}


?>