<div class="product-form">
    <h3 class="product-form__heading">Product edit</h3>
    <?php
        $book=$data['book'];
        $BookID=$book[0]['BookID'];
        $BookName=$book[0]['BookName'];
        $Price=$book[0]['Price'];
        $Type=$book[0]['Type'];
        $PublisherName=$book[0]['PublisherName'];
        $Description=$book[0]['Description'];
        $BookFile=$book[0]['BookFile'];
        $image1=$book[0]['image1'];
        $image2=$book[0]['image2'];
    ?>
    <table class="product-form__table" >
    <form method="post" action="./index.php?url=AdminPrimary/update/<?php echo $BookID ?>" >
        <tr>
            <th>Mã sản phẩm</th>
            <th><input type="text" name="BookID" value="<?php echo $BookID ?>"  readonly></th>
        </tr>
        <tr>
            <th>Tên sản phẩm</th>
            <th><input type="text" name="BookName" value="<?php echo $BookName ?>"></th>
        </tr>
        <tr>
            <th>Giá sản phẩm</th>
            <th><input type="text" name="Price" value="<?php echo $Price ?>"></th>
        </tr>
        <tr>
            <th>Danh mục</th>
            <th>
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
        </tr>
        <tr>
            <th>Nhà xuất bản</th>
            <th>
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
            <th>Ảnh chính</th>
            <th><input type="text" name="BookFile" value="<?php echo $BookFile ?>"></th>
        </tr>
        <tr>
            <th>Ảnh bổ sung 1</th>
            <th><input type="text" name="image1" value="<?php echo $image1 ?>"></th>
        </tr>
        <tr>
            <th>Ảnh bổ sung 2</th>
            <th><input type="text" name="image2" value="<?php echo $image2 ?>"></th>
        </tr>
        <tr>
            <th>Mô tả</th>
            <th>
                <textarea class="product_descrip-edit" name="Description" rows='10' cols='40'>
                    <?php echo $Description ?>
                </textarea>
            </th>
        </tr>
        <tr>
            <th><input type="submit" name="product_edit" value="Sửa Sản Phẩm" class="submit"></th>
            <th>
                <button class="back">
                    <a href="./index.php?url=AdminPrimary" class="back-link">
                        Trở Lại
                    </a>
                </button>
            </th>
        </tr>
    </form>
</table>