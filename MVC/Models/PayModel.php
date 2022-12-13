<?php
class PayModel extends BaseModel
{
    const TABLE = 'listorder';
    public function order($customer_id)
    {
        $sql = "SELECT * FROM `cart`, `product` WHERE cart.ProductID=product.ProductID AND cart.CustomerID=$customer_id";
        return $this->QUERYOTHER($sql);
    }
    public function insertdata($data)
    {
        $data = $data['data'];
        return $this->INSERT(self::TABLE, $data);
    }
    public function insertproduct($data)
    {
        $orderid = $data['orderid'];
        $orderid = $orderid[0]["MAX(orderID)"];
        $data = $data['products'];
        for ($i = 0; $i < count($data); $i++) {
            $productid = $data[$i]['ProductID'];
            $size = $data[$i]['Size'];
            $number = $data[$i]['Amount'];
            $sql = "INSERT INTO `orderproduct` VALUES ($orderid,$productid,$size,$number)";
            mysqli_query($this->connect, $sql);
        }
    }
    public function getorderid()
    {
        $sql = "SELECT MAX(orderID) FROM `listorder`";
        return $this->QUERYOTHER($sql);
    }
    public function deletecart($data)
    {
        $sql = "DELETE FROM `cart` WHERE CustomerID=$data";
        mysqli_query($this->connect, $sql);
    }
}

?>