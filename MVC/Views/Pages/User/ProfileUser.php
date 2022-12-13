<div class="profile-wrap">
    <div class='profile-header'>
        <h1>THÔNG TIN CÁ NHÂN</h1>
    </div>
    <form class="profileform" action="">
        <div class='avatar-wrap'>
            <img src="#" id="imgshow">
            <label id='selectimg' for="imgload">Chọn ảnh đại diện</label>
            <input type="file" id="imgload" value="Chọn ảnh đại diện" style="display: none"></input>
        </div>
        <div class='profile-infor-wrap'>
            <div class='profile-infor'>
                <label for="">Họ và tên</label>
                <input type="text" name='fullname'>
                <label for="">Giới tính</label>
                <input type="text" name='gender'>
                <label for="">Ngày tháng năm sinh</label>
                <input type="text" name='dob' placeholder="dd/mm/yyyy">
                <label for="">Số điện thoại</label>
                <input type="text" name='phonenumber'>
                <label for="">Địa chỉ email</label>
                <input type="text" name='email'>
                <label for="">Địa chỉ</label>
                <input type="text" name='address'>
            </div>
            <div class='profile-buttons'>
                <button class='editprofile' type='submit'>Chỉnh sửa</button>
            </div>
        </div>
    </form>
    <script>
        $('document').ready(function () {
            $("#imgload").change(function () {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#imgshow').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
    </script>
</div>