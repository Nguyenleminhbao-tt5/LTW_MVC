<?php

class AdminNewsController extends BaseController
{
    private $adminNews;
    private $listNews;
    private $listCategory;
    public function __construct()
    {
        $this->loadModel('AdminNewsModel.php');
        $this->adminNews= new AdminNewsModel();
        $this->listNews=$this->adminNews->getALL();
        $this->listCategory=$this->adminNews->getCategory();
    }
    public function show()
    {
        $data=['page'=>'AdminNews','listNews'=>$this->listNews];
        $this->view($data);
    }
    public function add($error1='',$error2='')
    {

        $data=['page'=>'AdminNewsInsert','listCategory'=>$this->listCategory,'error1'=>$error1,
        'error2'=>$error2];
        $this->view($data);
    }
    public function insert()
    {
        $error1='';
        $error2='';
        for($i=0;$i<count($this->listNews);$i++)
        {
            if($this->listNews[$i]['NewsID']==$_POST['NewsID']) $error1='ID tin tức này đã tổn tại';
            if($this->listNews[$i]['NewsName']==$_POST['NewsName']) $error2='Tiêu đề tin tức này đã tổn tại';   
        }

        if($error1!='' || $error2 !='')   header("Location:./index.php?url=AdminNews/add/$error1/$error2");
        else
        {
            $NewsData=['NewsID'=>$_POST['NewsID'],'Type'=>$_POST['Type'],'NewsName'=>$_POST['NewsName'], 
            'NewsImg'=>$_POST['NewsImg'],'Description'=>$_POST['Description']];
            $this->adminNews->insertNews($NewsData);
            header('Location:./index.php?url=AdminNews');
        }

        

    }
    public function edit($ID)
    {
        $news=$this->adminNews->getNewsByID($ID);
        $data=['page'=>'AdminNewsEdit','news'=>$news,'listCategory'=>$this->listCategory];
        $this->view($data);
    }
    public function update($NewsID)
    {
        $NewsData=['NewsID'=>$_POST['NewsID'],'Type'=>$_POST['Type'],'NewsName'=>$_POST['NewsName'], 
            'NewsImg'=>$_POST['NewsImg'],'Description'=>$_POST['Description']];

        $this->adminNews->updateNews($NewsData,$NewsID);
        header('Location:./index.php?url=AdminNews');
    }
    public function delete($ID)
    {
        echo 'xóa';
        $this->adminNews->deleteNews($ID);
       
       header('Location:./index.php?url=AdminNews');
    }
    


}


?>