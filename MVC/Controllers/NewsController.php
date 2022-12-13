<?php

class NewsController extends BaseController
{
    private $news;
    public function __construct()
    {
        $this->loadModel('NewsModel.php');
        $this->news= new NewsModel();
    }
    public function show()
    {
        $listnews = $this->news->getnews();
        $data = ['page' => 'News', 'News'=>$listnews];
        $this->view($data);
    }

}


?>