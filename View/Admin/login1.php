<?php
		  $mysqli = new mysqli('localhost', 'root', '','websitetintuc');
		if (isset($_POST["register"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
			$password = $_POST["password"];
			$confirmpassword = $_POST["confirmpassword"];
 			$fullname = $_POST["fullname"];
			$address = $_POST["address"];
			$date = $_POST["date"];
            //   echo $username." " .$password ." ". $fullname." ".$address;
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" || $confirmpassword == "" || $fullname == "" || $address == "") {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from useradmin where user_email='$username'";
                      $query = $mysqli->query($sql);
					if(mysqli_num_rows($query)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						if($password != $confirmpassword){
							echo "Mật khẩu không trùng nhau!!!";
						}
						else{
							//thực hiện việc lưu trữ dữ liệu vào db
							$sql1 = "INSERT INTO useradmin(
							user_email,
							user_password,
							user_fullname,
							user_address,
							user_date
							) VALUES (
							'$username',
							'$password',
							'$fullname',
							'$address',$date
								)";

				$result = $mysqli->query($sql1);
				return $result;
				   echo "chúc mừng bạn đã đăng ký thành công";
	 				  header('Location:  index.php');
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
				<h2>Bạn đã đăng ký thành công</h2>
			</div>
			<form action="#" method="post">
                <h1>Hiện tại không thể kích hoạt tài khoảng bằng mail vui lòng click link dưới để test tài khoản</h1>
                <a href="View/Admin/login.php">Click vào đây</a>
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