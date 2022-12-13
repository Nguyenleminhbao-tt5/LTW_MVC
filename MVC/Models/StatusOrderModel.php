<?php

class StatusOrderModel extends BaseModel
{
  const TABLE = 'listorder';
  public function joinOrder($customer_id)
  {
    $sql = "SELECT * FROM `listorder`, `orderproduct`, `product` WHERE listorder.orderID=orderproduct.orderid AND orderproduct.productid=product.ProductID AND listorder.customerid=$customer_id";
    return $this->QUERYOTHER($sql);
  }
  public function numOrder($customer_id)
  {
    $sql = "SELECT * FROM `listorder` WHERE listorder.customerid=$customer_id";
    return $this->QUERYOTHER($sql);
  }
  public function deleteorder($data)
  {
    $sql = "DELETE FROM `orderproduct` WHERE orderid=$data";
    mysqli_query($this->connect, $sql);
    $sql = "DELETE FROM `listorder` WHERE orderID=$data";
    mysqli_query($this->connect, $sql);
  }
}
?>