<div class="manageUser">
    <div class="manageUser__title">
        <h4 class="manageUser__title-text"> Quản Lý Khách Hàng</h4>
    </div>
    <div class="manageUser__content">
        <div class="manageUser__content-heading">
            <div class="grid">
                <div class="row">
            <div class="l-2 m-3 c-6">
                <a class="btn btn-add btn-sm" href="#" title="Thêm">
                    <i class="fas fa-plus"></i>
                Tạo mới Khách Hàng</a>
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
        <div class="manageUser__content-content">
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
                            <span>Khách hàng</span>
                        </div>
                    </div>
                    <div class="l-o-4">
                       <div class="content__display-search">
                            <span class="search-title">Tìm Kiếm : </span>
                            <input class="search-input" placeholder="Nhập tên khách hàng">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="manageUser__content-bottom">
            <div class="grid">
                <div class="row">
                    <div class="l-12">
                    <div class="user-form">
                        <table class="user-form__table" >
                        
                            <thead>
                                <th class="ID">ID</th>
                                <th class="Name">Tên khách hàng</th>
                                <th class="Avatar">Avatar</th>
                                <th class="DoB">Ngày sinh</th>
                                <th class="Email">Email</th>
                                <th class="PhoneNumber">Số điện thoại</th>
                                <th class="Address">Địa chỉ</th>      
                                <th class="Feature">Tính năng</th>
                            </thead>
                            <tbody>
                               <?php
                                    $listUser=$data['listUser'];

                                    for($i=0;$i<count($listUser);$i++)
                                    {
                                        $id=$listUser[$i]['ID'];
                                        $name=$listUser[$i]['FirstName'].' '.$listUser[$i]['LastName'];
                                        $avatar=$listUser[$i]['Avatar'];
                                        $DoB=$listUser[$i]['DoB'];
                                        $Email=$listUser[$i]['AccountName'];
                                        $phone=$listUser[$i]['PhoneNumber'];
                                        $Address=$listUser[$i]['Address'];

                                        echo "
                                        <tr>
                                            <th>$id</th>
                                            <th>$name</th>
                                            <th><img src='$avatar' class='product-img'></th>
                                            <th>$DoB</th>
                                            <th class='email'>$Email</th>
                                            <th>0398841276</th>
                                            <th class='email'>$Address</th>
                                            <th>
                                                <button style=' text-decoration: none;' class='user-edit' href='#'>
                                                    <i class='edit-icon fa-solid fa-pen'></i>
                                                </button>
                                                <a style=' text-decoration: none;' class='user-delete' href='./index.php?url=AdminUser/delete/$id'>
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
                    <h5 class="question1">Bạn có chắc muốn xóa khách hàng này không ?</h5>
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
*/?>