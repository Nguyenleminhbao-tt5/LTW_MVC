<div class="manageProduct">
    <div class="manageProduct__title">
        <h4 class="manageProduct__title-text"> Quản Lý Sản Phẩm</h4>
    </div>
    <div class="manageProduct__content">
        <div class="manageProduct__content-heading">
            <div class="grid">
                <div class="row">
            <div class="l-2 m-3 c-6">
                <a class="btn btn-add btn-sm" href="./index.php?url=AdminProduct/add" title="Thêm">
                    <i class="fas fa-plus"></i>
                 Tạo mới sản phẩm</a>
            </div>
            <div class="l-2 m-3 c-6">
                <a class="btn  btn-sm nhap-tu-file" type="button" title="Nhập" onclick=""><i class="fas fa-file-upload"></i> Tải từ file</a>
            </div>
            <div class="l-2 m-3 c-6">
                <a class="btn  btn-sm print-file" type="button" title="In" onclick=""><i class="fas fa-print"></i> In dữ liệu</a>
            </div>
            <div class="l-2 m-3 c-6">
                <a class="btn btn-copy btn-sm" type="button" title="Sao chép"><i class="fas fa-copy"></i> Sao chép</a>
            </div>
            <div class="l-2 m-3 c-6">
            <a class="btn  btn-sm btn-delete" type="button" title="Xóa" onclick=""><i class="fas fa-trash-alt"></i> Xóa tất cả </a>
            </div>           
        </div>
        </div>
        </div>
        <div class="manageProduct__content-content">
            <div class="grid">
                <div class="row">
                    <div class="l-3">
                        <div class="content__display">
                            <span>Hiện</span>
                            <select class="content__display-select">
                                <option>10</option>
                                <option>20</option>
                                <option>50</option>
                                <option>100</option>
                            </select>
                            <span>Sản Phẩm</span>
                        </div>
                    </div>
                    <div class="l-o-4">
                       <div class="content__display-search">
                            <span class="search-title">Tìm Kiếm : </span>
                            <input class="search-input" placeholder="Nhập sản phẩm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="manageProduct__content-bottom">
            <div class="grid">
                <div class="row">
                    <div class="l-12">
                    <div class="product-form">
                        <table class="product-form__table" >
                        
                            <thead >
                                <th class="ID">ID</th>
                                <th class="Name">Tên sản phẩm</th>
                                <th class="Img">Ảnh</th>
                                <th class="Amount">Số lượng</th>
                                <th class="Status">Tình Trạng</th>
                                <th class="Price">Giá tiền</th>
                                <th class="Category">Danh mục</th>      
                                <th class="Feature">Tính năng</th>
                            </thead>
                            <tbody class="product-form__table-content">
                                <?php
                                
                                    $listShoes=$data['listShoes'];

                                    for($i=0; $i< count($listShoes);$i++)
                                    {
                                        $id=$listShoes[$i]['ProductID'];
                                        $Type=$listShoes[$i]['Type'];
                                        $ProductName=$listShoes[$i]['ProductName'];
                                        $Price=$listShoes[$i]['Price']/1000;
                                        $PrimaryImg=$listShoes[$i]['PrimaryImg'];
                                       
                                        echo"
                                        <tr>
                                        <th class='ProductID'>$id</th>
                                        <th>$ProductName</th>
                                        <th><img src='$PrimaryImg' class='product-img'></th>
                                        <th>100</th>
                                        <th>
                                            <span class='badge bg-success'>Còn hàng</span>
                                        </th>
                                        <th>$Price.000đ</th>
                                        <th>$Type</th>
                                        <th>
                                            
                                            <a style=' text-decoration: none;' class='product-edit' href='./index.php?url=AdminProduct/edit/$id' >
                                                <i class='edit-icon fa-solid fa-pen'></i>
                                            </a>
                                            <a style=' text-decoration: none;' class='product-delete' href='./index.php?url=AdminProduct/delete/$id'>
                                                <i class='delete-icon fa-solid fa-trash'></i>
                                            </a>
                                                               
                                        </th>
                                    </tr>
                                                                     
                                        ";
                                    }
                                ?>
                                
                            </tbody>  
                            </table>
                        </div>
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








<?php /*
<div class="modal-modified">
    <div class="modal__overlay"></div>
    <?php
   
                $listShoes=$data['listShoes'];
                
                echo $_GET['id'];

              

    ?>
                
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
                    <input class="form-control" type="text" name='ProductID' value=<?php echo $shoes['ProductID'] ?> readonly>
                </div>
                <div class="form-group l-6">
                    <label class="control-label">Tên sản phẩm</label>
                    <input class="form-control" type="text" name='ProductName' required="" value=<?php echo $shoes['ProductName'] ?>>
                </div>
                <div class="form-group  l-6">
                    <label class="control-label">Số lượng</label>
                    <input class="form-control" type="number" required="" value="20">
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
                    <input class="form-control" name='Price' type="text" value=<?php echo $shoes['Price'] ?>>
                </div>
                <div class="form-group l-6">
                    <label class="control-label">Ảnh chính</label>
                    <input class="form-control" name='PrimaryImg' type="text" value=<?php echo $shoes['PrimaryImg'] ?>>
                </div>
                <div class="form-group l-6">
                    <label class="control-label">Ảnh 1</label>
                    <input class="form-control" type="text" name='Img1' value=<?php echo $shoes['Img1'] ?>>
                </div>
                <div class="form-group l-6">
                    <label class="control-label">Ảnh 2</label>
                    <input class="form-control" type="text" name='Img2' value=<?php echo $shoes['Img2'] ?>>
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
            <button class="btn btn-cancel cancel-back-product" data-dismiss="modal" href="#">Hủy bỏ</button>
            <br>
        </div>
        <br>
        <div class="bottom"></div>
    </div>
  
   
</div>
<div class="modal-error">
    <div class="modal__overlay"></div>
                
    <div class="modal__body-error">
        <div class="grid">                    
            <div class="row">
                <div class="form-group  l-12">
                <span class="canhbao">
                    <h5>CẢNH BÁO</h5>
                </span>
                </div>
            </div>
            <div class="row edit">
                <span class="question">
                    <h5 class="question1">Bạn có chắc muốn xóa sản phẩm này không ?</h5>
                </span>
            </div>
            <br>
            <?php  $ProductID='';


                if(!empty($_GET['id']))
                {
                    $ProductID=$_GET['id'];
             
                }
            ?>
            <a class="btn btn-save" href="./index.php?url=AdminProduct/delete/<?php echo $ProductID ?>">Xác nhận</a>
            <btton class="btn btn-cancel cancel-delete-product" data-dismiss="modal" >Hủy bỏ</button>
            <br>
        </div>
        <br>
        <div class="bottom"></div>
    </div>
  
   
</div>
*/?>