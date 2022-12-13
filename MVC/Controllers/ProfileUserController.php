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
        $this->customerid = $_SESSION['CustomerID'];
        $this->profile = $this->profileuser->getprofile($this->customerid);
    }
    public function show()
    {
        $data = ['page' => 'ProfileUser', 'profile' => $this->profile];
        $this->view($data);
    }
    public function modify()
    {
        $avatar = $_POST['Avatar'];
        $lastname = $_POST['LastName'];
        $firstname = $_POST['FirstName'];
        $gender = $_POST['Gender'];
        $dob = $_POST['DoB'];
        $phonenumber = $_POST['PhoneNumber'];
        $email = $_POST['Email'];
        $address = $_POST['Address'];
        //Kiem tra du lieu
        $check = true;
        if (strlen($lastname) > 50 || strlen($lastname) < 2) {
            echo "<script language='javascript'>window.location = 'index.php?url=ProfileUser&error=1';</script>";
            $check = false;
        }
        if (strlen($firstname) > 50 || strlen($firstname) < 2) {
            echo "<script language='javascript'>window.location = 'index.php?url=ProfileUser&error=2';</script>";
            $check = false;
        }
        if ($gender != "Nam" && $gender != "Nữ" && $gender != "Không") {
            echo "<script language='javascript'>window.location = 'index.php?url=ProfileUser&error=3';</script>";
            $check = false;
        }
        $format = 'Y-m-d';
        $d = DateTime::createFromFormat($format, $dob);
        $checkdate = $d && $d->format($format) === $dob;
        if (!$checkdate) {
            echo "<script language='javascript'>window.location = 'index.php?url=ProfileUser&error=4';</script>";
            $check = false;
        }
        if (!preg_match('/^[0-9]{10}+$/', $phonenumber)) {
            echo "<script language='javascript'>window.location = 'index.php?url=ProfileUser&error=5';</script>";
            $check = false;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script language='javascript'>window.location = 'index.php?url=ProfileUser&error=6';</script>";
            $check = false;
        }
        if (strlen($address) > 255) {
            echo "<script language='javascript'>window.location = 'index.php?url=ProfileUser&error=7';</script>";
            $check = false;
        }
        if ($check) {
            if ($avatar != "") {
                $_SESSION['Avatar'] = $avatar;
            } else
                $avatar = $_SESSION['Avatar'];
            $_SESSION['Name'] = $firstname;
            $data = ['Gender' => $gender, 'DoB' => $dob, 'FirstName' => $firstname, 'LastName' => $lastname, 'Email' => $email, 'PhoneNumber' => $phonenumber, 'Address' => $address, 'Avatar' => $avatar];
            $this->profileuser->modified($data, $this->customerid);
            header('Location:./index.php?url=ProfileUser');
        }
    }
    public function changepassword()
    {
        $getoldpass = $this->profileuser->getoldpass($this->customerid);
        $oldpass = $_POST['OldPassword'];
        $check = true;
        if ($getoldpass != $oldpass) {
            echo "<script language='javascript'>window.location = 'index.php?url=ProfileUser&error=8';</script>";
            $check = false;
        }
        $newpass = $_POST['NewPassword'];
        $again = $_POST['AgainNewPassword'];
        if (strlen($newpass) < 5 || strlen($newpass) > 50) {
            echo "<script language='javascript'>window.location = 'index.php?url=ProfileUser&error=9';</script>";
            $check = false;
        }
        if ($newpass != $again) {
            echo "<script language='javascript'>window.location = 'index.php?url=ProfileUser&error=10';</script>";
            $check = false;
        }
        if ($check) {
            $data = ['Password' => $newpass];
            $this->profileuser->modified($data, $this->customerid);
            header('Location:./index.php?url=ProfileUser');
        }
        var_dump($check);
    }
    public function logout()
    {
        session_unset();
        header("Location:./index.php?url=HomePage");
    }
}