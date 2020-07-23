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
			  if ($username == "" || $password == "" || $confirmpassword == "" || $fullname == "" || $email == "" || $gender=="") {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from lph_adiminuser where Username='$username'";
                      $query = $mysqli->query($sql);
					if(mysqli_num_rows($query)  > 0){
						echo "<script type='text/javascript'>alert('Tài khoản đã tồn tại');</script>";
					}else{
						if($password != $confirmpassword){
							echo "<script type='text/javascript'>alert('Mật khẩu không trùng nhau!!!');</script>";
						}
						else{
							//thực hiện việc lưu trữ dữ liệu vào db
							$sql1 = "INSERT INTO lph_adiminuser(
							Username,
							UsernamePassword,
							UsernameFull,
							UsernameEmail,
							UserNameGender,
							DateofBirth
							) VALUES (
							'$username',
							'$password',
							'$fullname',
							'$email',
							'$gender',
							'$date'
								)";

				$result = $mysqli->query($sql1);
				return $result;
				   echo "chúc mừng bạn đã đăng ký thành công";
				   header('Location: login1.php');
								}
							}
					  }
	}
	?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title> Register Form</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="../../asset/build/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="../../asset/build/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>
<!-- main -->
<div class="center-container">
	<!--header-->
	<div class="header-w3l">
		<h1>Register Form</h1>
	</div>
	<!--//header-->
	<div class="main-content-agile">
		<div class="sub-main-w3">	
			<div class="wthree-pro">
				<h2>Register Quick</h2>
			</div>
			<form action="register.php" method="post">
				<div class="pom-agile">
					<input placeholder="User Name" name="username" class="user" type="text" required="">
				</div>
				<div class="pom-agile">
					<input  placeholder="Password" name="password" class="pass" type="password" required="">
                </div>
                <div class="pom-agile">
					<input  placeholder="Confirm Password" name="confirmpassword" class="pass" type="password" required="">
				</div>
				<div class="pom-agile">
					<input  placeholder="Full Name" name="fullname" class="pass" type="text" required="">
				</div>
				<div class="pom-agile">
					<input  placeholder="E-mail" name="email" class="pass" type="email" required="">
				</div>
				<div class="pom-agile">
					<input  placeholder="Gender" name="gender" class="pass" type="text" required="">
				</div>
				<div class="pom-agile">
				<input type="date" id="start" class="pass"  name="date" value="1998-09-09" min="1990-01-01" max="2020-01-01">
				</div>
				<div class="sub-w3l">
					<div class="right-w3l">
						<input type="submit" value="Submit" name="register">
					</div>
				</div>
			</form>
		</div>
	</div>
	<!--//main-->
	<!--footer-->
	<div class="footer">
		<p>&copy; 2017 Online Login Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
	</div>
	<!--//footer-->
</div>
</body>
</html>