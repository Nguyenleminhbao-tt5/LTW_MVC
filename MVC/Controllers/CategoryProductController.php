<?php

class CategoryProductController extends BaseController
{
    private $categoryProduct;
    private $listCategory;
    public function __construct()
    {
       $this->loadModel('CategoryProductModel.php');
       $this->categoryProduct= new CategoryProductModel ();

    }
    public function show()
    {
        $this->listCategory=$this->categoryProduct->getCategory();

       
        $listProduct=$this->categoryProduct->getProductByCategory($this->listCategory[0]['Type']);
        
        $numPage= ceil(count($listProduct)/4);
       
        
        $data=['page'=>'CategoryProduct','listCategory'=>$this->listCategory,'listProduct'=>$listProduct,'numPage'=>$numPage];
        $this->view($data);
    }
    public function select($id_category)
    {
        $this->listCategory=$this->categoryProduct->getCategory();
        $listProduct=$this->categoryProduct->getProductByCategory($this->listCategory[$id_category]['Type']);
        $numPage= ceil(count($listProduct)/4);
        $selectType=$this->listCategory[$id_category]['Type'];

        $data=['page'=>'CategoryProduct','listCategory'=>$this->listCategory
        ,'listProduct'=>$listProduct,'numPage'=>$numPage,'selectType'=>$selectType];
        $this->view($data);
    }
    public function filter ()
    {
        $selectPrice= $_POST['selectPrice'];
        $Type=$_POST['Type'];
        if($selectPrice!='0')
        {
            $this->listCategory=$this->categoryProduct->getCategory();
            $listProduct=$this->categoryProduct->filter($selectPrice,$Type);
            $numPage= ceil(count($listProduct)/4);
            $data=['page'=>'CategoryProduct','listCategory'=>$this->listCategory
            ,'listProduct'=>$listProduct,'numPage'=>$numPage];
        
            $this->view($data);
        }
        else header('Location: ./index.php?url=CategoryProduct');
    }
   
    public function page($currentPage,$Type)

    {
        $this->listCategory=$this->categoryProduct->getCategory();
        $listProduct=$this->categoryProduct->getPage($Type);
        $numPage= ceil(count($listProduct)/4);

        $data=['page'=>'CategoryProduct','listCategory'=>$this->listCategory
        ,'listProduct'=>$listProduct,'currentPage'=>$currentPage,'numPage'=>$numPage];
        $this->view($data);
    }

}


?>