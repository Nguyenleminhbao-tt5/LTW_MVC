<?php 

    $news=$data['news'];
    $NewsID=$news[0]['NewsID'];
    $NewsName=$news[0]['NewsName'];
    $NewsImg=$news[0]['NewsImg'];
    $Type=$news[0]['Type'];
    $Description=$news[0]['Description'];



    if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error == "4")
        echo "<script> alert('Bạn cần phải nhập tên')</script>";
    if ($error == "5")
    echo "<script> alert('Bạn chưa chèn ảnh')</script>";
    if ($error == "6")
    echo "<script> alert('Bạn chưa nhập nội dung tên tức')</script>";
    }
  
   

?>

<div class="modal-modified">
    <div class="modal__overlay"></div>
                
    <div class="modal__body">
        <div class="grid">                    
            <div class="row">
                <div class="form-group  l-12">
                <span class="thong-tin-thanh-toan">
                    <h5>Chỉnh sửa tin tức</h5>
                </span>
                </div>
            </div>
            <form method="POST" action="./index.php?url=AdminNews/update/<?php echo $NewsID ?>">
            <div class="row edit">
                <div class="form-group l-6 m-6 c-12 ">
                    <label class="control-label">Mã tin tức </label>
                    <input class="form-control" type="text" value='<?php echo $NewsID ?>' readonly name='NewsID'>
                </div>
                <div class="form-group l-6 m-6 c-12">
                    <label class="control-label">Tiêu đề</label>
                <input class="form-control" type="text" required="" vvalue='<?php echo $NewsName ?>' name='NewsName'>
                </div>
                <div class="form-group l-6 m-6 c-12">
                    <label class="control-label">Ảnh</label>
                    <input class="form-control" type="text" value='<?php echo $NewsImg ?>' name='NewsImg'>
                </div>
                <div class="form-group l-6 m-6 c-12 ">
                    <label for="exampleSelect1" class="control-label">Tin tức thuộc về hãng</label>
                    <select class="form-control" id="exampleSelect1" name='Type'>
                        <?php
                        
                        $listCategory=$data['listCategory'];
                        for($i=0;$i<count($listCategory);$i++)
                        {
                            $Type=$listCategory[$i]['Type'];
                            echo "
                                <option>$Type</option>
                            ";
                        }
                    
                        ?>
                    </select>
                </div>
                <div class="form-group l-12 m-12 c-12">
                    <label class="control-label">Nội dung</label>
                    <textarea class="form-control" type="text" placeholer="Nội dung tin tức" name='Description'>
                        <?php echo $Description ?>
                    </textarea>
                </div>
    
                
            </div>
            <br>
            <button class="btn btn-save" >Lưu lại</button>
            <a class="btn btn-cancel cancel-back-product" data-dismiss="modal" href="./index.php?url=AdminNews">Hủy bỏ</a>
            <br>
        </div>
        <br>
        <div class="bottom"></div>
    </div>
  
   
</div>