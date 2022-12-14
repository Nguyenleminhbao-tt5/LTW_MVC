<?php
/*
1 props có name, size, price, number, img, id, customerid, cartid
*/
function ProductInCart($props)
{
    setlocale(LC_MONETARY, 'en_US');
?>
<div class="cart-row">
    <div class="cart-row-col1">
        <img src="<?php echo $props['img'] ?>" alt="">
    </div>
    <div class="cart-row-col2">
        <h3>
            <?php echo $props['name'] ?>
        </h3>
        <span>
            <?php echo $props['size'] ?>
        </span>
        <form method='post' action='./index.php?url=Cart/delete/<?php echo $props['cartid'] . '/' . $props['id'] ?>'>
            <button type="submit" class="cart-delete"
                onclick="return confirm('Bạn có chắc muốn xóa sản phẩm')">Xóa</button>
        </form>
    </div>
    <div class="cart-row-col3">
        <form id="<?php echo $props['id'] . 'd' ?>" method="post"
            action="./index.php?url=Cart/down/<?php echo $props['cartid'] . '/' . $props['id'] ?>">
            <span class="add-down-item" onclick=item_down(<?php echo $props['id'] ?>)>-</span>
        </form>
        <input class="cart-item-number" type="text" name="" id="<?php echo $props['id'] ?>"
            value="<?php echo ($props['number']) ?>">
        <form id="<?php echo $props['id'] . 'u' ?>" method="post"
         action="./index.php?url=Cart/up/<?php echo $props['cartid'] . '/' . $props['id'] ?>">
            <span class="add-up-item" onclick=item_up(<?php echo $props['id'] ?>)>+</span>
        </form>
    </div>
    <div class="cart-row-col4">
        <span class="cart-item-price" id='<?php echo $props['id'] . 'x' ?>'>
            <?php echo number_format(($props['price']), 2, '.', ',') ?>
        </span>
        <span>₫</span>
    </div>
</div>
<?php } ?>
<script>
    function item_down(id) {
        let data = document.getElementById(`${id}`).value
        let temp = parseInt(data)
        let price = document.getElementById(`${id}x`).textContent
        let totalprice = document.querySelector(".totalprice").value
        price = parseFloat(price.replaceAll('.', ''))
        totalprice = parseFloat(totalprice.replaceAll('.', ''))
        let priceitem = price / temp
        if (temp > 1) {
            temp = temp - 1
            price -= priceitem
            totalprice -= priceitem
            price = price.toLocaleString('vi-VN')
            totalprice = totalprice.toLocaleString('vi-VN')
            document.querySelector(".totalprice").value = totalprice
            document.getElementById(`${id}x`).textContent = price
            document.getElementById(`${id}`).value = temp
            document.getElementById(`${id}d`).submit();
        }
        else preventdefault();
    }
    function item_up(id) {
        let data = document.getElementById(`${id}`).value
        let temp = parseInt(data)
        let price = document.getElementById(`${id}x`).textContent
        let totalprice = document.querySelector(".totalprice").value
        price = parseFloat(price.replaceAll('.', ''))
        totalprice = parseFloat(totalprice.replaceAll('.', ''))
        let priceitem = price / temp
        temp = temp + 1
        price += priceitem
        totalprice += priceitem
        price = price.toLocaleString('vi-VN')
        totalprice = totalprice.toLocaleString('vi-VN')
        document.querySelector(".totalprice").value = totalprice
        document.getElementById(`${id}x`).textContent = price
        document.getElementById(`${id}`).value = temp
        document.getElementById(`${id}u`).submit();
    }
</script>