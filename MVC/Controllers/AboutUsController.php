<?php

class AboutUsController extends BaseController
{
    private $aboutus;
    public function __construct()
    {
        $this->loadModel('AboutUsModel.php');
        $this->aboutus = new AboutUsModel();
    }
    public function show()
    {
        $data = ['page' => 'AboutUs'];
        $this->view($data);
    }
}


?>