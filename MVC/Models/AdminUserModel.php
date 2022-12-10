<?php

class AdminUserModel extends BaseModel
{

    const TABLE='user';
    
    public function getALL($select=['*'],$limit=100)
    {
      return $this->ALL(self::TABLE,$select,$limit);
    }
    public function deleteUser($ID)
    {
      return $this->DELETE(self::TABLE,'ID',$ID);
    }
  
}

?>