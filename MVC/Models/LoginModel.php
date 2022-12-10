<?php

class LoginModel extends BaseModel
{
    const TABLE ='user';


    public function getUser()
    {
        $sql="SELECT * FROM user";
        return $this->QUERYOTHER($sql);
    }
}

?>