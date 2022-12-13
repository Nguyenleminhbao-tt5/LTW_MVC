<?php
if (!isset($_SESSION)) {
    session_start();
}
class PayController extends BaseController
{
    private $pay;
    private $order;
    private $customerid;
    public function __construct()
    {
        $this->loadModel('PayModel.php');
        $this->pay = new PayModel();
        $this->customerid = $_SESSION['CustomerID'];
        $this->order = $this->pay->order($this->customerid);
    }
    public function show()
    {
        $data = ['page' => 'Pay', 'order' => $this->order];
        $this->view($data);
    }
    public function insert()
    {
        $fullname = "";
        $email = "";
        $phonenumber = "";
        $address = "";
        $note = "";
        $paytype = "";
        $city = "";
        $district = "";
        $ward = "";
        $check = true;
        if (isset($_POST['fullname'])) {
            $fullname = $_POST['fullname'];
        }
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }
        if (isset($_POST['phonenumber'])) {
            $phonenumber = $_POST['phonenumber'];
        }
        if (isset($_POST['address'])) {
            $address = $_POST['address'];
        }
        if (isset($_POST['note'])) {
            $note = $_POST['note'];
        }
        if (isset($_POST['paytype'])) {
            $paytype = $_POST['paytype'];
        }
        if (isset($_POST['city'])) {
            $city = $_POST['city'];
        }
        if (isset($_POST['district'])) {
            $district = $_POST['district'];
        }
        if (isset($_POST['ward'])) {
            $ward = $_POST['ward'];
        }
        if ($fullname == "") {
            echo "<script language='javascript'>window.location = 'index.php?url=Pay&error=1';</script>";
            $check = false;
        }
        if ($email == "") {
            echo "<script language='javascript'>window.location = 'index.php?url=Pay&error=2';</script>";
            $check = false;
        }
        if ($phonenumber == "") {
            echo "<script language='javascript'>window.location = 'index.php?url=Pay&error=3';</script>";
            $check = false;
        }
        if ($address == "") {
            echo "<script language='javascript'>window.location = 'index.php?url=Pay&error=4';</script>";
            $check = false;
        }
        if ($city == "") {
            echo "<script language='javascript'>window.location = 'index.php?url=Pay&error=5';</script>";
            $check = false;
        }
        if ($district == "") {
            echo "<script language='javascript'>window.location = 'index.php?url=Pay&error=6';</script>";
            $check = false;
        }
        if ($ward == "") {
            echo "<script language='javascript'>window.location = 'index.php?url=Pay&error=7';</script>";
            $check = false;
        }
        if ($paytype == "") {
            echo "<script language='javascript'>window.location = 'index.php?url=Pay&error=8';</script>";
            $check = false;
        }
        //Kiem tra name
        if (strlen($fullname) < 2 || strlen($fullname) > 50) {
            echo "<script language='javascript'>window.location = 'index.php?url=Pay&error=9';</script>";
            $check = false;
        }
        //Kiem tra email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script language='javascript'>window.location = 'index.php?url=Pay&error=10';</script>";
            $check = false;
        }
        //Kiem tra so dien thoai 
        if (!preg_match('/^[0-9]{10}+$/', $phonenumber)) {
            echo "<script language='javascript'>window.location = 'index.php?url=Pay&error=11';</script>";
            $check = false;
        }
        //Kiem tra dia chi tranh bi spam
        if (strlen($address) < 2 || strlen($address) > 255) {
            echo "<script language='javascript'>window.location = 'index.php?url=Pay&error=12';</script>";
            $check = false;
        }
        //Kiem tra ghi chu
        if (strlen($note) > 1000) {
            echo "<script language='javascript'>window.location = 'index.php?url=Pay&error=13';</script>";
            $check = false;
        }
        if ($check == true) {
            $data = [
                'customerid' => $this->customerid,
                'fullname' => $_POST['fullname'],
                'email' => $_POST['email'],
                'phonenumber' => $_POST['phonenumber'],
                'address' => $_POST['address'],
                'note' => $_POST['note'],
                'paytype' => $_POST['paytype'],
                'City' => $_POST['city'],
                'District' => $_POST['district'],
                'Ward' => $_POST['ward'],
                'ordership' => $_SESSION['shipfee'],
                'orderfee' => $_SESSION['orderfee'],
                'orderstate' => 'Đang xác nhận'
            ];
            //Check data 
            //check fullname
            $data1 = ['page' => 'Pay', 'data' => $data];
            $this->pay->insertdata($data1);
            $orderid = $this->pay->getorderid();
            $data2 = ['customerid' => $this->customerid, 'products' => $_SESSION['products'], 'orderid' => $orderid];
            $this->pay->insertproduct($data2);
            $this->pay->deletecart($this->customerid);
            header('Location:./index.php?url=StatusOrder');
        }
    }
}


?>