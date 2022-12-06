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
        <div class="cart-row">
            <div class="cart-row-col1">
                <img src="https://bucket.nhanh.vn/store3/92233/ps/20220426/F6S1019_1__1_.jpg" alt="">

            </div>
            <div class="cart-row-col2">
                <h3>Sandals F6 sport future đen size 44</h3>
                <button class="cart-delete" onclick=cart_del()>Xóa</button>
            </div>
            <div class="cart-row-col3">
                <span class="add-down-item" onclick=item_down()>-</span>
                <input class="cart-item-number" type="text" name="" id="" value="1">
                <span class="add-up-item" onclick=item_up()>+</span>
            </div>
            <div class="cart-row-col4">
                <span class="cart-item-price">
                    479.000
                </span>
                <span>₫</span>
            </div>
        </div>
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
                    <input class="totalprice" type="text" name="" id="" value="479.000">
                    <span>₫</span>
                </span>
            </p>
        </div>
        <div class="cart-buttons">
            <button class="buycart" type="button" id="" name="">Tiến hành đặt hàng</button>
        </div>
    </div>
</div>
<script>
    function item_down() {
        let data = document.querySelector(".cart-item-number").value
        let temp = parseInt(data)
        let price = document.querySelector(".cart-item-price").textContent
        let totalprice = document.querySelector(".totalprice").value
        price=parseFloat(price.replaceAll('.',''))
        totalprice=parseFloat(totalprice.replaceAll('.',''))
        let priceitem = price/temp
        if (temp > 1) {
            temp = temp - 1
            price -= priceitem
            totalprice -= priceitem
            price=price.toLocaleString('vi-VN')
            totalprice=totalprice.toLocaleString('vi-VN')
            document.querySelector(".totalprice").value=totalprice
            document.querySelector(".cart-item-price").textContent = price
        }
        document.querySelector(".cart-item-number").value = temp
    }
    function item_up() {
        let data = document.querySelector(".cart-item-number").value
        let temp = parseInt(data)
        let price = document.querySelector(".cart-item-price").textContent
        let totalprice = document.querySelector(".totalprice").value
        price=parseFloat(price.replaceAll('.',''))
        totalprice=parseFloat(totalprice.replaceAll('.',''))
        let priceitem = price/temp
        temp = temp + 1
        price += priceitem
        totalprice +=priceitem
        price=price.toLocaleString('vi-VN')
        totalprice=totalprice.toLocaleString('vi-VN')
        document.querySelector(".totalprice").value=totalprice
        document.querySelector(".cart-item-price").textContent = price
        document.querySelector(".cart-item-number").value = temp
    }
    function cart_del() {
        confirm('Bạn có chắc muốn xóa sản phẩm không')
    }
    
</script>