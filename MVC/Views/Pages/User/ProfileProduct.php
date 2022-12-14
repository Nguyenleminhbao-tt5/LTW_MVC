<?php 
$product=$data['detailProduct'][0];
$name=$product['ProductName'];
$type=$product['Type'];
$price=$product['Price'];
$code=$product['ProductID'];


$des=$product['Description'];
$des = str_replace('-', '<br>', $des);

$listImg=[$product['PrimaryImg'],$product['PrimaryImg'],$product['PrimaryImg']];

?>

<div class="ProfileProduct">
    <div class="pathUrl"> 
        <span class="path1">
            <i class=" home-icon fa-solid fa-house-chimney"></i>
            Trang chủ
        </span>
        <span>|</span>
        <span class="path2">
            <?php echo $type ?>
        </span>
    </div>
    <div class="contentProduct">
        <div class="grid">
            <form class="grid__row" action='./index.php?url=Cart/insert' method='POST'>
                <div class="grid__column-60">
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
                <div class="grid__column-40">
                    <div class="product__detail">
                        <div class="product__detail-name">
                            <span class="title"> <?php echo $name ?></span>
                            <div class="product-code">
                                <span class="code">Mã sản phẩm:</span>
                                <span><?php echo " ".$code;?></span>
                                <input type="text" name="ProductID" style="display:none;" value="<?php echo " ".$code;?>">
                            </div>
                        </div>
                        <div class="product__detail-price"> <?php if($price/1000000>=1) {
                        $a=$price/1000000;
                        echo $a;   
                    }
                    else echo $price/1000 ?>.000đ</div>
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
                                <button  class="cart-btn">Thêm vào giỏ hàng</button>
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
            <button class="comment-btn">Bình luận</button>
        </div>
        <div class="comment_detail">
            <div class="comment_detail-user-info">
                <div class="user-avatar">
                    <img src="/LTW_MVC/public/Assets/atm_logo.PNG" alt="user-avatar"> 
                </div>
                <div class="user-info">
                    <p class="user-info-name">NguyenLeMinhBao</p>
                    <p class="user-info-day-comment">Dec 13 2022</p>
                </div>
            </div>
            <div class="comment_detai-user-comment">
                <div class="comment-text">
                    Mặt hàng này tốt quá, xin cảm ơn
                </div>
                <div class="comment-image">
                    <img class="comment-image-child" src="/LTW_MVC/public/Assets/cash_logo.JPG" alt="comment-image-child">
                    <img class="comment-image-child" src="/LTW_MVC/public/Assets/cash_logo.JPG" alt="comment-image-child">
                    <img class="comment-image-child" src="/LTW_MVC/public/Assets/cash_logo.JPG" alt="comment-image-child">
                    <img class="comment-image-child" src="/LTW_MVC/public/Assets/cash_logo.JPG" alt="comment-image-child">
                </div>
            </div>
        </div>
    </div> 
</div>

