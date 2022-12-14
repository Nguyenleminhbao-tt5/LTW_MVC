<?php

class CartModel extends BaseModel
{
    const TABLE = 'cart';
    public function getproduct($customerid)
    {
        $sql = "SELECT * FROM `cart`, `product`,`user` WHERE cart.ProductID=product.ProductID AND CartID=ID AND CustomerID=$customerid;";
        return $this->QUERYOTHER($sql);
    }
    public function insertdata($data)
    {
        return $this->INSERT(self::TABLE, $data);
    }
    public function updatedata($data)
    {
        $CartID = $data['CartID'];
        $CustomerID = $data['CustomerID'];
        $ProductID = $data['ProductID'];
        $Size = $data['Size'];
        $Amount = $data['Amount'];
        $sql = "UPDATE `cart` SET `CartID`=$CartID,`CustomerID`=$CustomerID,`ProductID`=$ProductID,`Size`=$Size,`Amount`=$Amount WHERE CartID=$CartID AND ProductID=$ProductID ";
        echo $sql;
        $this->QUERYOTHER($sql);
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
        $this->QUERYVOID($sql);
    }
    public function getProductByCart($CartID, $ProductID)
    {
        $sql = "SELECT * FROM `cart` WHERE CartID=$CartID AND ProductID=$ProductID;";
        return $this->QUERYOTHER($sql);
    }
}

?>