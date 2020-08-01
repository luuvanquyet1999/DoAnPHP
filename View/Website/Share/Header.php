<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Đồ Án PHP TEAM LỘC PUHO OFFICAL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="asset/css_default/img/favicon.ico">
    <!-- CSS here -->
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
    <link rel="stylesheet" href="asset/css_default/css/responsive.css">
</head>
<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="asset/css_default/img/logo/logo3.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">

                <div class="header-mid gray-bg">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
                                <div class="logo">
                                    <a href="index.html"><img src="asset/css_default/img/logo/logo4.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="asset/css_default/img/gallery/header_card.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                                <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="index.html"><img src="asset/css_default/img/logo/logo.png" alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">Trang Chủ</a></li>
                                            <li><a href="about.html">Giới Thiệu</a></li>
                                            <li><a href="categori.html">Thể Loại</a></li>
                                            <li><a href="latest_news.html">Tin Mới</a></li>
                                            <li><a href="index.php?c=websitecontact&a=View">Liên Hệ</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <?php
                                            if(!isset($_SESSION["websiteusername"]))
                                            echo" <li><a href='index.php?c=LoginDefault&a=View'>Đăng Nhập</a></li>
                                            <li><a href='index.php?c=RegisterDefault&a=View'>Đăng Kí</a></li>";
                                            else {
                                                echo "<li>"."<p style='color:white;'> Welcome! " .  $_SESSION["websiteusername"]."</p></li>".
                                               "<li><a href='index.php?c=Logindefault&a=Logout'>Đăng Xuất</a></li>" ;
                                            }
                                        ?>
                                       

                                    </ul>
                                </nav>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>