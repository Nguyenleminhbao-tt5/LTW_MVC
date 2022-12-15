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
        $listCategory=$this->profileProduct->getCategory();
        $detailProduct = $this->profileProduct->getFind('ProductID', $id);
        $comments = $this->profileProduct->getComment($id);
        $data = ['page' => 'ProfileProduct', 'detailProduct' => $detailProduct, 'Comments' => $comments,
        'listCategory'=>$listCategory];
        $this->view($data);
    }
    public function comment()
    {
        $time = date("Y-m-d h:i:sa");
        if (!isset($_SESSION['CustomerID'])) {
            header("Location:./index.php?url=Login");
        }
        $customerid = $_SESSION['CustomerID'];
        $content = $_POST['Comment'];
        $productid = $_POST['ProductID'];
        $check = true;
        if (strlen($content) > 100) {
            $_SESSION['error'] = "1";
            $check = false;
            $this->show($productid);        }
        if ($check) {
            $data = ['ProductID' => $productid, 'CustomerID' => $customerid, 'Time' => $time, 'Content' => $content];
            $this->profileProduct->insertcomment($data);
            $this->show($productid);
        }
    }
}


?>