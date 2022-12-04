<?php

class CategoryProductController extends BaseController
{
    private $categoryProduct;
    public function __construct()
    {
       $this->loadModel('CategoryProductModel.php');
       $this->categoryProduct= new CategoryProductModel ();

    }
    public function show()
    {
        $listCategory=$this->categoryProduct->getCategory();
        $listProduct=$this->categoryProduct->getProductByCategory($listCategory[0]['Type']);
        
        $data=['page'=>'CategoryProduct','listCategory'=>$listCategory
        ,'listProduct'=>$listProduct];
        $this->view($data);
    }
    public function select($id_category)
    {
        $listCategory=$this->categoryProduct->getCategory();
        $listProduct=$this->categoryProduct->getProductByCategory($listCategory[$id_category]['Type']);
        
        $data=['page'=>'CategoryProduct','listCategory'=>$listCategory
        ,'listProduct'=>$listProduct];
        $this->view($data);
    }
    public function filter ()
    {
        $selectPrice= $_POST['selectPrice'];
        $Type=$_POST['Type'];
        if($selectPrice!='0')
        {
            $listCategory=$this->categoryProduct->getCategory();
            $listProduct=$this->categoryProduct->filter($selectPrice,$Type);
        
            $data=['page'=>'CategoryProduct','listCategory'=>$listCategory
            ,'listProduct'=>$listProduct];
            $this->view($data);
        }
        else header('Location: ./index.php?url=CategoryProduct');
    }

}


?>