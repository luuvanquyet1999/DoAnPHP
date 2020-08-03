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
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="filter-controls">
                    <ul>
                        <li class="active" data-filter=".all">Tất Cả</li>
                        <li data-filter=".fitness">Thể Dục</li>
                        <li data-filter=".coaching">Gym</li>
                        <li data-filter=".event">Sức Khỏe</li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row gallery-filter">
            <div class="col-md-8 mix all fitness">
                <div class="gallery-item">
                    <div class="gi-img">
                        <img src="view/Website2/img/gallery/gallery-1.jpg" alt="">
                    </div>
                    <div class="gi-text">
                        <h5>Thể Thao</h5>
                        <span>Luyện tập 30 phút mỗi ngày</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-lg-12 mix all coaching event">
                        <div class="gallery-item">
                            <div class="gi-img">
                                <img src="view/Website2/img/gallery/gallery-2.jpg" alt="">
                            </div>
                            <div class="gi-text">
                                <h5>Thể Thao</h5>
                                <span>Thể Thao</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mix all other fitness">
                        <div class="gallery-item">
                            <div class="gi-img">
                                <img src="view/Website2/img/gallery/gallery-3.jpg" alt="">
                            </div>
                            <div class="gi-text">
                                <h5>Thể Thao</h5>
                                <span>Luyện tập 30 phút mỗi ngày</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="row">
                    <div class="col-lg-12 mix all coaching">
                        <div class="gallery-item">
                            <div class="gi-img">
                                <img src="view/Website2/img/gallery/gallery-4.jpg" alt="">
                            </div>
                            <div class="gi-text">
                                <h5>Thể Thao</h5>
                                <span>Luyện tập 30 phút mỗi ngày</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mix all other event">
                        <div class="gallery-item">
                            <div class="gi-img">
                                <img src="view/Website2/img/gallery/gallery-5.jpg" alt="">
                            </div>
                            <div class="gi-text">
                                <h5>Thể Thao</h5>
                                <span>Luyện tập 30 phút mỗi ngày</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mix all coaching fitness">
                <div class="gallery-item">
                    <div class="gi-img">
                        <img src="view/Website2/img/gallery/gallery-6.jpg" alt="">
                    </div>
                    <div class="gi-text">
                        <h5>Thể Thao</h5>
                        <span>Luyện tập 30 phút mỗi ngày</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mix all event other">
                <div class="gallery-item">
                    <div class="gi-img">
                        <img src="view/Website2/img/gallery/gallery-7.jpg" alt="">
                    </div>
                    <div class="gi-text">
                        <h5>Thể Thao</h5>
                        <span>Luyện tập 30 phút mỗi ngày</span>
                    </div>
                </div>
            </div>
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
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Subject">
                                    <textarea placeholder="Message"></textarea>
                                    <button type="submit">Submit <i class="ti-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
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