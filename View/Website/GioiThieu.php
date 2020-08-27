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
<!-- About Us Secion Begin -->
<section class="about-us-section spad">
    <div class="container">
        <div class="row">
            <?php
            foreach ($data as $value) {
            ?>
                <div class="col-lg-5">
                    <div class="about-pic">
                        <img src="<?= $value->image ?>">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-text">
                        <div class='section-title'>
                            <h2><?= $value->title ?></h2>
                            <p><?= $value->summary ?></p>
                        </div>
                        <p><?= $value->content ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- About Us Secion End -->
<!-- Why Chose Us Section Begin -->
<section class="choseus-section set-bg spad" data-setbg="view/website/img/chose-us-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Why Choose Us</h2>
                    <p>Our fitness experts can help you discover new training techniques.</p>
                </div>
            </div>
        </div>
        <div class="chose-items">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="ci-item">
                        <i class="ti-crown"></i>
                        <h5>How do I become an author?</h5>
                        <p>Event Calendar and Event Calendar Pro full support out of the box.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="ci-item">
                        <i class="ti-package"></i>
                        <h5>Is my license transferable?</h5>
                        <p>Event Calendar and Event Calendar Pro full support out of the box.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="ci-item">
                        <i class="ti-shopping-cart"></i>
                        <h5>What do you mean by item?</h5>
                        <p>Event Calendar and Event Calendar Pro full support out of the box.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="ci-item">
                        <i class="ti-user"></i>
                        <h5>Top notch customer support</h5>
                        <p>Event Calendar and Event Calendar Pro full support out of the box.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Chose Us Section End -->

<!-- About Page Trainer Section Begin -->
<section class="about-page-trainer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Thành Viên Nhóm</h2>
                        <p>Team của chúng tôi.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($data1 as $value) {
            ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-trainer-item">
                        <div class="trainer-pic">
                            <img src="<?= $value->member_avatar ?>" alt="">
                        </div>
                        <div class="trainer-text">
                            <h5><?= $value->member_name ?></h5>
                            <span><?= $value->member_job ?></span>
                            <div class="trainer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- About Page Trainer Section End -->
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
<!-- Footer Section Begin -->
<?php
include_once('./View/website/share/Footer.php');
?>