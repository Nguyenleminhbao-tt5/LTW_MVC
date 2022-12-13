<div class="list-location">
    <ul>
        <li class="list-location-1">
            <a href="">
                <i class="fa fa-home"></i>
                <span>Trang chủ</span>
            </a>
        </li>
        <li class="list-location-2">| Giỏ hàng</li>
    </ul>
</div>
<div class="cart-wrapper">
    <div class="cart">
        <div class="cart-header">
            <h1>GIỎ HÀNG CỦA BẠN</h1>
        </div>
        <?php
        $total = 0;
        $products = $data['products'];
        require "./MVC/Views/Module/ProductInCart.php";
        for ($i = 0; $i < count($products); $i++) {
            $product = $products[$i];
            $cartid = $product['CartID'];
            $customerid = $product['CustomerID'];
            $id = $product['ProductID'];
            $name = $product['ProductName'];
            $size = $product['Size'];
            $number = $product['Amount'];
            $price = $product['Price'];
            $img = $product['PrimaryImg'];
            $total += $price * $number;
            $props = ['name' => $name, 'price' => $price * $number, 'size' => $size, 'number' => $number, 'img' => $img, 'id' => $id, 'cartid' => $cartid, 'customerid' => $customerid];
            ProductInCart($props);
        }
        ?>
    </div>
    <div class="cart-calculate">
        <div class="title-cart-calculate">
            TÓM TẮT ĐƠN HÀNG
        </div>
        <div class="summary-cart">
            <p class="cart-infor-1">
                <span class="titlecart">Chưa bao gồm phí vận chuyển:</span>
            </p>
            <p class="cart-infor-2">
                <span class="titleorder"><b>Tổng tiền:</b></span>
                <span class="cart-totalprice">
                    <input class="totalprice" type="text" name="" id=""
                        value="<?php echo number_format(($total), 2, '.', ',') ?>">
                    <span>₫</span>
                </span>
            </p>
        </div>
        <div class="cart-buttons">
            <a href="<?php if (count($products) > 0)
                echo "./index.php?url=Pay"; ?>">
                <button class="buycart" type="button" id="" name="">
                    Tiến hành đặt hàng
                </button>
            </a>
        </div>
    </div>
</div>