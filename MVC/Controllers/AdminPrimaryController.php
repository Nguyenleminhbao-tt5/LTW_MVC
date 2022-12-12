<?php

class AdminPrimaryController extends BaseController
{
    private $adminPrimary;
    private $listCategory;
    private $listPublisher;
    private $listBook;
    public function __construct()
    {
        $this->loadModel('AdminPrimaryModel.php');
        $this->adminPrimary= new AdminPrimaryModel();
      //  $this->listCategory=$this->adminPrimary->getCategory();
      //  $this->listPublisher=$this->adminPrimary->getPublisher();
      //  $this->listBook=$this->adminPrimary->getALL();
    }
    public function show()
    {

        $data=['page'=>'AdminPrimary','listCategory'=>$this->listCategory,
        'listPublisher'=>$this->listPublisher,'listBook'=>$this->listBook];
        $this->view($data);
    }
    public function edit($BookID)
    {
        $book=$this->adminPrimary->getBookByID($BookID);

        $data=['page'=>'AdminEdit','listCategory'=>$this->listCategory,
        'listPublisher'=>$this->listPublisher,'book'=>$book];
        $this->view($data);
    }
    public function insert()
    {
        $BookData=['BookID'=>$_POST['BookID'],'Type'=>$_POST['Type'],'Description'=>$_POST['Description'],
        'Price'=>$_POST['Price'],'BookName'=>$_POST['BookName'], 'PublisherName'=>$_POST['PublisherName'],
        'BookFile'=>$_POST['BookFile'], 'image1'=>$_POST['image1'], 'image2'=>$_POST['image2']];
        $data=['page'=>'AdminPrimary','BookData'=>$BookData,'listBook'=>$this->listBook];
       
        $this->adminPrimary->insertBook($data);
        header('Location:./index.php?url=AdminPrimary');
    }
    public function update($BookID)
    {
        $BookData=['BookID'=>$_POST['BookID'],'Type'=>$_POST['Type'],'Description'=>$_POST['Description'],
        'Price'=>$_POST['Price'],'BookName'=>$_POST['BookName'], 'PublisherName'=>$_POST['PublisherName'],
        'BookFile'=>$_POST['BookFile'], 'image1'=>$_POST['image1'], 'image2'=>$_POST['image2']];

        $this->adminPrimary->updateBook($BookData,$BookID);
        header('Location:./index.php?url=AdminPrimary');
    }
    public function delete($BookID)
    {
        $this->adminPrimary->deleteBook($BookID);
        header('Location:./index.php?url=AdminPrimary');
    }
    

}


?>