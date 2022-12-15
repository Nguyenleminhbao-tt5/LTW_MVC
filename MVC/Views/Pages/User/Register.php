<!--header-->
<div class="header-w3l">
	<h1> LOGO STORE</h1>
</div>
<!--//header-->
<!--main-->
<div class="main-w3layouts-agileinfo">
	<!--form-stars-here-->
	<?php
    if (isset($_GET['error'])) {
	    $error = $_GET['error'];
	    if ($error == "1")
		    echo "<script> alert('Tên tài khoản phải từ 5 đến 20 ký tự')</script>";
	    if ($error == "2")
		    echo "<script> alert('Tên tài khoản đã tồn tại')</script>";
	    if ($error == "3")
		    echo "<script> alert('Password từ 5 đến 50 ký tự')</script>";
	    if ($error == "4")
		    echo "<script> alert('Mật khẩu nhập lại không chính xác')</script>";
	    if ($error == "5")
		    echo "<script> alert('Họ và tên lót từ 5 đến 50 ký tự')</script>";
	    if ($error == "6")
		    echo "<script> alert('Tên từ 5 đến 20 ký tự')</script>";
    }
    ?>
	<div class="wthree-form">
		<h2>Chào mừng bạn đến với <br>LOGO</h2>
		<form action="./index.php?url=Register/up" method="post">
			<div class="form-sub-w3">
				<input type="text" name="AccountName" placeholder="Tên tài khoản" required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
			</div>
			<div class="form-sub-w3">
				<input type="password" name="Password" placeholder="Mật khẩu" required="" />
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
			</div>
			<div class="form-sub-w3">
				<input type="password" name="AgainPassword" placeholder="Nhập lại mật khẩu" required="" />
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
			</div>
			<div class="form-sub-w3">
				<input type="text" name="LastName" placeholder="Họ và tên lót" required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
			</div>
			<div class="form-sub-w3">
				<input type="text" name="FirstName" placeholder="Tên" required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
			</div>
			<div class="submit-agileits">
				<input type="submit" class="Register-btn" value="Register">
			</div>
		</form>


	</div>
	<!--//form-ends-here-->

</div>
<!--//main-->
</div>