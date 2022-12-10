<?php

class AdminNewsModel extends BaseModel
{
    
    const TABLE= 'news';
    public function getALL($select=['*'],$limit=100)
    {
      return $this->ALL(self::TABLE,$select,$limit);
    }
    public function deleteNews($ID)
    {
        return $this->DELETE(self::TABLE,'NewsID',$ID);
    }
    public function getCategory()
    {
      $sql="SELECT Type FROM `product` GROUP BY Type ASC";
      return $this->QUERYOTHER($sql);
    }
    public function insertNews($data)
    {       
        return $this->INSERT(self::TABLE,$data);
    }
    public function getNewsByID($ID)
    {
        return $this->FIND(self::TABLE,'NewsID',$ID);
    }
    public function updateNews($NewsData,$id)
    {
        return $this->UPDATE(self::TABLE,$NewsData,'NewsID',$id);
    }
}

?>