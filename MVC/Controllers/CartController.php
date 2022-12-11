<?php

class CartController extends BaseController
{
    private $cart;
    private $products;
    private $customer_id;
    public function __construct()
    {
        $this->loadModel('CartModel.php');
        $this->cart = new CartModel();
        $this->customer_id = 1;
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
    public function delete($cartid, $productid)
    {
        $data = ['CartID' => $cartid, 'CustomerID' => $this->customer_id, 'ProductID' => $productid];
        $this->cart->deleteproduct($data);
        header('Location:./index.php?url=Cart');
    }
}


?>