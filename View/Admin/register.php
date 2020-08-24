<?php
$mysqli = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
if (isset($_POST["register"])) {
	//lấy thông tin từ các form bằng phương thức POST
	$username = $_POST["username"];
	$password = $_POST["password"];
	$confirmpassword = $_POST["confirmpassword"];
	$fullname = $_POST["fullname"];
	$email = $_POST["email"];
	$gender = $_POST["gender"];
	$date = $_POST["date"];

	//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
	if ($username == "" || $password == "" || $confirmpassword == "" || $fullname == "" || $email == "" || $gender == "") {
		echo "bạn vui lòng nhập đầy đủ thông tin";
	} else {
		// Kiểm tra tài khoản đã tồn tại chưa
		$sql = "select * from lph_adiminuser where Username='$username' or Usernameemail = '$email'";
		$query = $mysqli->query($sql);
		if (mysqli_num_rows($query)  > 0) {
			echo "<script type='text/javascript'>alert('Tài khoản hoặc Email đã tồn tại');</script>";
		} else {
			if ($password != $confirmpassword) {
				echo "<script type='text/javascript'>alert('Mật khẩu không trùng nhau!!!');</script>";
			} else {
				//thực hiện việc lưu trữ dữ liệu vào db
				$sql1 = "INSERT INTO lph_adiminuser(
							Username,
							UsernamePassword,
							UsernameFull,
							UsernameEmail,
							UserNameGender,
							DateofBirth,
							Active
							) VALUES (
							'$username',
							'$password',
							'$fullname',
							'$email',
							'$gender',
							'$date',
							'1'	)";

				$result = $mysqli->query($sql1);
				echo "chúc mừng bạn đã đăng ký thành công";
				header('Location: index.php?c=AdminLogin&a=View&s=susscess');
			}
		}
	}
}
?>
<!DOCTYPE HTML>

<head>
	<link rel="icon" href="View/Admin/images/favicon.ico" type="image/ico" />
	<title>Register</title>
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
	<!-- main -->
	<div class="center-container">
		<div class="main-content-agile">
			<div class="sub-main-w3 mt-0">
				<div class="wthree-pro">
					<h2>Create Account</h2>
				</div>
				<form action="index.php?c=register&a=View" method="post">
					<div class="pom-agile">
						<input placeholder="User Name" name="username" class="user" type="text" pattern=".{5,12}" required title="Vui lòng nhập từ 5 đến 12 ký tự" required="">
					</div>
					<div class="pom-agile">
						<input placeholder="Password" name="password" class="pass" type="password" required="">
					</div>
					<div class="pom-agile">
						<input placeholder="Confirm Password" name="confirmpassword" class="pass" type="password" required="">
					</div>
					<div class="pom-agile">
						<input placeholder="Full Name" name="fullname" class="pass" type="text" required="">
					</div>
					<div class="pom-agile">
						<input placeholder="E-mail" name="email" class="pass" type="email" required="">
					</div>
					<div class="pom-agile">
						<!-- <input placeholder="Gender" name="gender" class="pass" type="text" required=""> -->
						<select name="gender" class="pass" class="form-control">
							<option>---Select gender---</option>
							<option value="0">Nữ</option>
							<option value="1">Nam</option>
						</select>
					</div>
					<div class="pom-agile">
						<input type="date" id="start" class="pass" name="date" value="1998-09-09" min="1990-01-01" max="2020-01-01">
					</div>
					<div class="sub-w3l">
						<div class="right-w3l">
							<input type="submit" value="Register" name="register">
							<a href="index.php?c=AdminLogin&a=View">Login
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