<?php
$profile = $data['profile'][0];
$lastname = $profile["LastName"];
$firstname = $profile["FirstName"];
$dob = $profile["DoB"];
$gender = $profile["Gender"];
$phonenumber = $profile["PhoneNumber"];
$email = $profile["Email"];
$address = $profile["Address"];
if (isset($_GET['success'])){
    $success = $_GET['success'];
    if ($success=="1"){
        echo "<script> alert('Đổi mật khẩu thành công')</script>";
    }
}
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error == "1")
        echo "<script> alert('Họ và tên lót không hợp lệ')</script>";
    if ($error == "2")
        echo "<script> alert('Tên không hợp lệ')</script>";
    if ($error == "3")
        echo "<script> alert('Giới tính không hợp lệ')</script>";
    if ($error == "4")
        echo "<script> alert('Ngày sinh không hợp lệ')</script>";
    if ($error == "5")
        echo "<script> alert('Số điện thoại không hợp lệ')</script>";
    if ($error == "6")
        echo "<script> alert('Email không hợp lệ')</script>";
    if ($error == "7")
        echo "<script> alert('Địa chỉ không hợp lệ')</script>";
    if ($error == "8")
        echo "<script> alert('Mật khẩu cũ không đúng')</script>";
    if ($error == "9")
        echo "<script> alert('Mật khẩu mới không phải trong khoảng 5 đến 50 ký tự')</script>";
    if ($error == "10")
        echo "<script> alert('Mật khẩu nhập lại không đúng')</script>";
}
?>

<div class="profile-wrap">
    <div class='profile-header'>
        <h1>THÔNG TIN CÁ NHÂN</h1>
    </div>
    <form class="profileform" method="post" action="./index.php?url=ProfileUser/modify">
        <div class='avatar-wrap'>
            <img src="<?php echo $profile['Avatar'] ?>" id="imgshow">
            <input type="text" name="Avatar" id="imgload" placeholder="Nhập link URL hình ảnh"></input>
            <button type='button' id="selectimg" onclick=hanclick()>Xem thử</label>
        </div>
        <div class='profile-infor-wrap'>
            <div class='profile-infor'>
                <label for="">Họ và Tên lót</label>
                <input type="text" name='LastName' placeholder="Nhập tên không
                quá 50 ký tự" value="<?php echo $lastname; ?>">
                <label for="">Tên</label>
                <input type="text" name='FirstName' placeholder="Nhập tên không
                quá 50 ký tự" value="<?php echo $firstname; ?>">
                <label for="">Giới tính</label>
                <input type="text" name='Gender' placeholder="Nam/Nữ/Không" value="<?php echo $gender; ?>">
                <label for="">Ngày tháng năm sinh</label>
                <input type="text" name='DoB' placeholder="yyyy-mm-dd" value="<?php echo $dob; ?>">
                <label for="">Số điện thoại</label>
                <input type="text" name='PhoneNumber' placeholder="0xxxxxxxxx" value="<?php echo $phonenumber; ?>">
                <label for="">Địa chỉ email</label>
                <input type="text" name='Email' placeholder="xxx@xxx.xx" value="<?php echo $email; ?>">
                <label for="">Địa chỉ</label>
                <input type="text" name='Address' placeholder="Xã, huyện, tỉnh" value="<?php echo $address; ?>">
            </div>
            <div class='profile-buttons'>
                <button class='editprofile' type='submit'>Chỉnh sửa</button>
            </div>
        </div>
    </form>
    <form method="POST" class="changepassform" action="./index.php?url=ProfileUser/changepassword">
        <label for="">Nhập mật khẩu cũ</label>
        <input type="password" name='OldPassword' placeholder="Nhập mật khẩu cũ" value="">
        <label for="">Nhập mật khẩu mới</label>
        <input type="password" name='NewPassword' placeholder="Không quá 50 ký tự" value="">
        <label for="">Nhập lại mật khẩu</label>
        <input type="password" name='AgainNewPassword' placeholder="Không quá 50 ký tự" value="">
        <button class='changepassword' type='submit'
            onclick="return confirm('Bạn có muốn đổi mật khẩu ?')">Xác nhận</button>
    </form>
    <form method="post" action="./index.php?url=ProfileUser/logout">
        <button class='exit' onclick="return confirm('Bạn có muốn đăng xuất ?')">Đăng xuất</button>
    </form>
    <script>
        function hanclick() {
            let img0 = document.getElementById("imgload").value;
            console.log(img0);
            document.getElementById("imgshow").src = img0;
        }
    </script>
</div>