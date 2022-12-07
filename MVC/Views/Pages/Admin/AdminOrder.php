<div class="manageOrder">
    <div class="manageOrder__title">
        <h4 class="manageOrder__title-text"> Quản Lý Đơn Hàng</h4>
    </div>
    <div class="manageOrder__content">
        <div class="manageOrder__content-heading">
            <div class="grid">
                <div class="row">
            <div class="l-2 m-3 c-6">
                <a class="btn btn-add btn-sm" href="./index.php?url=AdminOrder/add" title="Thêm">
                    <i class="fas fa-plus"></i>
                 Tạo mới đơn hàng</a>
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
        <div class="manageOrder__content-content">
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
                            <span>Đơn Hàng</span>
                        </div>
                    </div>
                    <div class="l-o-4">
                       <div class="content__display-search">
                            <span class="search-title">Tìm Kiếm : </span>
                            <input class="search-input" placeholder="Nhập đơn hàng">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="manageOrder__content-bottom">
            <div class="grid">
                <div class="row">
                    <div class="l-12">
                    <div class="order-form">
                        <table class="order-form__table" >
                        
                            <thead>
                                <th class="ID">ID</th>
                                <th class="User">Khách hàng</th>
                                <th class="Order">Đơn hàng</th>
                                <th class="Amount">Số lượng</th>
                                <th class="Price">Tổng tiền</th>
                                <th class="Status">Tình Trạng</th>      
                                <th class="Feature">Tính năng</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>01</th>
                                    <th>Nguyễn Lê Minh Bảo</th>
                                    <th>Giày Nike, giày thượng đình</th>
                                    <th>2</th>
                                    <th>100.000đ</th>
                                    <th>
                                        <span class="badge bg-success">Hoàn thành</span>
                                    </th>
                                    <th>
                                        <button style=' text-decoration: none;' class="order-edit" href='#'>
                                            <i class='edit-icon fa-solid fa-pen'></i>
                                        </button>
                                        <button style=' text-decoration: none;' class='order-delete' href='#'>
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
<div class="modal-modified">
    <div class="modal__overlay"></div>
                
    <div class="modal__body">
        <div class="grid">                    
            <div class="row">
                <div class="form-group  l-12">
                <span class="thong-tin-thanh-toan">
                    <h5>Chỉnh sửa thông tin đơn hàng</h5>
                </span>
                </div>
            </div>
            <div class="row edit">
                <div class="form-group l-6">
                    <label class="control-label">Mã đơn hàng </label>
                    <input class="form-control" type="text" value="01" readonly>
                </div>
                <div class="form-group l-6">
                    <label class="control-label">Tên khách hàng</label>
                <input class="form-control" type="text" required="" value="Nguyễn Lê Minh Bảo">
                </div>
                <div class="form-group l-6">
                    <label class="control-label">Đơn hàng</label>
                <input class="form-control" type="text" required="" value="Giày Nike">
                </div>
                <div class="form-group  l-6">
                    <label class="control-label">Số lượng</label>
                    <input class="form-control" type="number" required="" value="20">
                </div>
                <div class="form-group l-6">
                    <label class="control-label">Tổng tiền</label>
                    <input class="form-control" type="text" value="5.600.000">
                </div>
                <div class="form-group l-6 ">
                    <label for="exampleSelect1" class="control-label">Tình trạng sản phẩm</label>
                    <select class="form-control" id="exampleSelect1">
                    <option>Chưa hoàn thành</option>
                    <option>Hoàn thành</option>
                    <option>Hủy đơn</option>
                    </select>
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
                    <h5 class="question1">Bạn có chắc muốn xóa đơn hàng này không ?</h5>
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