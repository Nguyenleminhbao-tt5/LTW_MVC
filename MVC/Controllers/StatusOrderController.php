<?php

class StatusOrderController extends BaseController
{
    private $statusorder;
    private $listorder;
    private $numorder;
    private $customerid;
    public function __construct()
    {
        $this->loadModel('StatusOrderModel.php');
        $this->statusorder = new StatusOrderModel();
        $this->customerid = $_SESSION['CustomerID'];
        $this->listorder = $this->statusorder->joinOrder($this->customerid);
        $this->numorder = $this->statusorder->numOrder($this->customerid);
    }
    public function show()
    {
        $data = ['page' => 'StatusOrder', 'listorder' => $this->listorder, 'numorder' => $this->numorder];
        $this->view($data);
    }
    public function add()
    {

        $data = ['page' => 'StatusOrder'];
        $this->view($data);
    }
    public function delete()
    {
        $orderid = $_POST['orderid'];
        $state = $_POST['stateorder'];
        if ($state == 'Đang xác nhận') {
            $this->statusorder->deleteorder($orderid);
            header('Location:./index.php?url=StatusOrder');
        } else
            echo "<script language='javascript'>window.location = 'index.php?url=StatusOrder&error=1';</script>";
    }


}