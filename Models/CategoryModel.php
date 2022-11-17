<?php

class CategoryModel extends BaseModel
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
    public function getInsert($data=[])
    {
      return $this->INSERT(self::TABLE,$data);
    }
    public function getUpdate($data=[],$id_table,$id)
    {
      return $this->UPDATE(self::TABLE,$data,$id_table,$id);
    }
    public function getDelete($id_table,$id)
    {
      return $this->DELETE(self::TABLE,$id_table,$id);
    }
    
}



?>
