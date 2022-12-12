<div class="manageNews">
    <div class="manageNews__title">
        <h4 class="manageNews__title-text"> Quản Lý Tin Tức</h4>
    </div>
    <div class="manageNews__content">
        <div class="manageNews__content-heading">
            <div class="grid">
                <div class="row">
            <div class="l-2 m-3 c-6">
                <a class="btn btn-add btn-sm" href="./index.php?url=AdminNews/add" title="Thêm">
                    <i class="fas fa-plus"></i>
                 Tạo mới tin tức</a>
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
        <div class="manageNews__content-content">
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
                            <span>Tin Tức</span>
                        </div>
                    </div>
                    <div class="l-o-4">
                       <div class="content__display-search">
                            <span class="search-title">Tìm Kiếm : </span>
                            <input class="search-input" placeholder="Nhập tin tức cần tìm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="manageNews__content-bottom">
            <div class="grid">
                <div class="row">
                    <div class="l-12">
                    <div class="News-form">
                        <table class="News-form__table" >
                        
                            <thead>
                                <th class="ID">ID</th>
                                <th class="Name">Tiêu đề</th>
                                <th class="Img">Ảnh</th>
                                <th class="Status">Hãng</th>
                                <th class="Description">Nội dung</th>      
                                <th class="Feature">Tính năng</th>
                            </thead>
                            <tbody>
                                <?php 
                                
                                $listNews=$data['listNews'];

                                for($i=0;$i<count($listNews);$i++)
                                {
                                    $NewsID=$listNews[$i]['NewsID'];
                                    $NewsName=$listNews[$i]['NewsName'];
                                    $NewsImg=$listNews[$i]['NewsImg'];
                                    $Type=$listNews[$i]['Type'];
                                    $Description=$listNews[$i]['Description'];
                                    
                                    echo "
                                        <tr>
                                            <th>$NewsID</th>
                                            <th>$NewsName</th>
                                            <th><img src='$NewsImg' class='product-img'></th>
                                            <th>$Type</th>
                                            <th class='description'>
                                                $Description
                                            </th>
                                            <th >
                                                <a style=' text-decoration: none;' class='product-edit' href='./index.php?url=AdminNews/edit/$NewsID'>
                                                    <i class='edit-icon fa-solid fa-pen'></i>
                                                </a>
                                                <a style=' text-decoration: none;' class='product-delete' href='./index.php?url=AdminNews/delete/$NewsID'>
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
                
    <div class="modal__body">
        <div class="grid">                    
            <div class="row">
                <div class="form-group  l-12">
                <span class="thong-tin-thanh-toan">
                    <h5>Chỉnh sửa tin tức</h5>
                </span>
                </div>
            </div>
            <div class="row edit">
                <div class="form-group l-6 m-6 c-12 ">
                    <label class="control-label">Mã tin </label>
                    <input class="form-control" type="text" value="01" readonly>
                </div>
                <div class="form-group l-6 m-6 c-12">
                    <label class="control-label">Tiêu đề</label>
                <input class="form-control" type="text" required="" value="Ra mắt sản phẩm mới">
                </div>
                <div class="form-group l-6 m-6 c-12">
                    <label class="control-label">Ảnh</label>
                    <input class="form-control" type="text" value="5.600.000">
                </div>
                <div class="form-group l-6 m-6 c-12 ">
                    <label for="exampleSelect1" class="control-label">Tình trạng sản phẩm</label>
                    <select class="form-control" id="exampleSelect1">
                    <option>Nike</option>
                    <option>Thượng đình</option>
                    </select>
                </div>
                <div class="form-group l-12 m-12 c-12">
                    <label class="control-label">Nội dung</label>
                    <textarea class="form-control" type="text" placeholer="Nội dung tin tức"></textarea>
                </div>
    
                
            </div>
            <br>
            <button class="btn btn-save" type="button">Lưu lại</button>
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
                    <h5 class="question1">Bạn có chắc muốn xóa tin này không ?</h5>
                </span>
            </div>
            <br>
            <button class="btn btn-save" type="button">Xác nhận</button>
            <btton class="btn btn-cancel cancel-delete-product" data-dismiss="modal" href="#">Hủy bỏ</button>
            <br>
        </div>
        <br>
        <div class="bottom"></div>
    </div>
  
   
</div>
*/ ?>