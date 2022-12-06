<div class="product-form">
    <h3 class="product-form__heading">Product Insert</h3>
    <table class="product-form__table" >
        <form method="post" action="./index.php?url=AdminPrimary/insert" >
            <tr>
            
                <th>Mã sản phẩm<input type="text" name="BookID"></th>
                <th>Ảnh chính<input type="text" name="BookFile"></th>
                <th rowspan="3">Mô tả<textarea name="Description" placeholder="Mô tả sản phẩm" 
                 rows="10" cols="45" resize style="margin-top:10px;width:100%" class='product_descrip'></textarea></th>
            </tr>
            <tr>
            
                <th>Tên sản phẩm<input type="text" name="BookName"></th>
                <th>Ảnh bổ sung 1<input type="text" name="image1"></th>
            </tr>
            <tr>
            
                <th>Giá sản phẩm<input type="text" name="Price"></th>
                <th>Ảnh bổ sung 2<input type="text" name="image2"></th>
                
            </tr>
            <tr>
            <th> Danh mục
                    <select name="Type">
                        <?php
                        $listCategory=$data['listCategory'];
                        for($i=0;$i<count($listCategory);$i++)
                        {
                            $Type=$listCategory[$i]['Type'];
                            echo "<option>$Type</option>";
                        }
                        ?>
                    </select>
                </th>
                <th>Tác giả<input type="text" name="product_sales"></th>
                <th>Nhà xuất bản
                    <select name="PublisherName">
                    <?php
                        $listPublisher=$data['listPublisher'];
                        for($i=0;$i<count($listPublisher);$i++)
                        {
                            $PublisherName=$listPublisher[$i]['PublisherName'];
                            echo "<option>$PublisherName</option>";
                        }
                        ?>
                    </select>
                </th>
           
            </tr>
            <tr>
                <th><input type="submit" name="product_insert" value="Thêm sản phẩm" class="submit"></th>
            </tr>
        </form>
    </table>
</div>   


<div class="product-form">
    <h3 class="product-form__heading">Product show</h3>
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
        ?>
                 
</table>
</div>