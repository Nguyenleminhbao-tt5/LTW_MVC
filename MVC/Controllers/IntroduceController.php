<?php

class IntroduceController extends BaseController
{
    private $introduce;
    public function __construct()
    {
       // $this->loadModel('IntroduceModel.php');
       // $this->Introduce= new IntroduceModel();
      
    }
    public function show()
    {
        $data=['page'=>'Introduce'];
        $this->view($data);
    }

}


?>