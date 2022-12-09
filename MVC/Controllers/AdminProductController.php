<?php

class AdminProductController extends BaseController
{
    private $adminProduct;
    private $listCategory;
    private $listShoes;
    public function __construct()
    {
        $this->loadModel('AdminProductModel.php');
        $this->adminProduct= new AdminProductModel();
    }
    public function show()
    {
        $this->listShoes=$this->adminProduct->getALL();
        $this->listCategory=$this->adminProduct->getCategory();
       
        $data=['page'=>'AdminProduct','listShoes'=>$this->listShoes,
        'listCategory'=>$this->listCategory];
        $this->view($data);
    }
    public function add()
    {   
        $this->listCategory=$this->adminProduct->getCategory();
        $data=['page'=>'AdminProductInsert','listCategory'=>$this->listCategory];
        $this->view($data);
    }
    public function insert()
    {
        $ProductData=['ProductID'=>$_POST['ProductID'],'Type'=>$_POST['Type'],'ProductName'=>$_POST['ProductName'], 
        'Price'=>$_POST['Price'],'Description'=>$_POST['Description'],
        'PrimaryImg'=>$_POST['PrimaryImg'], 'Img1'=>$_POST['Img1'], 'Img2'=>$_POST['Img2']];
        $data=['page'=>'AdminPrimary','ProductData'=>$ProductData];
       
        $this->adminProduct->insertProduct($data);
        header('Location:./index.php?url=AdminProduct');
    }
    public function delete($ProductID)
    {
       
        $this->adminProduct->deleteProduct($ProductID);
        header('Location:./index.php?url=AdminProduct/show');
    }
    public function update($ProductID)
    {
        $ProductData=['ProductID'=>$_POST['ProductID'],'Type'=>$_POST['Type'],'ProductName'=>$_POST['ProductName'], 
        'Price'=>$_POST['Price'],'PrimaryImg'=>$_POST['PrimaryImg'], 'Img1'=>$_POST['Img1'], 'Img2'=>$_POST['Img2']];

        $this->adminProduct->updateProduct($ProductData,$ProductID);
        header('Location:./index.php?url=AdminProduct');
    }


}


?>