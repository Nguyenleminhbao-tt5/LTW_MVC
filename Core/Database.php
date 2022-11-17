<?php
class Database
{
   private $servername = "localhost";
   private $username = "root";
   private $password = "";


    public function connect ()
    {
     $data = new mysqli($this->servername, $this->username, $this->password,"manage");

    if ($data->connect_error) {
     die("Connection failed: " . $data->connect_error);
     }
    else return $data;
    }
}
?>