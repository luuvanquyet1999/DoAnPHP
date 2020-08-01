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
                                            <li><a href="contact.html">Liên Hệ</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="dangnhap.html">Đăng Nhập</a></li>
                                        <li><a href="dangki.html">Đăng Kí</a></li>

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
    <main>
        <!-- ================ contact section start ================= -->
        <section style="padding:20px;" class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 style="text-align: center;" class="contact-title">Liên Lạc</h2>
                    </div>
                    <div class="col-lg-8">
                        <form action="index.php?c=contactdefault&a=SendContact" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="content" id="content" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Content'" placeholder=" Enter Content"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="fullname" id="fullname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Fullname'" placeholder="Enter your Fullname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="title" id="title" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group mt-3">
                            <button type="button" value="button" class="btn btn-primary">Lưu</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                    <?php
                         $stt = 1;
                         foreach ($data as $value) {
                         ?>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                            <h3>
                                <?= $value->contact_address ?>
                                </h3>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+<?= $value->contact_phone ?></h3>
                                <p>Mở cửa từ thứ 2 đến thứ 6</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3><?= $value->contact_email ?></h3>

                            </div>
                        </div>
                         <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->
    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-main footer-bg">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="asset/css_default/img/logo/logo4.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1">Tin tức chính xác , nhanh chóng và trung thực nhất</p>
                                            <p class="info2">33 XVNT , Quận Hải Châu , TP.Đà Nẳng</p>
                                            <p class="info2">Phone: 123 456 789</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Bài Viết Phổ Biến </h4>
                                </div>
                                <!-- Popular post -->
                                <div class="whats-right-single mb-20">
                                    <div class="whats-right-img">
                                        <img src="asset/css_default/img/gallery/footer_post1.png" alt="">
                                    </div>
                                    <div class="whats-right-cap">
                                        <h4><a href="details.html">Làm thế nào để tập trung vào công việc</a></h4>
                                        <p>CongVien | 2 hours ago</p>
                                    </div>
                                </div>
                                <!-- Popular post -->
                                <div class="whats-right-single mb-20">
                                    <div class="whats-right-img">
                                        <img src="asset/css_default/img/gallery/footer_post2.png" alt="">
                                    </div>
                                    <div class="whats-right-cap">
                                        <h4><a href="details.html">Làm thế nào để tập trung vào công việc</a></h4>
                                        <p>CongVien | 2 hours ago</p>
                                    </div>
                                </div>
                                <!-- Popular post -->
                                <div class="whats-right-single mb-20">
                                    <div class="whats-right-img">
                                        <img src="asset/css_default/img/gallery/footer_post3.png" alt="">
                                    </div>
                                    <div class="whats-right-cap">
                                        <h4><a href="details.html">Làm thế nào để tập trung vào công việc</a></h4>
                                        <p>CongVien | 2 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="banner">
                                    <img src="asset/css_default/img/gallery/body_card4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom aera -->
            <div class="footer-bottom-area footer-bg">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> Team Lộc FUHO offical<i class="fa fa-heart" aria-hidden="true"></i> <a href="https://www.facebook.com/groups/262029571514830/" target="_blank">Xin Chào</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Search model Begin -->
    <div class="search-model-box">
        <div class="d-flex align-items-center h-100 justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

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