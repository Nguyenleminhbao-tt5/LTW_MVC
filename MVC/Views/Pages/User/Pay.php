<div class='payment-wrapper'>
    <?php
    $order = $data['order'];
    require "./MVC/Views/Module/Order.php";
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == "1")
            echo "<script> alert('Bạn chưa nhập tên')</script>";
        if ($error == "2")
            echo "<script> alert('Bạn chưa email')</script>";
        if ($error == "3")
            echo "<script> alert('Bạn chưa nhập số điện thoại')</script>";
        if ($error == "4")
            echo "<script> alert('Bạn chưa nhập số nhà tên đường')</script>";
        if ($error == "5")
            echo "<script> alert('Bạn chưa chọn tỉnh')</script>";
        if ($error == "6")
            echo "<script> alert('Bạn chưa chọn huyện')</script>";
        if ($error == "7")
            echo "<script> alert('Bạn chưa chọn xã')</script>";
        if ($error == "8")
            echo "<script> alert('Bạn chưa chọn phương thức thanh toán')</script>";
        if ($error == "9")
            echo "<script> alert('Tên nhập không hợp lệ')</script>";
        if ($error == "10")
            echo "<script> alert('Email không hợp lệ')</script>";
        if ($error == "11")
            echo "<script> alert('Số điện thoại không hợp lệ')</script>";
        if ($error == "12")
            echo "<script> alert('Địa chỉ không hợp lệ')</script>";
        if ($error == "13")
            echo "<script> alert('Ghi chú quá dài, không hợp lệ')</script>";
    }
    if (!isset($_SESSION)){
        session_start();
    }
    $_SESSION['products'] = $order;
    ?>
    <div class='pay-wrap'>
        <div class='pay-col1'>
            <form class='cus-infor' method='post' action="./index.php?url=Pay/insert">
                <div class='section-header'>
                    <h2 class='section-title'>Thông tin giao hàng</h2>
                </div>
                <div class='customer-name'>
                    <label class='cus-name-label'>Họ và tên</label>
                    <input class='cus-name' placeholder='VD: Nguyễn Văn A' type='text' name='fullname'></input>
                </div>
                <div class='customer-mail-phone'>
                    <div class='customer-mail'>
                        <label class='cus-mail-label'>Email</label>
                        <input class='cus-mail' placeholder='VD: nguyenvana@gmail.com' type='text' name='email'></input>
                    </div>
                    <div class='space-mail-phone'></div>
                    <div class='customer-phone'>
                        <label class='cus-phone-label'>Số điện thoại</label>
                        <input class='cus-phone' placeholder='VD: 0xxxxxxxxx' type='text' name='phonenumber'></input>
                    </div>
                </div>
                <div class='customer-address'>
                    <label class='cus-address-label'>Số nhà, tên đường</label>
                    <input class='cus-address' placeholder='Nhà số xxx, Đường xxxxx' type='text' name='address'></input>
                </div>
                <div class='address-order'>
                    <label class='order-address-label'>Địa chỉ</label>
                    <div class='order-address-wrapper'>
                        <select class="order-address" id="city" aria-label=".form-select-sm" name='city'>
                            <option value="" selected>Chọn tỉnh thành</option>
                        </select>

                        <select class="order-address" id="district" aria-label=".form-select-sm" name='district'>
                            <option value="" selected>Chọn quận huyện</option>
                        </select>

                        <select class="order-address" id="ward" aria-label=".form-select-sm" name='ward'>
                            <option value="" selected>Chọn phường xã</option>
                        </select>
                    </div>
                </div>
                <div class='customer-note'>
                    <label class='cus-mail-label'>Ghi chú</label>
                    <textarea class='cus-note' placeholder='Ghi chú' name='note'></textarea>
                </div>
                <div class='customer-pay-type'>
                    <h3>Phương thức thanh toán</h3>
                    <div class='customer-pay'>
                        <div class='customer-radio1'>
                            <div class='radio-input'>
                                <input type='radio' name='paytype' value='Cash'></input>
                            </div>
                            <div class='radio-title'>Thanh toán khi nhận hàng</div>
                        </div>
                        <div class='customer-radio2'>
                            <div class='cus-radio2'>
                                <div class='radio-input' id='radio2'>
                                    <input class='radio2' type='radio' name='paytype' value='momoATM'></input>
                                </div>
                                <div class='radio-title'>Thanh toán momo qua ATM</div>
                            </div>
                        </div>
                        <div class='customer-radio2'>
                            <div class='cus-radio2'>
                                <div class='radio-input' id='radio2'>
                                    <input class='radio2' type='radio' name='paytype' value='momoQR'></input>
                                </div>
                                <div class='radio-title'>Thanh toán momo qua QR</div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class='pay-col2'>
            <div class='pay-orderinfor'>
                <h2>Thông tin đơn hàng</h2>
                <div class='order-id'>
                </div>
                <?php
                $orderfee = 0;
                $shipfee = 0;
                for ($i = 0; $i < count($order); $i++) {
                    $orderj = $order[$i];
                    $img = $orderj['PrimaryImg'];
                    $name = $orderj['ProductName'];
                    $size = $orderj['Size'];
                    $number = $orderj['Amount'];
                    $price = $orderj['Price'];
                    $shipfee = 0;
                    if ($shipfee == NULL)
                        $shipfee = 0;
                    $orderfee += $price * $number;
                    $props = ['img' => $img, 'name' => $name, 'size' => $size, 'num' => $number, 'price' => $price];
                    Order($props);
                }
                $_SESSION['orderfee'] = $orderfee + $shipfee;
                $_SESSION['shipfee'] = $shipfee;
                ?>
                <div class='order-fee'>
                    <div class='ship-fee'>
                        <h2>Phí vận chuyển</h2>
                        <span class='ship'>
                            <?php echo number_format(($shipfee), 2, '.', ',') ?>
                        </span>
                        <span>đ</span>
                    </div>
                    <div class='total-fee'>
                        <h2>Tổng cộng</h2>
                        <span class='total'>
                            <?php echo number_format(($orderfee + $shipfee), 2, '.', ',') ?>
                        </span>
                        <span>đ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='content__3'>
        <input class='orderbutton' type='submit' value='Xác nhận'></input>
    </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        var citis = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            method: "GET",
            responseType: "application/json",
        };
        var promise = axios(Parameter);
        promise.then(function (result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Id);
            }
            citis.onchange = function () {
                district.length = 1;
                ward.length = 1;
                if (this.value != "") {
                    const result = data.filter(n => n.Id === this.value);

                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Id);
                    }
                }
            };
            district.onchange = function () {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Id);
                    }
                }
            };
        }
    </script>
</div>