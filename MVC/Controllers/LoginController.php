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
        
        $listUser=$this->login->getUser();

        if($_POST['EmailLogin']=='admin@gmail.com' && $_POST['PasswordLogin']=='31201021080')
        {
            header('Location: ./index.php?url=AdminPrimary');
        }
        else
        {  
            for($i=0;$i<count($listUser);$i++)
            {
                if($i==0) continue;
                if($listUser[$i]['AccountName']==$_POST['EmailLogin']
                && $listUser[$i]['Password']==$_POST['PasswordLogin'])
                {
                    //header('Location: ./index.php');
                    $data=['page'=>'HomePage','accountName'=>$listUser[$i]['LastName'],'accountAvatar'=>$listUser[$i]['Avatar']];
                    $this->view($data);
                }
            }
            $this->view($data);

            
        }
        
    }

}


?>