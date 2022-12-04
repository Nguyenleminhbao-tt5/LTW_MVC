<?php

class LoginModel extends BaseModel
{
    const TABLE ='users';


    public function getCustomer()
    {
        $sql="SELECT * FROM users,customer WHERE users.ID=customer.ID";
        return $this->QUERYOTHER($sql);
    }
}

?>