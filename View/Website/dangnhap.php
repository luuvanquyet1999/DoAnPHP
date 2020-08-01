<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Đồ Án PHP TEAM LỘC PUHO OFFICAL </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
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

    <h2 style="text-align: center;"> Login Form</h2>

    <form action="index.php?c=LoginDefault&a=View" method="post">

        <div style="width: 600px; height: 350px;" class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
        </div>

        <div style="width: 600px; height: 100px;" class="container" style="background-color:#f1f1f1">

            <div class="">
                <p style="text-align: center;" class="dangnhap">Bạn chưa có tài khoản?</p>
                <button type="button" class="cancelbtnnt"> <a href="index.php?c=RegisterDefault&a=View">Đăng kí</a></button>
            </div>

        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>