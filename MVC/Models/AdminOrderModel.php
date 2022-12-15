<?php

class AdminOrderModel extends BaseModel
{
    public function getOrder()
    {
        $sql="SELECT * FROM `listorder`,`orderproduct`,`product` WHERE listorder.orderID=orderproduct.orderid AND orderproduct.productid=product.ProductID";
        return $this ->QUERYOTHER($sql);
    }
    public function getCustomer()
    {
        $sql="SELECT customerid,orderID,fullname FROM `listorder` GROUP BY customerid;";
        return $this ->QUERYOTHER($sql);
    }
    public function deleteOrder($OrderID)
    {
        $this->DELETE('orderproduct','orderid',$OrderID);
        $this->DELETE('listorder','orderID',$OrderID);
    }
}

?>