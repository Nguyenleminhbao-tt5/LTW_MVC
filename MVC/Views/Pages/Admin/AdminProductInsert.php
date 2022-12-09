<div class="insertProduct">
    <div class="insertProduct__title">
        <h4 class="insertProduct__title-text"> Quản Lý Sản Phẩm / Thêm sản phẩm</h4>
    </div>
    <div class="insertProduct__content">
        <h3 class="insertProduct__content-heading">Tạo mới sản phẩm</h3>
        <div class="insertProduct__content-table">
            <div class="grid">
                    <form class="row" method='POST' action="./index.php?url=AdminProduct/insert">
                    <div class="form-group l-3 m-6 c-12">
                        <label class="control-label">Mã sản phẩm </label>
                        <input class="form-control" type="text" name='ProductID' placeholder="01">
                    </div>
                    <div class="form-group l-3 m-6 c-12">
                        <label class="control-label">Tên sản phẩm</label>
                        <input class="form-control" type="text" name='ProductName'>
                    </div>


                    <div class="form-group  l-3 m-6 c-12">
                        <label class="control-label">Số lượng</label>
                        <input class="form-control" type="number">
                    </div>
                    <div class="form-group l-3 m-6 c-12 ">
                        <label for="exampleSelect1" class="control-label">Tình trạng</label>
                        <select class="form-control" id="exampleSelect1">
                        <option>-- Chọn tình trạng --</option>
                        <option>Còn hàng</option>
                        <option>Hết hàng</option>
                        </select>
                    </div>
                    <div class="form-group l-3 m-6 c-12">
                        <label for="exampleSelect1" class="control-label">Danh mục</label>
                        <select class="form-control" id="exampleSelect1" name='Type'>
                            <option value='Không'>-- Chọn danh mục --</option>
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
                    <div class="form-group l-3 m-6 c-12">
                        <label class="control-label">Giá bán</label>
                        <input class="form-control" type="text" name='Price'>
                    </div>
                    <div class="form-group l-3 m-6 c-12">
                        <label class="control-label">Ảnh chính</label>
                        <input class="form-control" type="text" name='PrimaryImg'>
                    </div>
                    <div class="form-group l-3 m-6 c-12">
                        <label class="control-label">Ảnh 1</label>
                        <input class="form-control" type="text" name='Img1'>
                    </div>
                    <div class="form-group l-3 m-6 c-12">
                        <label class="control-label">Ảnh 2</label>
                        <input class="form-control" type="text" name='Img2'>
                    </div>
                    <div class="form-group l-9 m-12 c-12 ">
                        <label class="control-label">Mô tả sản phẩm</label>
                        <textarea class="description" rows="10" cols="102" placeholder="Mô tả sản phẩm" name='Description'></textarea>
                    </div>
                    <br>
                    <input class="btn btn-save right " type="submit" value="Lưu lại">
                    <a class="btn btn-cancel right" data-dismiss="modal" href="./index.php?url=AdminProduct">Hủy bỏ</a>
                    <br>
                    

                </form>
            </div>
        </div>
    </div>
   
</div>
