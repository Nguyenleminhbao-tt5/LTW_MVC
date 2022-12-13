<?php

class RegisterModel extends BaseModel
{
    public function upAccount($data)
    {
        $fname = $data['FirstName'];
        $lname = $data['LastName'];
        $avatar = 'https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=';
        $AccountName = $data['AccountName'];
        $Password = $data['Password'];
        $values = ['FirstName' => $fname, 'LastName' => $lname, 'AccountName' => $AccountName, 'Password' => $Password, 'Avatar' => $avatar, 'Type' => 'Customer'];
        $this->INSERT('user', $values);
    }
}

?>