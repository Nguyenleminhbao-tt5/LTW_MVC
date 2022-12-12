<?php

unset($_SESSION['Email']);
unset($_SESSION['Password']);
unset($_SESSION['FirstName']);
unset($_SESSION['LastName']);
/*
if(!empty($_POST['Email']))
{
	$_SESSION['Email']=$_POST['Email'];

}
if(!empty($_POST['Password']))
{
	$_SESSION['Password']=$_POST['Password'];
}
if(!empty($_POST['FirstName']))
{
	$_SESSION['FirstName']=$_POST['FirstName'];

}
if(!empty($_POST['LastName']))
{
	$_SESSION['LastName']=$_POST['LastName'];
}
*/

?>



<!--header-->
        <div class="header-w3l">
			<h1> LOGO SHOES</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-w3layouts-agileinfo">
	           <!--form-stars-here-->
						<div class="wthree-form">
							<h2>Chào mừng bạn đến với <br>LOGO</h2>
							<form action="./index.php?url=Login/check" method="post">
								<div class="form-sub-w3">
									<input type="text" name="EmailLogin" placeholder="Email " required="" >
								<div class="icon-w3">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								</div>
								<div class="form-sub-w3">
									<input type="password" name="PasswordLogin" placeholder="Password" required="" >
								<div class="icon-w3">
									<i class="fa fa-unlock-alt" aria-hidden="true"></i>
								</div>
								</div>
								<label class="anim">
								<input type="checkbox" class="checkbox">
									<span>Nhớ đăng nhập</span> 
									<a href="#">Quên mật khẩu</a>
								</label> 
								<div class="clear"></div>
								<div class="submit-agileits">
									<input type="submit" class="Login-btn" value="Login">
								</div>
                                <div class="submit-agileits">
									<a href="./index.php?url=Register">
                                        <input type="button" class="Register-btn" value="Register">
                                    </a>
								</div>
							</form>

						</div>
				<!--//form-ends-here-->

		</div>
		<!--//main-->
</div>