<?php
/*
1 props chứa name, size, num, price, img của 1 sản phẩm trong đơn đã order.
*/
function Order($props = [])
{
?>
<div class='orderinfor-wrap'>
    <div class='orderinfor-header'>
        <div class='orderinfor-item-img'>
        </div>
        <div class='orderinfor-item-name'>
            Tên sản phẩm
        </div>
        <div class='orderinfor-item-size'>
            Kích thước
        </div>
        <div class='orderinfor-item-num'>
            Số lượng
        </div>
        <div class='orderinfor-item-price'>
            Giá sản phẩm
        </div>
    </div>
    <div class='orderinfor-item'>
        <div class='orderinfor-item-img'>
            <img src=<?php echo $props['img'] ?> alt="">
        </div>
        <div class='orderinfor-item-name'>
            <?php echo $props['name'] ?>
        </div>
        <div class='orderinfor-item-size'>
            <?php echo $props['size'] ?>
        </div>
        <div class='orderinfor-item-num'>
            <?php echo $props['num'] ?>
        </div>
        <div class='orderinfor-item-price'>
            <?php echo number_format(($props['price']), 2, '.', ',') ?>
            <span>đ</span>
        </div>
    </div>
</div>
<?php
}
?>