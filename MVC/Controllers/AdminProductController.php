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
        $this->listShoes=$this->adminProduct->getALL();
        $this->listCategory=$this->adminProduct->getCategory();
    }
    public function show()
    {
       
        $data=['page'=>'AdminProduct','listShoes'=>$this->listShoes,
        'listCategory'=>$this->listCategory];
        $this->view($data);
    }
    public function add($error1='',$error2='')
    {   
 
        $data=['page'=>'AdminProductInsert','listCategory'=>$this->listCategory,
        'error1'=>$error1,'error2'=>$error2];
        $this->view($data);
    }
    public function insert()
    {
       
        $error1='';
        $error2='';
        for($i=0;$i<count($this->listShoes);$i++)
        {
            if($this->listShoes[$i]['ProductID']==$_POST['ProductID']) $error1='ID này đã tổn tại';
            if($this->listShoes[$i]['ProductName']==$_POST['ProductName']) $error2='Sản phẩm này đã tổn tại';   
        }

        if($error1!='' || $error2 !='')   header("Location:./index.php?url=AdminProduct/add/$error1/$error2");
        else
        {
            $ProductData=['ProductID'=>$_POST['ProductID'],'Type'=>$_POST['Type'],'ProductName'=>$_POST['ProductName'], 
            'Price'=>$_POST['Price'],'Description'=>$_POST['Description'],
            'PrimaryImg'=>$_POST['PrimaryImg'], 'Img1'=>$_POST['Img1'], 'Img2'=>$_POST['Img2']];
            $data=['page'=>'AdminPrimary','ProductData'=>$ProductData];
        
            $this->adminProduct->insertProduct($data);
            header('Location:./index.php?url=AdminProduct');
        }

    }
    public function delete($ProductID)
    {
       
        $this->adminProduct->deleteProduct($ProductID);
        header('Location:./index.php?url=AdminProduct');
    }
    public function update($ProductID)
    {
        $ProductData=['ProductID'=>$_POST['ProductID'],'Type'=>$_POST['Type'],'ProductName'=>$_POST['ProductName'], 
        'Price'=>$_POST['Price'],'PrimaryImg'=>$_POST['PrimaryImg'], 'Img1'=>$_POST['Img1'], 'Img2'=>$_POST['Img2']];

        $this->adminProduct->updateProduct($ProductData,$ProductID);
        header('Location:./index.php?url=AdminProduct');
    }
    public function edit($ProductID)
    {
        $Product=$this->adminProduct->getProductByID($ProductID);

        $data=['page'=>'AdminProductEdit','listCategory'=>$this->listCategory
       ,'Product'=>$Product];
        $this->view($data);
    }


}


?>