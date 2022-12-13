<?php
class NewsModel extends BaseModel
{
    public function getnews()
    {
        $sql = "SELECT * FROM `news` LIMIT 100";
        return $this->QUERYOTHER($sql);
    }
}

?>