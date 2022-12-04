<?php

class LoginController extends BaseController
{
    private $login;
    public function __construct()
    {
        $this->loadModel('LoginModel.php');
        $this->login= new LoginModel();
      
    }
    public function show()
    {
        $data=['page'=>'Login'];
        $this->view($data);
    }
    public function check()
    {
        $data=['page'=>'Login'];
        
        $listCustomer=$this->login->getCustomer();

        if($_POST['EmailLogin']=='admin@gmail.com' && $_POST['PasswordLogin']=='31201021080')
        {
            header('Location: ./index.php?url=AdminPrimary');
        }
        else
        {  
            for($i=0;$i<count($listCustomer);$i++)
            {
                if($listCustomer[$i]['AccountName']==$_POST['EmailLogin']
                && $listCustomer[$i]['Password']==$_POST['PasswordLogin'])
                {
                    header('Location: ./index.php');
                }
            }
            $this->view($data);
        }
    }

}


?>