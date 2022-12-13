<?php

class CartController extends BaseController
{
    private $cart;
    private $customer_id;
    private $products;
    public function __construct()
    {
        $this->loadModel('CartModel.php');
        $this->cart = new CartModel();
        $this->customer_id = $_SESSION['CustomerID'];
        $this->products = $this->cart->getproduct($this->customer_id);
    }
    public function show()
    {
        $data = ['page' => 'Cart', 'products' => $this->products];
        $this->view($data);
    }
   
}


?>