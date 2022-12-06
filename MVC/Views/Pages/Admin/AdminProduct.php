<div class="manageProduct">
    <div class="manageProduct__title">
        <h4 class="manageProduct__title-text"> Quản Lý Sản Phẩm</h4>
    </div>
    <div class="manageProduct__content">
        <div class="manageProduct__content-heading">
            <div class="grid">
                <div class="row">
            <div class="l-2 m-3 c-6">
                <a class="btn btn-add btn-sm" href="#" title="Thêm">
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
                        
                            <tr>
                                <th >ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá </th>
                                <th>Danh mục</th>
                                <th>Nhà xuất bản</th>
                                <!--<th>Mô tả</th>-->      
                                <th>Tính năng</th>
                            </tr>
                          
                            <?php 
                              /*
                            $listBook=$data['listBook'];

                            for($i=0; $i<count($listBook);$i++)
                            {
                                $BookID=$listBook[$i]['BookID'];
                                $BookName=$listBook[$i]['BookName'];
                                $Price=$listBook[$i]['Price']/1000;
                                $Type=$listBook[$i]['Type'];
                                $PublisherName=$listBook[$i]['PublisherName'];
                                $Description=$listBook[$i]['Description'];
                                
                                echo "
                                <tr>
                                    <th>$BookID</th>
                                    <th>$BookName</th>
                                    <th>$Price.000đ</th>
                                    <th>$Type</th>
                                    <th>$PublisherName</th>
                                

                                    <th>
                                        <a style=' text-decoration: none;' href='index.php?url=AdminPrimary/edit/$BookID'>
                                            <i class='edit-icon fa-solid fa-pen'></i>
                                        </a>
                                        <a style=' text-decoration: none;' href='index.php?url=AdminPrimary/delete/$BookID'>
                                            <i class='delete-icon fa-solid fa-trash'></i>
                                        </a>                           
                                    </th>
                                    
                                </tr>  
                                ";
                            }
                            */?>
                 
                            </table>
                        </div>
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    
</div>