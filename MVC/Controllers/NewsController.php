<?php

class NewsController extends BaseController
{
    private $homepage;
    public function __construct()
    {
        // $this->loadModel('NewsModel.php');
        // $this->homepage= new NewsModel();

    }
    public function show()
    {

        $data = ['page' => 'News'];
        $this->view($data);
    }

}


?>