<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
?>
<?php
   include_once('./View/Website2/share/header.php');
?>
<!-- Header Section Begin -->
<header class="header-section">

<div style="margin-left: 203px;" class="container">

    <div class="nav-menu">
        <nav class="mainmenu mobile-menu">
            <ul style="margin:20px;">

                <li class="active"><a href="./index.html">Trang Chủ</a></li>
                <li><a href="./Gioithieu.html">Giới Thiệu</a></li>
                <li><a href="./Tinmoi.html">Tin Mới</a></li>
                <li><a href="./theloai.html">Thể Loại</a>
                    <ul class="dropdown">
                        <li><a href="theloai.html">Thời Trang</a></li>
                    </ul>

                </li>
                <li><a href="./Lienhe.html">Liên Hệ</a></li>
                <li><a href="#">|</a></li>
                <li class="active"><a href="./dangnhap.php">Đăng Nhập</a></li>
                <li><a href="./dangki.html">Đăng Kí</a></li>


            </ul>

        </nav>

    </div>
    <div id="mobile-menu-wrap"></div>
</div>
</header>
<!-- Header End -->

    <!-- Site Breadcrumb Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="view/website2/img/about-breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-text">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header End -->

    <!-- Map Section Begin -->

    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
            <?php
                         $stt = 1;
                         foreach ($data as $value) {
                         ?>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <i class="ti-location-pin"></i>
                        <p><?= $value->contact_address ?></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <i class="ti-email"></i>
                        <ul>
                            <li><span>Phone:</span> <?= $value->contact_phone ?> </li>
                            <li><span>Mail:</span> <?= $value->contact_email ?></li>
                        </ul>
                    </div>
                </div>
                <?php
                        }
                        ?>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <i class="ti-timer"></i>
                        <ul>
                            <li><span>Thứ 2 - 7:</span> 7.00 – 17.00</li>
                            <li><span>Chủ Nhật:</span> Đóng Cửa</li>
                        </ul>
                    </div>
                </div>
            </div>
        
            <div class="contact-form">
                <div class="section-title">
                    <h2>Leave message</h2>
                    <p>Our staff will call back later and answer your questions.</p>
                </div>
                <form action="index.php?c=contactdefault&a=SendContact" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" placeholder="Your name" name="fullname">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Your Email" name="email">
                        </div>
                        <div class="col-lg-12 text-center">
                            <textarea placeholder="Your message" name="content"></textarea>
                            <button type="button" value="button">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="register normal-register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> Lộc Fuho i love chu cà mo with love <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="index.html" target="_blank">LỘCFUHO</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="footer-widget">
                            <ul>
                                <li class="active">Privacy Policy</li>
                                <li>Terms Of Service</li>
                                <li>Careers</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="view/website2/js/jquery-3.3.1.min.js"></script>
    <script src="view/website2/js/bootstrap.min.js"></script>
    <script src="view/website2/js/jquery.magnific-popup.min.js"></script>
    <script src="view/website2/js/mixitup.min.js"></script>
    <script src="view/website2/js/jquery.slicknav.js"></script>
    <script src="view/website2/js/owl.carousel.min.js"></script>
    <script src="view/website2/js/main.js"></script>
</body>

</html>