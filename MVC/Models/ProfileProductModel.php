<?php

class ProfileProductModel extends BaseModel
{
  const TABLE = 'product';

  public function getFind($id_table, $id)
  {
    return $this->FIND(self::TABLE, $id_table, $id);
  }
  public function getComment($product_id)
  {
    $sql = "SELECT * FROM  `comment`, `user` WHERE comment.ProductID=$product_id AND user.ID=comment.CustomerID ORDER BY comment.Time DESC LIMIT 100";
    return $this->QUERYOTHER($sql);
  }
  public function insertcomment($data)
  {
    $this->INSERT('comment', $data);
  }
  public function getCategory()
  {
    $sql="SELECT Type FROM `product` GROUP BY Type ASC";
    return $this->QUERYOTHER($sql);
  }
}

?>