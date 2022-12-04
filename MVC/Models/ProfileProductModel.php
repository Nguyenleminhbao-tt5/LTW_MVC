<?php

class ProfileProductModel extends BaseModel
{
    const TABLE ='book';

    public function getFind($id_table,$id)
    {
      return $this->FIND(self::TABLE,$id_table,$id);
    }

}

?>