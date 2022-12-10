<?php

class AdminUserController extends BaseController
{
    private $adminUser;
    private $listUser;
    public function __construct()
    {
        $this->loadModel('AdminUserModel.php');
        $this->adminUser= new AdminUserModel();
        $this->listUser= $this->adminUser->getALL();
    }
    public function show()
    {
        $data=['page'=>'AdminUser','listUser'=>$this->listUser];
        $this->view($data);
    }
    public function delete($ID)
    {
        
        if($ID !=1) $this->adminUser->deleteUser($ID);
        header('Location:./index.php?url=AdminUser');
    }



}


?>