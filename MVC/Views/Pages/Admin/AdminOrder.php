<div class="manageOrder">
    <div class="manageOrder__title">
        <h4 class="manageOrder__title-text"> Quản Lý Đơn Hàng</h4>
    </div>
    <div class="manageOrder__content">
        <div class="manageOrder__content-heading">
            <div class="grid">
                <div class="row">
            <div class="l-2 m-3 c-6">
                <a class="btn btn-add btn-sm" href="#" title="Thêm">
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
                    <div class="l-3 m-3 c-12">
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
                    <div class="l-o-4 m-o-2">
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
                                <th class="Amount">Địa chỉ</th>
                                <th class="Amount">Số điện thoại</th>
                                <th class="Price">Tổng tiền</th>
                                <th class="Status">Tình Trạng</th>      
                                <th class="Feature">Tính năng</th>
                            </thead>
                            <tbody>

                            <?php 
                            $listCustomer=$data['listCustomer'];
                            $listOrder=$data['listOrder'];

                            for($i=0;$i<count($listCustomer);$i++)
                            {
                                $orderID=$listCustomer[$i]['orderID'];
                                $name=$listCustomer[$i]['fullname'];
                                $address='';
                                $orders='';
                                $phone='';
                                $totalPrice=0;
                                $oderState='';
                                for($j=0;$j<count($listOrder);$j++)
                                {
                                    if($listOrder[$j]['customerid']==$listCustomer[$i]['customerid'])
                                    {
                                        $address=$listOrder[$j]['address'];
                                        $orders=$orders.$listOrder[$j]['ProductName'].' -- SL:'.$listOrder[$j]['number'].'<br> ';
                                    
                                        $phone=$listOrder[$j]['phonenumber'];
                                        $totalPrice=$totalPrice+$listOrder[$j]['number']*$listOrder[$j]['Price'];
                                        $orderState=$listOrder[$j]['orderstate'];
                                    }
                                   
                                }
                                echo "
                                        
                                <tr>
                                    <th class='order'>$orderID</th>
                                    <th class='order'>$name</th>
                                    <th class='order'>$orders</th>
                                    <th class='order'>$address</th>
                                    <th class='order'>$phone</th>
                                    <th class='order'>";
                                    if($totalPrice/1000000>=1) {
                                        $a=$totalPrice/1000000;
                                        echo $a;   
                                    }
                                    else echo $totalPrice/1000;
                                echo".000đ
                                    </th>
                                    <th>
                                        <button class='status-order badge bg-info'>$orderState</button>
                                    </th>
                                    <th>
                                        <button style=' text-decoration: none;' class='order-edit'>
                                            <i class='edit-icon fa-solid fa-pen'></i>
                                        </button>
                                      "
                                    ?>  
                                        <a style=' text-decoration: none;' class='order-delete' href='./index.php?url=AdminOrder/delete/<?php echo $orderID ?>'
                                        onclick="return confirm('Bạn có chắc muốn xóa đơn hàng này')">
                                            <i class='delete-icon fa-solid fa-trash'></i>
                                        </a>                           
                                    </th>
                                </tr>

                                



                            <?php }?>
                                                        
                            
                                   
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
                    <option>Chờ xử lý</option>
                    <option>Đang vận chuyển</option>
                    <option>Hoàn thành</option>
                    <option>Đã hủy</option>
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
*/
?>