<?php

class BaseModel extends Database
{
    protected $connect;
    public function __construct()
    {
        $this->connect=$this->connect();
    }
    public function ALL($table,$select,$limit)
    {
        $columns=implode(',',$select);
        $sql="SELECT $columns FROM $table LIMIT $limit";
        $query=$this->query($sql);
        $data=[];
        while($row=mysqli_fetch_assoc($query))
        {
            array_push($data,$row);
        }
        return $data;
    }
    public function FIND($table,$id_table,$id)
    {
        $sql="SELECT * FROM $table WHERE $id_table=$id LIMIT 1 ";
        $query=$this->query($sql);
        $data=[];
        while($row=mysqli_fetch_assoc($query))
        {
            array_push($data,$row);
        }
        return $data;
    }
    public function INSERT($table,$data=[])
    {
        $columns=implode(',',array_keys($data));
        $values=array_map(function($item){
            return "'$item'";
        },$data);
        $values=implode(',',array_values($values));
        $sql="INSERT INTO $table($columns) VALUES ($values)";
        
        $query=$this->query($sql);
    }
    public function DELETE($table,$id_table,$id)
    {
        $sql="DELETE FROM $table WHERE $id_table=$id";
        $query=$this->query($sql);
    }
    public function UPDATE($table,$data=[],$id_table,$id)
    {
        $values=[];
        foreach( $data as $key=>$value)
        {
            if(is_string($value))
            {
                $values[]="$key='$value'";
            }  
            else $values[]="$key=$value";
        }
        $values=implode(',',$values);
 
        $sql="UPDATE $table SET $values WHERE $id_table=$id";
        $query=$this->query($sql);

    }
    public function QUERYOTHER($sql)
    {
        $query=$this->query($sql);
        $data=[];
        while($row=mysqli_fetch_assoc($query))
        {
            array_push($data,$row);
        }
        return $data;

    }
    private function query($sql)
    {
        return mysqli_query($this->connect,$sql);
    }
}



?>