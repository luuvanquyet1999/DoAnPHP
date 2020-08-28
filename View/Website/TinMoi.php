<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php
include_once('./View/website/share/header.php');
?>
<!-- Site Breadcrumb Begin -->
<section class="breadcrumb-section set-bg" data-setbg="view/website/img/about-breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
    </div>
</section>
<!-- Site Breadcrumb End -->

<!-- Gallery Section Begin -->
<section class="gallery-section spad">
    <div class="container">
        <div class="menu-wrapper">
            <div class="portfolioFilter">
                <div class="portfolioFilter-inner">
                    <a href="javascript:;" data-filter="*" class="current">All</a>
                    <a href="javascript:;" data-filter=".breakfast">Thế Thao</a>
                    <a href="javascript:;" data-filter=".dessert">Giải Trí</a>
                    <a href="javascript:;" data-filter=".dinner">Thời Trang</a>
                    <a href="javascript:;" data-filter=".freshfood">Tin Nỗi Bật</a>
                </div>
            </div>
            <div class="portfolioContainer row">
                    <div id="" class="col-md-6 col-sm-6 col-xs-12 isotope-item menu-list__product breakfast">
                        <a href="View/Web/productdetail.php">
                            <div class="menu-list">
                                <span class="menu-list-product">
                                    <img src="View/website/img/1.jpg" alt="">
                                </span>
                                <h5>Ronaldo nhận danh hiệu bàn thắng đẹp nhất C1</h5>
                                <p>LOCFUHO đưa tin chân thật nhất tới khách hàng.</p>
                            </div>
                        </a>
                    </div>
                    <div id="" class="col-md-6 col-sm-6 col-xs-12 isotope-item menu-list__product dessert">
                        <a href="View/Web/productdetail.php">
                            <div class="menu-list">
                                <span class="menu-list-product">
                                    <img src="View/website/img/2.jpg" alt="" style="height: 347px;
}">
                                </span>
                                <h5>Sơn Tùng MTP lại lập kỉ lục mới </h5>
                                <p>LOCFUHO đưa tin chân thật nhất tới khách hàng.</p>
                            </div>
                        </a>
                    </div>
                    <div id="" class="col-md-6 col-sm-6 col-xs-12 isotope-item menu-list__product dinner">
                        <a href="View/Web/productdetail.php">
                            <div class="menu-list">
                                <span class="menu-list-product">
                                    <img src="View/website/img/3.jpg" alt="">
                                </span>
                                <h5>Thời trang Sơn Tùng cực ngầu.</h5>
                                <p>LOCFUHO đưa tin chân thật nhất tới khách hàng.</p>
                            </div>
                        </a>
                    </div>
                    <div id="" class="col-md-6 col-sm-6 col-xs-12 isotope-item menu-list__product freshfood">
                        <a href="View/Web/productdetail.php">
                            <div class="menu-list">
                                <span class="menu-list-product">
                                    <img src="View/website/img/4.jpg" alt="" style="height: 314px;
    width: 600px;">
                                </span>
                                <h5>Bayern Munich vô địch châu âu lần thứ 6</h5>
                                <p>LOCFUHO đưa tin chân thật nhất tới khách hàng.</p>
                            </div>
                        </a>
                    </div>
            </div>
            <!-- <div class="btn-outer">
                                <a href="#" class="btn-main btn-shadow">Xem Thêm Menu</a>
                            </div> -->
        </div>
    </div>
</section>
<!-- Gallery Section End -->
<!-- lien he -->
<section>
    <div class="container-fluid">
        <div class="col-lg-0">
            <div class="footer-form set-bg" data-setbg="view/website/img/contact-form-bg.jpg">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="section-title">
                            <h2>Liên hệ với chúng tôi</h2>
                            <p></p>
                        </div>
                        <?php
                        include_once('./View/website/share/Contact.php');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section End -->
<?php
include_once('./View/website/share/Footer.php');
?>