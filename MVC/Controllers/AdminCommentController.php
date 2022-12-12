<?php

class AdminCommentController extends BaseController
{
    private $adminComment;
    public function __construct()
    {
        //$this->loadModel('AdminCommentModel.php');
       // $this->adminComment= new AdminCommentModel();
    }
    public function show()
    {

        $data=['page'=>'AdminComment'];
        $this->view($data);
    }
    public function add()
    {

        $data=['page'=>'AdminCommentInsert'];
        $this->view($data);
    }


}


?>