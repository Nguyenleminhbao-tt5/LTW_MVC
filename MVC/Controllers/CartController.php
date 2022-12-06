<?php

class CartController extends BaseController
{
    private $homepage;
    public function __construct()
    {
        $this->loadModel('CartModel.php');
        $this->homepage= new CartModel();
      
    }
    public function show()
    {
    
        $data=['page'=>'Cart'];
        $this->view($data);
    }

}


?>