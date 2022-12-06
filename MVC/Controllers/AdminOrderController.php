<?php

class AdminOrderController extends BaseController
{
    private $adminOrder;
    public function __construct()
    {
        //$this->loadModel('AdminOrderModel.php');
       // $this->adminOrder= new AdminOrderModel();
    }
    public function show()
    {

        $data=['page'=>'AdminOrder'];
        $this->view($data);
    }
    public function add()
    {

        $data=['page'=>'AdminOrderInsert'];
        $this->view($data);
    }


}


?>