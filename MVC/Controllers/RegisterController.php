<?php

class RegisterController extends BaseController
{
    private $register;
    public function __construct()
    {
        $this->loadModel('RegisterModel.php');
        $this->register = new RegisterModel();

    }
    public function show()
    {
        $data = ['page' => 'Register'];
        $this->view($data);
    }
    public function up()
    {
        $check = true;
        $accountname = $_POST['AccountName'];
        $password = $_POST['Password'];
        $again = $_POST['AgainPassword'];
        $fname = $_POST['FirstName'];
        $lname = $_POST['LastName'];
        var_dump($this->register->getAccount($accountname));
        if (strlen($accountname) > 20 || strlen($accountname) < 5) {
            echo "<script language='javascript'>window.location = 'index.php?url=Register&error=1';</script>";
            $check = false;
        }
        if (count($this->register->getAccount($accountname)) > 0) {
            echo "<script language='javascript'>window.location = 'index.php?url=Register&error=2';</script>";
            $check = false;
        }
        if (strlen($password) > 50 || strlen($password) < 5) {
            echo "<script language='javascript'>window.location = 'index.php?url=Register&error=3';</script>";
            $check = false;
        }
        if ($password != $again) {
            echo "<script language='javascript'>window.location = 'index.php?url=Register&error=4';</script>";
            $check = false;
        }
        if (strlen($lname) > 50 || strlen($lname) < 2) {
            echo "<script language='javascript'>window.location = 'index.php?url=Register&error=5';</script>";
            $check = false;
        }
        if (strlen($fname) > 20 || strlen($fname) < 2) {
            echo "<script language='javascript'>window.location = 'index.php?url=Register&error=6';</script>";
            $check = false;
        }
        if ($check) {
            $data = [
                'AccountName' => $accountname,
                'Password' => $password,
                'FirstName' => $fname,
                'LastName' => $lname
            ];
            $this->register->upAccount($data);
            header('Location: ./index.php?url=Login&success=1');
        }
    }

}


?>