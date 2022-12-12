<?php

class LoginModel extends BaseModel
{
    const TABLE = 'user';
    public function getUser($accountname, $password)
    {
        $sql = "SELECT * FROM `user` WHERE AccountName='$accountname' AND Password='$password'";
        return $this->QUERYOTHER($sql);
    }
    public function getProduct($limit = 100)
    {
        $sql = "SELECT * FROM `product` LIMIT $limit";
        return $this->QUERYOTHER($sql);
    }

}

?>