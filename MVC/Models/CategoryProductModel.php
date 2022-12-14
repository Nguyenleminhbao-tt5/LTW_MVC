<?php

class CategoryProductModel extends BaseModel
{
    const TABLE ='product';
    public function getALL($select=['*'],$limit=10)
    {
      return $this->ALL(self::TABLE,$select,$limit);
    }
    public function getFind($id_table,$id)
    {
      return $this->FIND(self::TABLE,$id_table,$id);
    }
    public function getCategory()
    {
      $sql="SELECT Type FROM `product` GROUP BY Type ASC";
      return $this->QUERYOTHER($sql);
    }
    public function getProductByCategory($category)
    {
      $sql="SELECT * FROM `product` WHERE Type='$category'";
      return $this->QUERYOTHER($sql);
    }
    public function filter($selectPrice,$Type)
    {
      $sql='';
      if($selectPrice=='1') $sql="SELECT * FROM `product` WHERE Type='$Type' AND Price >=100000 AND Price <=200000";
      else if($selectPrice=='2') $sql="SELECT * FROM `product` WHERE Type='$Type' AND Price >200000 AND Price <=400000";
      else if($selectPrice=='3') $sql="SELECT * FROM `product` WHERE Type='$Type' AND Price >400000 AND Price <=1000000";
      else if($selectPrice=='4') $sql="SELECT * FROM `product` WHERE Type='$Type' AND Price >1000000 ";
      return $this->QUERYOTHER($sql);
    }
    public function getPage($Type)
    {

      return $this->getProductByCategory($Type);
      
    }
}



?>
