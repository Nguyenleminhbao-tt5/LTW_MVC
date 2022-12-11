<?php

class CartModel extends BaseModel
{
    const TABLE = 'cart';
    public function getproduct($customer_id)
    {
        $sql = "SELECT * FROM `cart`, `product` WHERE cart.ProductID=product.ProductID AND cart.CustomerID=$customer_id";
        return $this->QUERYOTHER($sql);
    }
    public function insertdata($data)
    {
        $data = $data['data'];
        return $this->INSERT(self::TABLE, $data);
    }
    public function up($data)
    {
        $cartid = $data['CartID'];
        $customerid = $data['CustomerID'];
        $productid = $data['ProductID'];
        $sql = "UPDATE `cart` SET Amount=Amount+1 WHERE CartID=$cartid AND CustomerID=$customerid AND ProductID=$productid";
        mysqli_query($this->connect, $sql);
    }
    public function down($data)
    {
        $cartid = $data['CartID'];
        $customerid = $data['CustomerID'];
        $productid = $data['ProductID'];
        $sql = "UPDATE `cart` SET Amount=Amount-1 WHERE CartID=$cartid AND CustomerID=$customerid AND ProductID=$productid";
        mysqli_query($this->connect, $sql);
    }
    public function deleteproduct($data)
    {
        $cartid = $data['CartID'];
        $customerid = $data['CustomerID'];
        $productid = $data['ProductID'];
        $sql = "DELETE FROM `cart` WHERE CartID=$cartid AND CustomerID=$customerid AND ProductID=$productid";
        mysqli_query($this->connect, $sql);
    }
}

?>