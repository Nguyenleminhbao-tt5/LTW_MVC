

<div class="Pay">
    <div class="col1">
                <form action="" method="POST" class="cus-infor">
                    <div class="section-header">
                        <h2 class="section-title">Thông tin giao hàng</h2>
                    </div>
                    <div class="customer-name">
                        <label class="cus-name-label">Họ và tên</label>
                        <input class="cus-name" placeholder='VD: Nguyễn Văn A' type='text'></input>
                    </div>
                    <div class="customer-mail-phone">
                        <div class="customer-mail">
                            <label class="cus-mail-label">Email</label>
                            <input class="cus-mail" placeholder='VD: nguyenvana@gmail.com' type='text'></input>
                        </div>
                        <div class="space-mail-phone"></div>
                        <div class="customer-phone">
                            <label class="cus-phone-label">Số điện thoại</label>
                            <input class="cus-phone" placeholder='VD: 0xxxxxxxxx' type='text'></input>
                        </div>
                    </div>
                    <div class="customer-address">
                        <label class="cus-address-label">Địa chỉ</label>
                        <input class="cus-address" placeholder='Số nhà, Tên đường, xã, quận/huyện, tỉnh/thành phố ' type='text'></input>
                    </div>
                    <div class="customer-note">
                        <label class="cus-mail-label">Địa chỉ</label>
                        <textarea class="cus-note" placeholder='Ghi chú'></textarea>
                    </div>
                    <div class="customer-pay-type">
                        <h3>Phương thức thanh toán</h3>
                        <div class="customer-pay">
                            <div class="customer-radio1">
                                <div class="radio-input">
                                    <input type='radio' name='paymethod'></input>
                                </div>
                                <div class="radio-title">Thanh toán khi nhận hàng</div>
                            </div>
                            <div class="customer-radio2">
                                <div class="cus-radio2">
                                    <div class="radio-input" id='radio2'>
                                        <input class="radio2" type='radio' name='paymethod' value='ATM'></input>
                                    </div>
                                    <div class="radio-title">ATM Card/ Internet Banking</div>
                                </div>
                                <div class="ATM-infor">
                                    <div class="ATM">
                                        <h2><strong>CHUYỂN KHOẢN ĐỂ THANH TOÁN ĐƠN HÀNG</strong></h2>
                                        <h3>Tên tài khoản: <strong>CÔNG TY TNHH SHAT</strong></h3>
                                        <h3>Số tài khoản:&nbsp;<strong>4994 9666 6868</strong></h3>
                                        <h3>Ngân hàng: <strong>MB BANK - HCM</strong></h3>
                                        <h3><strong>Ghi chú: </strong>Thanh toán &lt;Mã ĐH&gt; - SĐT</h3>
                                        <h3><strong>Hotline: </strong>1900 0270</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content__3">
                        <Link to="/ProfileOrder"><input class="button" type='submit' value='Xác nhận'></input></Link>
                    </div>
                </form>
            </div>
            <div class="col2">
                <div class="ship-fee">
                    <h2>Phí vận chuyển</h2>
                    <span class="ship">504,000</span>
                    <span>đ</span>
                </div>
                <div class="total-fee">
                    <h2>Tổng cộng</h2>
                    <span class="total">504,000</span>
                    <span>đ</span>
                </div>
            </div>                    
</div >