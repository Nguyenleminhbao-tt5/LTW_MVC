<?php
class ProfileUserModel extends BaseModel
{
    const TABLE = 'user';
    public function getprofile($customer_id)
    {
        $sql = "SELECT * FROM `user` WHERE user.ID=$customer_id";
        return $this->QUERYOTHER($sql);
    }
}

?>