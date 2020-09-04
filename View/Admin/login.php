<!DOCTYPE html>
<html dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="asset/assets/images/favicon.png">
	<title>LOGIN</title>
	<!-- Custom CSS -->
	<link href="asset/dist/css/style.min.css" rel="stylesheet">

</head>

<body>

	<div class="main-wrapper">

		<div class="preloader">
			<div class="lds-ripple">
				<div class="lds-pos"></div>
				<div class="lds-pos"></div>
			</div>
		</div>
		<div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
			<div class="auth-box bg-dark border-top border-secondary">
				<div id="loginform">
					<div class="text-center p-t-20 p-b-20">
						<span class="db"><img src="asset/assets/images/logo.png" alt="logo" /></span>
					</div>
					<!-- Form -->
					<form class="form-horizontal m-t-20" id="loginform" method="post" action="index.php?c=AdminIndex&a=Login">
						<div class="row p-b-30">
							<div class="col-12">
								<?php
								if (isset($_GET['r'])) {
									if ($_GET['r'] == 0) {
										echo "Tên đăng nhập hoặc mật khẩu không đúng";
									} else if ($_GET['r'] == 1) {
										echo "Vui lòng không để trống";
									} else if ($_GET['r'] == 2) {
										echo "<script type='text/javascript'>alert('Success. Xin mời đăng nhập vào hệ thống!');</script>";
									}
								}
								?>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
									</div>
									<input type="text" class="form-control form-control-lg" name="user" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="" autocomplete="off">
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
									</div>
									<input type="password" class="form-control form-control-lg" name="pass" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="">
								</div>
							</div>
						</div>
						<div class="row border-top border-secondary">
							<div class="col-12">
								<div class="form-group">
									<div class="p-t-20">
										<button class="btn btn-success float-left" type="submit">Login</button>
										<span class="float-right text-light pt-2">Not a member? <a href="?c=AdminIndex&a=register">Sign up now</a></span>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
	<!-- ============================================================== -->
	<!-- All Required js -->
	<!-- ============================================================== -->
	<script src="asset/assets/libs/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="asset/assets/libs/popper.js/dist/umd/popper.min.js"></script>
	<script src="asset/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugin js -->
	<!-- ============================================================== -->
	<script>
		$('[data-toggle="tooltip"]').tooltip();
		$(".preloader").fadeOut();
		// ============================================================== 
		// Login and Recover Password 
		// ============================================================== 
		$('#to-recover').on("click", function() {
			$("#loginform").slideUp();
			$("#recoverform").fadeIn();
		});
		$('#to-login').click(function() {

			$("#recoverform").hide();
			$("#loginform").fadeIn();
		});
	</script>

</body>

</html>