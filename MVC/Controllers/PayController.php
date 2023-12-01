<?php
header('Content-type: text/html; charset=utf-8');
if (!isset($_SESSION)) {
    session_start();
}


class PayController extends BaseController
{
    private $pay;
    private $order;
    private $customerid;
    const PAY_WITH_ATM = "payWithATM";
    const PAY_WITH_QR  = "captureWallet";

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


    private function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }

    private function payMomo($requestType,$orderInfo)
    {
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $amount = $_SESSION['orderfee'];
        $orderId = time() ."";
        $redirectUrl = "http://localhost/LTW_MVC/index.php?url=StatusOrder";
        $ipnUrl = "http://localhost/LTW_MVC/index.php?url=StatusOrder";
        $extraData = "";


        $partnerCode =$partnerCode ;
        $accessKey = $accessKey;
        $serectkey = $secretKey;
        $orderId = $orderId; // Mã đơn hàng
        $orderInfo = $orderInfo;
        $amount = $amount;
        $ipnUrl = $ipnUrl;
        $redirectUrl = $redirectUrl;
        $extraData = $extraData;

        $requestId = time() . "";
        $requestType = $requestType; // payWithATM - captureWallet
        $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
        //before sign HMAC SHA256 signature
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $serectkey);
        $data = array('partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature);
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);  // decode json

        //Just a example, please check more in there

        header('Location: ' . $jsonResult['payUrl']);
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
            if ($data['paytype']=='Cash')
            {
                $data1 = ['page' => 'Pay', 'data' => $data];
                $this->pay->insertdata($data1);
                $orderid = $this->pay->getorderid();
                $data2 = ['customerid' => $this->customerid, 'products' => $_SESSION['products'], 'orderid' => $orderid];
                $this->pay->insertproduct($data2);
                $this->pay->deletecart($this->customerid);
                header('Location:./index.php?url=StatusOrder');
            }
            else if ($data['paytype']=='momoATM')
            {
                $data1 = ['page' => 'Pay', 'data' => $data];
                $this->pay->insertdata($data1);
                $orderid = $this->pay->getorderid();
                $data2 = ['customerid' => $this->customerid, 'products' => $_SESSION['products'], 'orderid' => $orderid];
                $this->pay->insertproduct($data2);
                $this->pay->deletecart($this->customerid);
                $this->payMomo(self::PAY_WITH_ATM,"Thanh toán MoMo qua ATM");
               
            }
            else if ($data['paytype']=='momoQR')
            {
                $data1 = ['page' => 'Pay', 'data' => $data];
                $this->pay->insertdata($data1);
                $orderid = $this->pay->getorderid();
                $data2 = ['customerid' => $this->customerid, 'products' => $_SESSION['products'], 'orderid' => $orderid];
                $this->pay->insertproduct($data2);
                $this->pay->deletecart($this->customerid);
                $this->payMomo(self::PAY_WITH_QR,"Thanh toán MoMo qua QR");
            }
            
        }
            
        
    }
}


?>