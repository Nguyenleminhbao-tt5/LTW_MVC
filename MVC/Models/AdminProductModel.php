<?php

class AdminProductModel extends BaseModel
{
    const TABLE='product';
    
    public function getALL($select=['*'],$limit=100)
    {
      return $this->ALL(self::TABLE,$select,$limit);
    }
    public function getCategory()
    {
      $sql="SELECT Type FROM `product` GROUP BY Type ASC";
      return $this->QUERYOTHER($sql);
    }
    public function insertProduct($data)
    {
        $ProductData=$data['ProductData'];
        return $this->INSERT(self::TABLE,$ProductData);
    }
    public function deleteProduct($ProductID)
    {
        return $this->DELETE(self::TABLE,'ProductID',$ProductID);
    }
    public function updateProduct($ProductData,$id)
    {
        return $this->UPDATE(self::TABLE,$ProductData,'ProductID',$id);
    }
    public function getProductByID($ID)
    {
        return $this->FIND(self::TABLE,'ProductID',$ID);
    }
}

?>