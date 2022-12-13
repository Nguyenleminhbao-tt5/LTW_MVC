<?php
class ProfileUserModel extends BaseModel
{
    const TABLE = 'user';
    public function getprofile($customer_id)
    {
        $sql = "SELECT * FROM `user` WHERE user.ID=$customer_id";
        return $this->QUERYOTHER($sql);
    }
    public function modified($user, $customerid)
    {
        $this->UPDATE('user', $user, 'ID', $customerid);
    }
    public function getoldpass($customer_id)
    {
        $sql = "SELECT 'Password' FROM `user` WHERE user.ID=$customer_id";
        $temp = $this->QUERYOTHER($sql);
        return $temp[0]['Password'];
    }
}

?>