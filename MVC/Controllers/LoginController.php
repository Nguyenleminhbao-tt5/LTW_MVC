<?php

class LoginController extends BaseController
{
    private $login;
    public function __construct()
    {
        $this->loadModel('LoginModel.php');
        $this->login = new LoginModel();

    }
    public function show()
    {
        $data = ['page' => 'Login', 'Type' => "", 'ID' => ""];
        $this->view($data);
    }
    public function check()
    {
        $accountname = $_POST['AccountName'];
        $password = $_POST['Password'];
        $user = $this->login->getUser($accountname, $password);
        if (count($user) == 1) {
            $typeuser = $user[0]['Type'];
            $userid = $user[0]['ID'];
            $username = $user[0]['FirstName'];
            $avatar = $user[0]['Avatar'];
            if ($typeuser == 'Customer') {
                $listProduct = $this->login->getProduct();
                $data = ['Type' => $typeuser, 'listProduct' => $listProduct];
                $_SESSION['Avatar'] = $user[0]['Avatar'];
                $_SESSION['Name'] = $user[0]['LastName'];
            } else if ($typeuser == 'Admin') {
                $data = ['Type' => $typeuser];
            }
            $this->view($data);
        } else {
            echo "<script language='javascript'>window.location = 'index.php?url=Login&error=1';</script>";
        }
    }

}


?>