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
        $data = ['page' => 'Login'];
        $this->view($data);
    }
    public function check()
    {
        $accountname = $_POST['AccountName'];
        $password = $_POST['Password'];
        $user = $this->login->getUser($accountname, $password);
        if (count($user) == 1) {
            $typeuser = $user[0]['Type'];
            if ($typeuser == 'Customer') {
                $listProduct = $this->login->getProduct();
                $data = ['Type' => $typeuser, 'listProduct' => $listProduct];
                $_SESSION['Avatar'] = $user[0]['Avatar'];
                $_SESSION['Name'] = $user[0]['FirstName'];
                $_SESSION['CustomerID'] = $user[0]['ID'];
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