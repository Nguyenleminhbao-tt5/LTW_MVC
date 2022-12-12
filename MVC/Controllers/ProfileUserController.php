<?php

class ProfileUserController extends BaseController
{
    private $profileuser;
    private $customerid;
    private $profile;
    public function __construct()
    {
        $this->loadModel('ProfileUserModel.php');
        $this->profileuser = new ProfileUserModel();
        $this->customerid=1;
        $this->profile = $this->profileuser->getprofile($this->customerid);
    }
    public function show()
    {
        $data = ['page' => 'ProfileUser', 'profile'=>$this->profile];
        $this->view($data);
    }

}