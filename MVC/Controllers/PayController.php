<?php

class PayController extends BaseController
{
    private $pay;
    public function __construct()
    {
        $this->loadModel('PayModel.php');
        $this->pay= new PayModel();
      
    }
    public function show()
    {
        $data=['page'=>'Pay'];
        $this->view($data);
    }

}


?>