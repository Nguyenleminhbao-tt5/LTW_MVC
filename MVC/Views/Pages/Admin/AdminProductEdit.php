<?php 

$shoes=$data['Product'];
$id=$shoes[0]['ProductID'];


 if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error == "3")
        echo "<script> alert('Số lượng phải là số lơn hơn 0')</script>";
    if ($error == "4")
        echo "<script> alert('Giá tiền phải là số lơn hơn 0')</script>";
    if ($error == "5" || $error == "6" || $error == "7")
        echo "<script> alert('Bạn cần phải chèn ảnh')</script>";
    if ($error == "8")
    echo "<script> alert('Bạn chưa nhập ID')</script>";
    if ($error == "9")
    echo "<script> alert('Bạn chưa nhập tên sản phẩm')</script>";
    if ($error == "10")
    echo "<script> alert('Bạn chưa nhập số lượng')</script>";
    if ($error == "11")
    echo "<script> alert('Bạn chưa nhập giá')</script>";
    
}
?>
<div class="modal-modified">
    <div class="modal__overlay"></div>           
    <div class="modal__body">
        <div class="grid">                    
            <div class="row">
                <div class="form-group  l-12">
                <span class="thong-tin-thanh-toan">
                    <h5>Chỉnh sửa thông tin sản phẩm</h5>
                </span>
                </div>
            </div>
            <form method="POST" action="./index.php?url=AdminProduct/update/<?php echo $id ?>">
            <div class="row edit">
                <div class="form-group l-6">
                    <label class="control-label">Mã sản phẩm </label>
                    <input class="form-control" type="text" name='ProductID' value=<?php echo $shoes[0]['ProductID'] ?> readonly>
                </div>
                <div class="form-group l-6">
                    <label class="control-label">Tên sản phẩm</label>
                    <input class="form-control" type="text" name='ProductName' required="" value=<?php echo $shoes[0]['ProductName'] ?>>
                </div>
                <div class="form-group  l-6">
                    <label class="control-label">Số lượng</label>
                    <input class="form-control" type="number" name='Amount' required="" value="20">
                </div>
                <div class="form-group l-6 ">
                    <label for="exampleSelect1" class="control-label">Tình trạng sản phẩm</label>
                    <select class="form-control" id="exampleSelect1"> 
                    <option>Còn hàng</option>
                    <option>Hết hàng</option>
                    <option>Đang nhập hàng</option>
                    </select>
                </div>
                <div class="form-group l-6">
                    <label class="control-label" >Giá bán</label>
                    <input class="form-control" name='Price' type="text" value=<?php echo $shoes[0]['Price'] ?>>
                </div>
                <div class="form-group l-6">
                    <label class="control-label">Ảnh chính</label>
                    <input class="form-control" name='PrimaryImg' type="text" value=<?php echo $shoes[0]['PrimaryImg'] ?>>
                </div>
                <div class="form-group l-6">
                    <label class="control-label">Ảnh 1</label>
                    <input class="form-control" type="text" name='Img1' value=<?php echo $shoes[0]['Img1'] ?>>
                </div>
                <div class="form-group l-6">
                    <label class="control-label">Ảnh 2</label>
                    <input class="form-control" type="text" name='Img2' value=<?php echo $shoes[0]['Img2'] ?>>
                </div>
                <div class="form-group l-6">
                    <label for="exampleSelect1" class="control-label">Danh mục</label>
                    <select class="form-control" name='Type' id="exampleSelect1">
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
            </div>
            <br>
            <button class="btn btn-save" >Lưu lại</button>
            </form>
            <a class="btn btn-cancel cancel-back-product" data-dismiss="modal" href="./index.php?url=AdminProduct">Hủy bỏ</a>
            <br>
        </div>
        <br>
        <div class="bottom"></div>
    </div>
</div>