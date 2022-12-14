<?php

class FeedBackModel extends BaseModel
{
    public function add($feedback)
    {
        return $this->INSERT('feedback', $feedback);
    }
    public function getfeedback()
    {
        $sql = "SELECT * FROM `feedback`,`user` WHERE feedback.CustomerID=user.ID LIMIT 10";
        return $this->QUERYOTHER($sql);
    }
}

?>