<?php

class FeedBackModel extends BaseModel
{
    public function add($feedback)
    {
        return $this->INSERT('feedback', $feedback);
    }
    public function getfeedback()
    {
        $sql = "SELECT * FROM `feedback`,`user` WHERE feedback.CustomerID=user.ID ORDER BY feedback.Time DESC LIMIT 100";
        return $this->QUERYOTHER($sql);
    }
}

?>