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
    public function add()
    {   
 
        $data=['page'=>'AdminProductInsert','listCategory'=>$this->listCategory];
        $this->view($data);
    }
    public function insert()
    {
       
        for($i=0;$i<count($this->listShoes);$i++)
        {
            if($this->listShoes[$i]['ProductID']==$_POST['ProductID']) echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/add&error=1';</script>";
            if($this->listShoes[$i]['ProductName']==$_POST['ProductName']) echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/add&error=2';</script>";   
        }
        $check=true;
        if(!empty($_POST['Amount']) && $_POST['Amount']<0 ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/add&error=3';</script>";
            $check=false;
        }
        if(!empty($_POST['Price']) && $_POST['Price']<0 ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/add&error=4';</script>";
            $check=false;
        }
        if($_POST['ProductID']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/add&error=8';</script>";
            $check=false;
        }
        if($_POST['ProductName']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/add&error=9';</script>";
            $check=false;
        }
        if($_POST['Amount']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/add&error=10';</script>";
            $check=false;
        }
        if($_POST['Price']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/add&error=11';</script>";
            $check=false;
        }
        if($_POST['PrimaryImg']=='') 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/add&error=5';</script>";
            $check=false;
        }
        if($_POST['Img1']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/add&error=6';</script>";
            $check=false;
        }
        if($_POST['Img2']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/add&error=7';</script>";
            $check=false;
        }
      
        if($check)
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
        $check=true;
        if(!empty($_POST['Amount']) && $_POST['Amount']<0 ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/edit/$ProductID&error=3';</script>";
            $check=false;
        }
        if(!empty($_POST['Price']) && $_POST['Price']<0 ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/edit/$ProductID&error=4';</script>";
            $check=false;
        }
        if($_POST['ProductID']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/edit/$ProductID&error=8';</script>";
            $check=false;
        }
        if($_POST['ProductName']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/edit/$ProductID&error=9';</script>";
            $check=false;
        }
        if($_POST['Amount']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/edit/$ProductID&error=10';</script>";
            $check=false;
        }
        if($_POST['Price']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/edit/$ProductID&error=11';</script>";
            $check=false;
        }
        if($_POST['PrimaryImg']=='') 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/edit/$ProductID&error=5';</script>";
            $check=false;
        }
        if($_POST['Img1']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/edit/$ProductID&error=6';</script>";
            $check=false;
        }
        if($_POST['Img2']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminProduct/edit/$ProductID&error=7';</script>";
            $check=false;
        }
      
        if($check)
        {
            $ProductData=['ProductID'=>$_POST['ProductID'],'Type'=>$_POST['Type'],'ProductName'=>$_POST['ProductName'], 
            'Price'=>$_POST['Price'],'PrimaryImg'=>$_POST['PrimaryImg'], 'Img1'=>$_POST['Img1'], 'Img2'=>$_POST['Img2']];
    
            $this->adminProduct->updateProduct($ProductData,$ProductID);
            header('Location:./index.php?url=AdminProduct');
        }
       
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