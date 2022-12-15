<?php

class AdminOrderController extends BaseController
{
    private $adminOrder;
    public function __construct()
    {
        $this->loadModel('AdminOrderModel.php');
        $this->adminOrder= new AdminOrderModel();
    }
    public function show()
    {   
        $listCustomer=$this->adminOrder->getCustomer();
        $listOrder=$this->adminOrder->getOrder();

        
        $data=['page'=>'AdminOrder','listCustomer'=>$listCustomer,'listOrder'=>$listOrder];
        $this->view($data);
    }
    public function delete($OrderID)
    {
        $this->adminOrder->deleteOrder($OrderID);
        header('location:./index.php?url=AdminOrder');
    }


}


?>