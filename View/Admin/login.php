<?php
session_start();
?>
<html>

<head>
	<link rel="icon" href="View/Admin/images/favicon.ico" type="image/ico" />
	<title>Login</title>
	<meta charset="utf-8">
	<link href="asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="asset/build/css/custom.min.css" rel="stylesheet">
	<link rel="stylesheet" href="asset/build/css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="asset/build/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
</head>

<body>
	<?php
	//Gọi file connection.php ở bài trước


	$mysqli = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');


	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["login"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password == "") {
			echo "<script type='text/javascript'>alert('username hoặc password bạn không được để trống!');</script>";
		} else {
			$sql = "SELECT
                        *
                    FROM
					lph_adiminuser
                     WHERE
						Username = '$username' and UsernamePassword='$password' and active=1";
			$sql1 = "SELECT
			  			*
		  			FROM
		 			 lph_adiminuser
		 			  WHERE
			 		 Username = '$username' and UsernamePassword='$password' and active=0";
			$query = $mysqli->query($sql);
			$query1 = $mysqli->query($sql1);
			$data = $query->fetch_all();
			$data1 = $query1->fetch_all();
			if (count($data1) > 0) {
				echo "<script type='text/javascript'>alert('tên đăng nhập này đã bị khóa !');</script>";
			} else {
				if (count($data) == 0) {
					echo "<script type='text/javascript'>alert('tên đăng nhập hoặc mật khẩu không đúng !');</script>";
				} else {
					//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
					$_SESSION['username'] = $username;
					// Thực thi hành động sau khi lưu thông tin vào session
					// ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
					header('Location: index.php?c=AdminIndex&a=View');
				}
			}
		}
	}
	?>
	<!-- <!DOCTYPE HTML>
	<html lang="en">

	<head>
		<title>Online Login Form Responsive Widget Template :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="asset/build/css/custom.min.css" rel="stylesheet">
	<link rel="stylesheet" href="asset/build/css/style.css" type="text/css" media="all" /> 
	<link rel="stylesheet" href="asset/build/css/font-awesome.css">

	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
	</head> -->

	<body>
		<!-- main -->
		<div class="center-container">
			<div class="main-content-agile">
				<div class="sub-main-w3">
					<div class="wthree-pro">
						<img src="asset/build/images/img-01.png" alt="">
						<h2>Administrator</h2>
					</div>
					<form action="index.php?c=AdminLogin&a=View" method="post">
						<div class="pom-agile">
							<input placeholder="User Name" name="username" class="user" type="text" required="">
						</div>
						<div class="pom-agile">
							<input placeholder="Password" name="password" class="pass" type="password" required="">
						</div>
						<div class="sub-w3l">
							<div class="right-w3l">
								<input type="submit" name="login" value="Login">
							</div>
							<div class="right-w3l">
								<a href="index.php?c=register&a=View">Create your Account
									<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</body>

</html>