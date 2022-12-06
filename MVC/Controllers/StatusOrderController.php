<?php

class StatusOrderController extends BaseController
{
    private $statusorder;
    public function __construct()
    {
        // $this->loadModel('PayModel.php');
        // $this->pay= new PayModel();

    }
    public function show()
    {
        $data = ['page' => 'StatusOrder'];
        $this->view($data);
    }

}


?>