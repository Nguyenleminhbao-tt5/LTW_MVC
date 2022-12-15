<?php

if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error == "1")
        echo "<script> alert('ID này đã tồn tại')</script>";
    if ($error == "2")
        echo "<script> alert('Tin tức này đã tồn tại')</script>";
    if ($error == "3")
        echo "<script> alert('Bạn cần phải nhập ID')</script>";
    if ($error == "4")
        echo "<script> alert('Bạn cần phải nhập tên')</script>";
    if ($error == "5")
    echo "<script> alert('Bạn chưa chèn ảnh')</script>";
    if ($error == "6")
    echo "<script> alert('Bạn chưa nhập nội dung tên tức')</script>";
  
    
}
?>
<div class="insertProduct">
    <div class="insertProduct__title">
        <h4 class="insertProduct__title-text"> Quản Lý Tin Tức / Thêm Tin Tức</h4>
    </div>
    <div class="insertProduct__content">
        <h3 class="insertProduct__content-heading">Tạo mới tin tức</h3>
        <div class="insertProduct__content-table">
            <div class="grid">
                <form class="row" method="POST" action="./index.php?url=AdminNews/insert">
                    <div class="form-group l-3 m-6 c-12">
                        <label class="control-label">Mã sản phẩm </label>
                        <input class="form-control" type="text"  name='NewsID'>
                    </div>
                    <div class="form-group l-3 m-6 c-12">
                        <label class="control-label">Tiêu đề</label>
                        <input class="form-control" type="text"  name='NewsName'>
                    </div>


                    <div class="form-group  l-3 m-6 c-12">
                        <label class="control-label">Ảnh</label>
                        <input class="form-control" type="text" name='NewsImg'>
                    </div>
                    <div class="form-group l-3 m-6 c-12">
                        <label for="exampleSelect1" class="control-label">Danh mục</label>
                        <select class="form-control" id="exampleSelect1" name='Type'>
                            <option value='0'>-- Chọn danh mục --</option>
                        <?php
                        
                            $listCategory=$data['listCategory'];
                            for($i=0;$i<count($listCategory);$i++)
                            {
                                $Type=$listCategory[$i]['Type'];
                                echo "<option>$Type</option>";
                            }
                        ?>
                    
                        </select>
                    </div>
                    <div class="form-group l-12 m-12 c-12 ">
                        <label class="control-label">Mô tả sản phẩm</label>
                        <textarea class="description" rows="10" cols="130" placeholder="Mô tả sản phẩm" name='Description'></textarea>
                    </div>
                    <br>
                    <button class="btn btn-save right ">Lưu lại</button>
                    <a class="btn btn-cancel right" data-dismiss="modal" href="./index.php?url=AdminNews">Hủy bỏ</a>
                    <br>
                
                </form>
            </div>
        </div>
    </div>
   
</div>
