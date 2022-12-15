<?php

class CartController extends BaseController
{
    private $cart;
    private $customer_id;
    private $products;
    public function __construct()
    {
        $this->loadModel('CartModel.php');
        if (!isset($_SESSION['CustomerID']))
            header('Location: ./index.php?url=Login');
        $this->customer_id = $_SESSION['CustomerID'];
        $this->cart = new CartModel();
        $this->products = $this->cart->getproduct($this->customer_id);
    }
    public function show()
    {
        $data = ['page' => 'Cart', 'products' => $this->products];
        $this->view($data);
    }
    public function up($cartid, $productid)
    {

        $data = ['CartID' => $cartid, 'CustomerID' => $this->customer_id, 'ProductID' => $productid];
        $this->cart->up($data);
        header('Location:./index.php?url=Cart');
    }
    public function down($cartid, $productid)
    {
        $data = ['CartID' => $cartid, 'CustomerID' => $this->customer_id, 'ProductID' => $productid];
        $this->cart->down($data);
        header('Location:./index.php?url=Cart');
    }
    public function insert()
    {
        $product = $this->cart->getProductByCart($_SESSION['CustomerID'], $_POST['ProductID']);
        if (!isset($_SESSION['CustomerID']))
            header('Location: ./index.php?url=Login');
        if (empty($product)) {
            $dataCart = ['CartID' => $_SESSION['CustomerID'], 'CustomerID' => $_SESSION['CustomerID'], 'ProductID' => $_POST['ProductID'], 'Size' => $_POST['Size'], 'Amount' => $_POST['Amount']];


            $this->cart->insertdata($dataCart);
        }
        header('Location: ./index.php?url=Cart');
    }
    public function delete($CartID,$ProductID)
    {
        $this->cart->deleteproduct($CartID,$ProductID);
        header('Location: ./index.php?url=Cart');
    }

}


?>