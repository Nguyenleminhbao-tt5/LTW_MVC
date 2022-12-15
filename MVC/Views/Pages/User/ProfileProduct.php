<?php
$product = $data['detailProduct'][0];
$name = $product['ProductName'];
$type = $product['Type'];
$price = $product['Price'];
$code = $product['ProductID'];
$des = $product['Description'];
$des = str_replace('-', '<br>', $des);

$listImg = [$product['PrimaryImg'], $product['PrimaryImg'], $product['PrimaryImg']];
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    if ($error == "1") {
        unset($_SESSION['error']);
        echo "<script> alert('Comment không được quá 100 ký tự')</script>";
    }
}

$listCategory=$data['listCategory'];
$index=0;
for($i=0;$i<count($listCategory);$i++)
{
    if($listCategory[$i]['Type']==$type) $index=$i;
}
?>

<div class="ProfileProduct">
    <div class="pathUrl">
        <a href="./index.php" class="path1">
            <i class=" home-icon fa-solid fa-house-chimney"></i>
            Trang chủ
        </a>
        <span>|</span>
        <a href="./index.php?url=CategoryProduct/select/<?php echo $index ?>" class="path2">
            <?php
            echo $type ?>
        </a>
    </div>
    <div class="contentProduct">
        <div class="grid">
            <form class="grid__row" action='./index.php?url=Cart/insert' method='POST'>
                <div class="grid__column-60 m-7 c-12">
                    <div class="product__listImg">  
                            <button class="left-btn" type='button'>
                                <i class="left-icon fa-solid fa-angle-left"></i>
                            </button>
                            <img class="img img--active" src=" <?php echo $product['PrimaryImg'] ?>">
                            <img class="img " src=" <?php echo $product['Img1'] ?>">
                            <img class="img " src=" <?php echo $product['Img2'] ?>">
                            <button class="right-btn" type='button'>
                                <i class="right-icon fa-solid fa-angle-right"></i>
                            </button>
                       
                    </div>
                </div>
                <div class="grid__column-40 m-5 c-12">
                    <div class="product__detail">
                        <div class="product__detail-name">
                            <span class="title">
                                <?php echo $name ?>
                            </span>
                            <div class="product-code">
                                <span class="code">Mã sản phẩm:</span>
                                <span>
                                    <?php echo " " . $code; ?>
                                </span>
                                <input type="text" name="ProductID" style="display:none;"
                                    value="<?php echo " " . $code; ?>">
                            </div>
                        </div>
                        <div class="product__detail-price">
                            <?php if ($price / 1000000 >= 1) {
                                $a = $price / 1000000;
                                echo $a;
                            } else
                                echo $price / 1000 ?>.000đ
                        </div>
                        <div class="product__detail-size">
                            <div class="size-heading">
                                <span class="size-heading__title1">KÍCH THƯỚC</span>
                                <!-- <a href="" class="size-heading__title2">HƯỚNG DẪN CHỌN KÍCH THƯỚC</a> -->
                            </div>
                            <div class="size-bottom">
                                <div class="size-bottom_list">
                                    <button type='button' class="size-bottom_list-item size--active">37</button>
                                    <button type='button' class="size-bottom_list-item">38</button>
                                    <button type='button' class="size-bottom_list-item">39</button>
                                    <button type='button' class="size-bottom_list-item">40</button>
                                    <button type='button' class="size-bottom_list-item">41</button>
                                    <button type='button' class="size-bottom_list-item">42</button>
                                    <button type='button' class="size-bottom_list-item">43</button>
                                </div>
                                <input   class="size" value="37" name='Size'>
                            </div>
                            <div class="product__detail-amount">
                                <span class="amount-heading">SỐ LƯỢNG</span>
                                <div class="amount-bottom">
                                    <input type="number" class="amount" name="Amount" min="1" max="10" value='1'>
                                </div>
                            </div>
                            <div class="product__detail-addtional">
                                <ul class="addtional-text">
                                    <li class="addtional-heading">Mua 1 tặng 1</li>
                                    <li>- Chọn 2 hoặc 4 sản phẩm trong danh mục Mua 1 tặng 1</li>
                                    <li>- Hệ thống sẽ tự giảm ở bước thanh toán</li>
                                    <li>- Không áp dụng chung với sale 30% - 20% - 10%</li>
                                </ul>
                            </div>
                            <div class="product__detail-submit">
                                <button class="cart-btn">Thêm vào giỏ hàng</button>
                                <!-- <button class="buy-btn">Mua ngay</button> -->
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>

    </div>
    <div class="description">
        <span class="description-heading">Mô tả chi tiết</span>
        <ul class="description-text">
            <?php echo $des ?>
        </ul>
    </div>
    <div class="comment">
        <span class="comment-heading">Bình luận</span>
        <div class="comment-add">
            <form id="formcomment" method='POST' action="./index.php?url=ProfileProduct/comment" style="margin-bottom: 20px;">
                <input type="text" name="ProductID" style="display:none;" value="<?php echo " " . $code; ?>">
                <textarea style="width:100%; padding:20px;" name="Comment" id="" cols="30" rows="10"></textarea>
                <button form="formcomment" class="comment-btn" type="submit">Bình luận</button>
            </form>
        </div>
        <?php
        $comments = $data['Comments'];
        require "./MVC/Views/Module/Comment.php";
        for ($i = 0; $i < count($comments); $i++) {
            $comment = $comments[$i];
            Comment($comment);
        }
        ?>
    </div>
</div>