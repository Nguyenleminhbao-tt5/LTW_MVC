<?php

class BaseController
{

    private $pathViewDefault = './MVC/Views/Layout/DefaultLayout.php';
    private $pathViewLayout1 = './MVC/Views/Layout/Layout1.php';
    private $pathViewLayoutAdmin = './MVC/Views/Layout/LayoutAdmin.php';
    private $pathViewLayoutAccount = './MVC/Views/Layout/LayoutAccount.php';
    private $pathModel = './MVC/Models/';
    // lên view để xử lý
    protected function view($data)
    {

        if (!empty($data['page'])) {
            if ($data['page'] == 'Login') {
                require $this->pathViewLayout1;
            } else if ($data['page'] == 'Register') {
                require $this->pathViewLayout1;
            } else if (!empty($_SESSION['Type']) && $_SESSION['Type'] == 'Customer') {
                require $this->pathViewLayoutAccount;
            } else if ( !empty($_SESSION['Type']) && $_SESSION['Type'] == 'Admin') {
                require $this->pathViewLayoutAdmin;
            } else {
                require $this->pathViewDefault;
            }
        } else {
            if (!empty($data['Type'])) {
                if ($data['Type'] == 'Customer') {
                    $_SESSION['Type'] = 'Customer';
                    header('Location: ./index.php');
                } else if ($data['Type'] == 'Admin') {
                    $_SESSION['Type'] = 'Admin';
                    header('Location: ./index.php?url=AdminPrimary');
                }
            }
        }
    }
    // khai báo class Models
    protected function loadModel($path)
    {
        require $this->pathModel . $path;
    }
}


?>