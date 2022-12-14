<?php

class FeedBackController extends BaseController
{
    private $feedback;
    private $customer_id;
    public function __construct()
    {
        $this->loadModel('FeedBackModel.php');
        $this->feedback = new FeedBackModel();
        $this->customer_id = $_SESSION['CustomerID'];
    }
    public function show()
    {
        $feedbacks = $this->feedback->getfeedback();
        $data = ['page' => 'FeedBack', 'Feedbacks' => $feedbacks];
        $this->view($data);
    }
    public function insert()
    {
        $title = $_POST['Title'];
        $content = $_POST['Content'];
        $data = ['Title' => $title, 'CustomerID' => $this->customer_id, 'Content' => $content, 'Time' => date("Y-m-d h:i:sa")];
        $this->feedback->add($data);
        header('Location:./index.php?url=FeedBack');
    }
}


?>