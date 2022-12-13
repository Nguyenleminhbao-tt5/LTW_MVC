<?php

class HomePageModel extends BaseModel
{
    const TABLE ='product';
    public function getALL($select=['*'],$limit=100)
    {
      return $this->ALL(self::TABLE,$select,$limit);
    }

}
?>