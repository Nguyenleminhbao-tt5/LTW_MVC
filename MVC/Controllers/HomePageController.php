<?php

class HomePageController extends BaseController
{
    private $homepage;
    public function __construct()
    {
        $this->loadModel('HomepageModel.php');
        $this->homepage= new HomePageModel();
      
    }
    public function show()
    {
    
        $listProduct=$this->homepage->getALL();
        $data=['page'=>'HomePage','listProduct'=>$listProduct];
        $this->view($data);
    }

}


?>