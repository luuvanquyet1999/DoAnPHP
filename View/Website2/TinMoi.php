<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php
include_once('./View/Website2/share/header.php');
?>
<!-- Site Breadcrumb Begin -->
<section class="breadcrumb-section set-bg" data-setbg="view/Website2/img/about-breadcrumb-bg.jpg">
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
                    <a href="javascript:;" data-filter=".breakfast">Thế thao</a>
                    <a href="javascript:;" data-filter=".dessert">Giải trí</a>
                    <a href="javascript:;" data-filter=".dinner">thời trang</a>
                    <a href="javascript:;" data-filter=".freshfood">tin nổi bật</a>
                </div>
            </div>
            <div class="portfolioContainer row">
                    <div id="" class="col-md-6 col-sm-6 col-xs-12 isotope-item menu-list__product breakfast">
                        <a href="View/Web/productdetail.php">
                            <div class="menu-list">
                                <span class="menu-list-product">
                                    <img src="View/Website2/img/1.jpg" alt="">
                                </span>
                                <h5>tittle the thao</h5>
                                <p>summary</p>
                            </div>
                        </a>
                    </div>
                    <div id="" class="col-md-6 col-sm-6 col-xs-12 isotope-item menu-list__product dessert">
                        <a href="View/Web/productdetail.php">
                            <div class="menu-list">
                                <span class="menu-list-product">
                                    <img src="View/Website2/img/1.jpg" alt="">
                                </span>
                                <h5>tittle giai tri </h5>
                                <p>summary</p>
                            </div>
                        </a>
                    </div>
                    <div id="" class="col-md-6 col-sm-6 col-xs-12 isotope-item menu-list__product dinner">
                        <a href="View/Web/productdetail.php">
                            <div class="menu-list">
                                <span class="menu-list-product">
                                    <img src="View/Website2/img/1.jpg" alt="">
                                </span>
                                <h5>tittle thời trang</h5>
                                <p>summary</p>
                            </div>
                        </a>
                    </div>
                    <div id="" class="col-md-6 col-sm-6 col-xs-12 isotope-item menu-list__product freshfood">
                        <a href="View/Web/productdetail.php">
                            <div class="menu-list">
                                <span class="menu-list-product">
                                    <img src="View/Website2/img/1.jpg" alt="">
                                </span>
                                <h5>tittle tin nổi bật</h5>
                                <p>summary</p>
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
            <div class="footer-form set-bg" data-setbg="view/Website2/img/contact-form-bg.jpg">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="section-title">
                            <h2>Liên hệ với chúng tôi</h2>
                            <p></p>
                        </div>
                        <?php
                        include_once('./View/Website2/share/Contact.php');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section End -->
<?php
include_once('./View/Website2/share/Footer.php');
?>