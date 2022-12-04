<?php

class RegisterController extends BaseController
{
    private $register;
    public function __construct()
    {
        $this->loadModel('RegisterModel.php');
        $this->register= new RegisterModel();
      
    }
    public function show()
    {
        $data=['page'=>'Register'];
        $this->view($data);
    }
    public function up()
    {
        $data=['Email'=>$_POST['Email'],'Password'=>$_POST['Password'],
        'FirstName'=>$_POST['FirstName'],'LastName'=>$_POST['LastName']
        ];
        $this->register->upAccount($data);
        header('Location: ./index.php?url=Login');

    }

}


?>