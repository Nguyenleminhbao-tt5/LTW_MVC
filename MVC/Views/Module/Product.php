<?php

/* props là đối tượng sẽ chưa các thuộc tính của
một Product gồm new(true), sale(int), URL_img(string), name(string),
price_new(float), price_old(float) */


function Product($props=[])
{
    $id=$props['ProductID'];
?>
        <div class="Product">
            <div class="product__top" >
                <a href="./index.php?url=ProfileProduct/show/<?php echo $id?>" class="product__top-link">
                    <img class="product__top-img" src=<?php echo $props['PrimaryImg'] ?> />
                </a>
            </div>
            <div class="product__bot">
                <div class="product__bot-name">
                    <?php echo $props['ProductName'] ?>
                </div>
                <div class="product__bot-price">
                    <button class="price-new"><?php if($props['Price']/1000000>=1) {
                        $a=$props['Price']/1000000;
                        echo $a;   
                    }
                    else echo $props['Price']/1000 ?>.000đ</button>
                    <button class="price-old">200.000đ</button>
                </div>
                <!-- <div class="product__bot-detail">
                    <a href="" class="cart">
                        <i class="cart-icon fa-solid fa-cart-shopping"></i>
                        <span class="cart-text">Thêm giỏ hàng</span>
                    </a>
                    <span class="arow"></span>
                    <a href="" class="detail">
                        <i class="detail-icon fa-solid fa-eye"></i>
                        <span class="detail-text">Xem chi tiết</span>
                    </a>
                </div> -->

            </div>
        </div>

<?php
}
?>