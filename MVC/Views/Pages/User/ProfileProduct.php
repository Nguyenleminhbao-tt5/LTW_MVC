<?php 
// $product=$data['detailProduct'][0];
// $name=$product['ProductName'];
// $type=$product['Type'];
// $price=$product['Price'];
// $code=$product['ProductID'];
// $des=$product['Description'];
// $des = str_replace('-', '<br>', $des);

// $listImg=[$product['PrimaryImg'],$product['PrimaryImg'],$product['PrimaryImg']];

?>

<div class="ProfileProduct">
    <div class="pathUrl"> 
        <span class="path1">
            <i class=" home-icon fa-solid fa-house-chimney"></i>
            Trang chủ
        </span>
        <span>|</span>
        <span class="path2">
            <?php //echo $type ?>
        </span>
    </div>
    <div class="contentProduct">
        <div class="grid">
            <div class="grid__row">
                <div class="grid__column-60">
                    <ul class="product__listImg">
                        <li class="product__listImg-item active">
                            <button class="left-btn">
                                <i class="left-icon fa-solid fa-angle-left"></i>
                            </button>
                            <img class="img img--active" src=" <?php //echo $listImg[0] ?>">
                            <img class="img" src=" <?php //echo $listImg[1] ?>">
                            <img class="img" src=" <?php //echo $listImg[2] ?>">
                            <button class="right-btn">
                                <i class="right-icon fa-solid fa-angle-right"></i>
                            </button>
                        </li>
                        <li class="product__listImg-item">
                            <img class="img" src=" <?php //echo $img1 ?>">
                        </li>
                        <li class="product__listImg-item">
                            <img class="img" src=" <?php //echo $img2 ?>">
                        </li>
                        <li class="product__listImg-item">
                            <img class="img" src=" <?php //echo $img3 ?>">
                        </li>
                    </ul>
                </div>
                <div class="grid__column-40">
                    <div class="product__detail">
                        <div class="product__detail-name">
                            <span class="title"> <?php //echo $name ?></span>
                            <div class="product-code">
                                <span class="code">Mã sản phẩm:</span>
                                <span class="id"> <?php //echo $code ?></span>
                            </div>
                        </div>
                        <div class="product__detail-price"> <?php //echo $price/1000 ?>.000đ</div>
                        <div class="product__detail-size">
                            <div class="size-heading">
                                <span class="size-heading__title1">KÍCH THƯỚC</span>
                                <a href="" class="size-heading__title2">HƯỚNG DẪN CHỌN KÍCH THƯỚC</a>
                            </div>
                            <div class="size-bottom">
                                <div class="size-bottom_list">
                                    <button class="size-bottom_list-item">37</button>
                                    <button class="size-bottom_list-item">38</button>
                                    <button class="size-bottom_list-item">39</button>
                                    <button class="size-bottom_list-item">40</button>
                                    <button class="size-bottom_list-item">41</button>
                                    <button class="size-bottom_list-item">42</button>
                                    <button class="size-bottom_list-item">43</button>
                                </div>
                            </div>
                            <div class="product__detail-amount">
                                <span class="amount-heading">SỐ LƯỢNG</span>
                                <div class="amount-bottom">
                                    <button class="minus">-</button>
                                    <span class="amount">1</span>
                                    <button class="add">+</button>
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
                                <button class="buy-btn">Mua ngay</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="description">
        <span class="description-heading">Mô tả chi tiết</span>
        <ul class="description-text">
            <?php //echo $des ?>
        </ul>
    </div>
    <div class="comment">
    </div> 
</div>

