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
                            <input class="search-input" placeholder="Nhập sản phẩm">
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
                                <tr>
                                    <th>01</th>
                                    <th>Nguyễn Lê Minh Bảo </th>
                                    <th><img src="data:image/jpeg;base64,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" class="product-img"></th>
                                    <th>2002-09-06</th>
                                    <th class="email">bao.nguyenminhbaott5@hcmut.edu.vn</th>
                                    <th>0398841276</th>
                                    <th class="email">Quảng Ngãi</th>
                                    <th>
                                        <button style=' text-decoration: none;' class="user-edit" href='#'>
                                            <i class='edit-icon fa-solid fa-pen'></i>
                                        </button>
                                        <button style=' text-decoration: none;' class='user-delete' href='#'>
                                            <i class='delete-icon fa-solid fa-trash'></i>
                                        </button>                           
                                    </th>
                                </tr>
                          
                                

                                   
                            </tbody>  
                            </table>
                        </div>
                 
                    </div>
                </div>
            </div>
        </div>
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