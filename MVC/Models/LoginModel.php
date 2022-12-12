<?php

class LoginModel extends BaseModel
{
    const TABLE = 'users';
    public function getUser($accountname)
    {
        $sql = "SELECT * FROM user WHERE user.AccountName=$accountname";
        return $this->QUERYOTHER($sql);
    }

}

?>