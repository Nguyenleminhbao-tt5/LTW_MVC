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
    public function add()
    {

        $data=['page'=>'AdminNewsInsert','listCategory'=>$this->listCategory];
        $this->view($data);
    }
    public function insert()
    {

        for($i=0;$i<count($this->listNews);$i++)
        {
            if($this->listNews[$i]['NewsID']==$_POST['NewsID'])  echo "<script language='javascript'>window.location = 'index.php?url=AdminNews/add&error=1';</script>";
            if($this->listNews[$i]['NewsName']==$_POST['NewsName'])  echo "<script language='javascript'>window.location = 'index.php?url=AdminNews/add&error=2';</script>";
        }

        $check=true;
        if($_POST['NewsID']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminNews/add&error=3';</script>";
            $check=false;
        }
        if($_POST['NewsName']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminNews/add&error=4';</script>";
            $check=false;
        }
        if($_POST['NewsImg']=='') 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminNews/add&error=5';</script>";
            $check=false;
        }
        if($_POST['Description']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminNews/add&error=6';</script>";
            $check=false;
        }
      
        if($check)
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
        $check=true;
        if($_POST['NewsName']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminNews/edit/$NewsID&error=4';</script>";
            $check=false;
        }
        if($_POST['NewsImg']=='') 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminNews/edit/$NewsID&error=5';</script>";
            $check=false;
        }
        if($_POST['Description']=='' ) 
        {
            echo "<script language='javascript'>window.location = 'index.php?url=AdminNews/edit/$NewsID&error=6';</script>";
            $check=false;
        }
        if($check)
        {
            $NewsData=['NewsID'=>$_POST['NewsID'],'Type'=>$_POST['Type'],'NewsName'=>$_POST['NewsName'], 
            'NewsImg'=>$_POST['NewsImg'],'Description'=>$_POST['Description']];

            $this->adminNews->updateNews($NewsData,$NewsID);
            header('Location:./index.php?url=AdminNews');
        }
        
    }
    public function delete($ID)
    {
        
        $this->adminNews->deleteNews($ID);
       
       header('Location:./index.php?url=AdminNews');
    }
    


}


?>