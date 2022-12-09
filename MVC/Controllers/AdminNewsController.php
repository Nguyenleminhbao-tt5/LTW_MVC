<?php

class AdminNewsController extends BaseController
{
    private $adminNews;
    public function __construct()
    {
        //$this->loadModel('AdminNewsModel.php');
       // $this->adminNews= new AdminNewsModel();
    }
    public function show()
    {

        $data=['page'=>'AdminNews'];
        $this->view($data);
    }
    public function add()
    {

        $data=['page'=>'AdminNewsInsert'];
        $this->view($data);
    }


}


?>