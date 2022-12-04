<?php

class CategoryProductModel extends BaseModel
{
    const TABLE ='category';
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
      $sql="SELECT Type FROM `book` GROUP BY Type ASC";
      return $this->QUERYOTHER($sql);
    }
    public function getProductByCategory($category)
    {
      $sql="SELECT * FROM `book` WHERE Type='$category'";
      return $this->QUERYOTHER($sql);
    }
    public function filter($selectPrice,$Type)
    {
      $sql='';
      if($selectPrice=='1') $sql="SELECT * FROM `book` WHERE Type='$Type' AND Price >=20000 AND PRICE <=100000";
      else if($selectPrice=='2') $sql="SELECT * FROM `book` WHERE Type='$Type' AND Price >100000 AND PRICE <=150000";
      else if($selectPrice=='3') $sql="SELECT * FROM `book` WHERE Type='$Type' AND Price >150000 AND PRICE <=300000";
      else if($selectPrice=='4') $sql="SELECT * FROM `book` WHERE Type='$Type' AND Price >300000 AND PRICE <=400000";
      return $this->QUERYOTHER($sql);
    }
}



?>
