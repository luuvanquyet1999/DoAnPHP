    <!DOCTYPE html>
    <html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="PONIGYM Template">
        <meta name="keywords" content="PONIGYM, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="view/website/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="view/website/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="view/website/css/themify-icons.css" type="text/css">
        <link rel="stylesheet" href="view/website/css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="view/website/css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="view/website/css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="view/website/css/style.css" type="text/css">
        <!-- <link rel="stylesheet" href="view/website/sass/style.scss" type="text/css"> -->
    </head>

    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>
        <!-- Header Section Begin -->
        <header class="header-section">
            <div style="margin-left: 60px; margin-top:-23px;" class="logo">
                <a href="?c=WebsiteIndex&a=View">
                    <img src="View/website/img/logo4.png" alt="">
                </a>
            </div>
            <div style="background-color: gray;margin-top:10px"; class="container">



                <div style="margin: -5px 0 0px 100px;" class="nav-menu">

                    <nav class="mainmenu mobile-menu">
                        <ul style="margin:20px;">
                            <li class="active"><a href="?c=WebsiteIndex&a=View">Trang Chủ</a></li>
                            <li><a href="?c=WebsiteIndex&a=Gioithieu">Giới Thiệu</a></li>
                            <li><a href="?c=WebsiteTinMoi&a=View">Bài Viết</a></li>
                            <li><a href="?c=WebsiteTheThao1&a=View">Thể Thao</a></li>
                            <li><a href="?c=WebsiteIndex&a=Contact">Liên Hệ</a></li>
                            <li><a href="javascript:void(0)">|</a></li>
                            <?php
                            if (!isset($_SESSION["websiteusername"]))
                                echo "   <li class='active'><a href='index.php?c=LoginDefault&a=View'>Đăng Nhập</a></li>
                                            <li><a href='index.php?c=RegisterDefault&a=View'>Đăng Kí</a></li>";
                            else {
                                echo "<li class='active' style='margin-right:20px'><a href=''> Welcome! " .  $_SESSION["websiteusername"] . "</a></li>" .
                                    "<li><a href='index.php?c=Logindefault&a=Logout'>Đăng Xuất</a></li>";
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </header>
        <!-- Header End -->