<?php

class RegisterModel extends BaseModel
{
    
    public function upAccount($data)
    {
        $id=$data['LastName'];
        $AccountName=$data['Email'];
        $Password=$data['Password'];
        $FirstName=$data['FirstName'];
        $LastName=$data['LastName'];
        $LoginTime=date("Y/m/d");
        
    
        $values1=['ID'=>$id,'Gender'=>'M','DoB'=>'2002/09/06','FirstName'=>$FirstName,'LastName'=>$LastName,'Email'=>$AccountName,'AccountName'=>$AccountName,'Password'=>$Password,'PhoneNumber'=>'0123456789','Address'=>'Quảng Ngãi'];
        $values2=['ID'=>$id,'LoginTime'=>$LoginTime];
        $this->INSERT('users',$values1);
        $this->INSERT('customer',$values2);

    }
}

?>