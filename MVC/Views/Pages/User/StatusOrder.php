<div class='statusProduct-wrapper'>
    <div class='statusProduct-order'>
        <div class='pay-orderinfor'>
            <h2>Thông tin đơn hàng</h2>
            <div class='cancelorder'>
                <button class='cancelbutton' onclick=cancel()>Hủy đơn hàng</button>
            </div>
            <div class='order-id'>
                <h4>Mã đơn hàng</h4>
                <span>#0001</span>
            </div>
            <div class='order-state'>
                <h4>Trạng thái đơn hàng</h4>
                <span>Đang giao</span>
            </div>
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
                <div class='orderinfor-item1'>
                    <div class='orderinfor-item-img'>
                        <img src="https://bucket.nhanh.vn/store3/92233/ps/20221110/FLR0025__1_.jpg" alt="">
                    </div>
                    <div class='orderinfor-item-name'>
                        Sandals Floral trắng be
                    </div>
                    <div class='orderinfor-item-size'>
                        39
                    </div>
                    <div class='orderinfor-item-num'>
                        1
                    </div>
                    <div class='orderinfor-item-price'>
                        504,000
                        <span>đ</span>
                    </div>
                </div>
                <div class='orderinfor-item2'>
                </div>
            </div>
        </div>
        <div class='order-fee'>
            <div class='ship-fee'>
                <h2>Phí vận chuyển</h2>
                <span class='ship'>504,000</span>
                <span>đ</span>
            </div>
            <div class='total-fee'>
                <h2>Tổng cộng</h2>
                <span class='total'>504,000</span>
                <span>đ</span>
            </div>
        </div>
    </div>
    <script>
        function cancel() {
            confirm('Bạn có chắc muốn hủy đơn hàng không ?')
        }
    </script>
</div>