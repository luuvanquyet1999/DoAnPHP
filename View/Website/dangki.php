<?php
		//    $mysqli = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
		// if (isset($_POST["register"])) {
  		// 	//lấy thông tin từ các form bằng phương thức POST
  		// 	$username = $_POST["username"];
		// 	$password = $_POST["password"];
		// 	$confirmpassword = $_POST["confirmpassword"];
		// 	$email = $_POST["email"];
        //     echo $username.$password .$confirmpassword.$email;
  		// 	// //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		// 	// if ($username == "" || $password == "" || $confirmpassword == "" || $email == "") {
		// 	// 	   echo "bạn vui lòng nhập đầy đủ thông tin";
  		// 	// }else{
  		// 	// 		// Kiểm tra tài khoản đã tồn tại chưa
  		// 	// 		$sql="select * from lph_username where Username='$username' or Usernameemail = '$email'";
        //     //           $query = $mysqli->query($sql);
		// 	// 		if(mysqli_num_rows($query)  > 0){
		// 	// 			echo "<script type='text/javascript'>alert('Tài khoản hoặc Email đã tồn tại');</script>";
		// 	// 		}else{
		// 	// 			if($password != $confirmpassword){
		// 	// 				echo "<script type='text/javascript'>alert('Mật khẩu không trùng nhau!!!');</script>";
		// 	// 			}
		// 	// 			else{
		// 	// 				//thực hiện việc lưu trữ dữ liệu vào db
		// 	// 				$sql1 = "INSERT INTO lph_adiminuser(
		// 	// 				Username,
		// 	// 				UsernamePassword,
		// 	// 				UsernameEmail
		// 	// 				) VALUES (
		// 	// 				'$username',
		// 	// 				'$password',
		// 	// 				'$email'	)";

		// 	// 	$result = $mysqli->query($sql1);
		// 	// 	   echo "chúc mừng bạn đã đăng ký thành công";
		// 	// 	   header('Location: index.php?c=LoginDefault&a=View&s=susscess');
		// 	// 				}
		// 	// 			}
		// 	// 	}
		// }
	?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Đồ Án PHP TEAM LỘC PUHO OFFICAL </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="asset/css_default/css/dangki.css">

    <link rel="stylesheet" href="asset/css_default/css/dangnhap.css">
    <link rel="stylesheet" href="asset/css_default/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css_default/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/css_default/css/ticker-style.css">
    <link rel="stylesheet" href="asset/css_default/css/flaticon.css">
    <link rel="stylesheet" href="asset/css_default/css/slicknav.css">
    <link rel="stylesheet" href="asset/css_default/css/animate.min.css">
    <link rel="stylesheet" href="asset/css_default/css/magnific-popup.css">
    <link rel="stylesheet" href="asset/css_default/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="asset/css_default/css/themify-icons.css">
    <link rel="stylesheet" href="asset/css_default/css/slick.css">
    <link rel="stylesheet" href="asset/css_default/css/nice-select.css">
    <link rel="stylesheet" href="asset/css_default/css/style.css">

</head>

<body>



    <form action="index.php?c=RegisterDefault&a=Register">
        <div style="width: 600px; height: 400px;" class="container">
            <h1 style="text-align: center;">Register</h1>

            <label for="username"><b>UserName</b></label>
            <input type="text" placeholder="UserName" name="username" id="user" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="confirmpassword" id="psw-repeat" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Email" name="email" id="email" required>

            <input type="submit" value="Submit" name="register" class="registerbtn">
        </div>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- JS here -->
 <!-- All JS Custom Plugins Link Here here -->
 <script src="asset/css_default/js/vendor/modernizr-3.5.0.min.js"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="asset/css_default/js/vendor/jquery-1.12.4.min.js"></script>
<script src="asset/css_default/js/popper.min.js"></script>
<script src="asset/css_default/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="asset/css_default/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="asset/css_default/js/owl.carousel.min.js"></script>
<script src="asset/css_default/js/slick.min.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src="asset/css_default/js/wow.min.js"></script>
<script src="asset/css_default/js/animated.headline.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="asset/css_default/js/jquery.scrollUp.min.js"></script>
<script src="asset/css_default/js/jquery.nice-select.min.js"></script>
<script src="asset/css_default/js/jquery.sticky.js"></script>
<script src="asset/css_default/js/jquery.magnific-popup.js"></script>

<!-- contact js -->
<script src="asset/css_default/js/contact.js"></script>
<script src="asset/css_default/js/jquery.form.js"></script>
<script src="asset/css_default/js/jquery.validate.min.js"></script>
<script src="asset/css_default/js/mail-script.js"></script>
<script src="asset/css_default/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="asset/css_default/js/plugins.js"></script>
<script src="asset/css_default/js/main.js"></script>
</body>

</html>