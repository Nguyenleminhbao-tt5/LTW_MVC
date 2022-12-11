<div class='statusProduct-wrapper'>
    <?php
    $listorder = $data['listorder'];
    $numorder = $data['numorder'];
    require "./MVC/Views/Module/Order.php";
    if (isset($_GET['error'])){
        $error = $_GET['error'];
        if ($error == "1")
            echo "<script> alert('Không thể xóa')</script>";
    }
    ?>
    <?php
    for ($i = 0; $i < count($numorder); $i++) {
        $order = $listorder[$i];
        $id = $numorder[$i]['orderID'];
        $state = "Đang xác nhận";
        $shipfee = 0;
        $orderfee = 0;
        for ($k = $i; $k < count($listorder); $k++) {
            $exactorder = $listorder[$k];
            if ($id == $exactorder['orderID']) {
                $state = $exactorder['orderstate'];
                $shipfee = $exactorder['ordership'];
                if ($state == null)
                    $state = "Đang xác nhận";
                ;
                $orderfee = $exactorder['orderfee'];
                if ($shipfee == null)
                    $shipfee = 0;
                break;
            }
        }
        echo "
                <div class='statusProduct-order'>
                <div class='pay-orderinfor'>
                    <h2> Thông tin đơn hàng </h2>
                <div class='cancelorder'>
                        <form method='post' action='./index.php?url=StatusOrder/delete'>
                            <input type='text' name='orderid' value='$id' style='display:none;'>
                            <input type='text' name='stateorder' value='$state' style='display:none;'>
                            <button class='cancelbutton' type='submit' onclick=\"return confirm('Bạn có chắc muốn hủy đơn hàng!')\"> Hủy đơn hàng </button>
                        </form>
                </div>
                    <div class='order-id'>
                        <h4> Mã đơn hàng </h4>
                <span>#
                        $id
                </span>
                    </div>
                        <div class='order-state'>
                        <h4> Trạng thái đơn hàng </h4>
                <span>
                    $state
                </span>
                </div>";
        /*
        1 props chứa name, size, num, price, img của 1 sản phẩm trong đơn đã order.
        */
        for ($j = $i; $j < count($listorder); $j++) {
            $orderj = $listorder[$j];
            if ($orderj['orderID'] == $id) {
                $img = $orderj['PrimaryImg'];
                $name = $orderj['ProductName'];
                $size = $orderj['size'];
                $number = $orderj['number'];
                $price = $orderj['Price'];
                $props = ['img' => $img, 'name' => $name, 'size' => $size, 'num' => $number, 'price' => $price];
                Order($props);
            }
        }
        echo "
            <div class='order-fee'>
                <div class='ship-fee'>
                    <h2> Phí vận chuyển </h2>
                <span class='ship'>";
        echo number_format(($shipfee), 2, '.', ',');
        echo "</span>
                <span> đ </span>
                    </div>
                        <div class='total-fee'>
                    <h2> Tổng cộng </h2>";
        echo "
            <span class='total'>";
        echo number_format(($orderfee + $shipfee), 2, '.', ',');
        echo "</span>
                <span> đ </span>
                        </div>
                    </div>
                </div>
        </div>";
    ?>
    <?php
    }
    ?>
</div>