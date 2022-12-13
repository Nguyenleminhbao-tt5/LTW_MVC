<?php

class HomePageController extends BaseController
{
    private $homepage;
    private $listProduct;
    public function __construct()
    {
        $this->loadModel('HomepageModel.php');
        $this->homepage= new HomePageModel(); 
    }
    public function show()
    {
    
        $this->listProduct=$this->homepage->getALL();
        $data=['page'=>'HomePage','listProduct'=>$this->listProduct];
        $this->view($data);
    }

}


?>