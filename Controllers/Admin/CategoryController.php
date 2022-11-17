<?php

class CategoryController extends BaseController
{
    private $categoryModel;
    public function __construct()
    {
        $this->loadModel('CategoryModel.php');
        $this->categoryModel= new CategoryModel();
    }

    public function insert()
    {
        return $this->view('/categorys/insert.php');
    }
    public function show()
    {
        $id=$_GET['id'];
        //$data=$this->categoryModel->getAll(['category_name','category_id'],2);
        $data=['category_id'=>115,'category_name'=>'bút','category_amount'=>999];
        $this->categoryModel->getUpdate($data,'category_id',$id);
    }
    public function edit()
    {
        $id=$_GET['id'];
        echo($this->categoryModel->getDelete('category_id',$id));
    }

}


?>