<?php

class AdminPrimaryModel extends BaseModel
{
    const TABLE='book';
    public function getALL($select=['*'],$limit=100)
    {
      return $this->ALL(self::TABLE,$select,$limit);
    }
    public function getCategory()
    {
      $sql="SELECT Type FROM `book` GROUP BY Type ASC";;
      return $this->QUERYOTHER($sql);
    }
    public function getPublisher()
    {
        $sql="SELECT PublisherName FROM `publisher`";
        return $this->QUERYOTHER($sql);
    }
    public function insertBook($data)
    {
        $BookData=$data['BookData'];
        return $this->INSERT(self::TABLE,$BookData);
    }
    public function updateBook($BookData,$id)
    {
        return $this->UPDATE(self::TABLE,$BookData,'BookID',$id);
    }
    public function deleteBook($BookID)
    {
        return $this->DELETE(self::TABLE,'BookID',$BookID);
    }
    public function getBookByID($ID)
    {
        return $this->FIND(self::TABLE,'BookID',$ID);
    }
}
?>