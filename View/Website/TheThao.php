<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php
include_once('./View/website/share/header.php');
?>
<!-- Header End -->

<!-- Site Breadcrumb Begin -->
<section class="breadcrumb-section set-bg" data-setbg="View/website/img/about-breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-text">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Site Breadcrumb End -->

<!-- Blog Section Begin -->
<section class="gallery-section spad">
    <div class="container">
        <div class="menu-wrapper">
            <div class="portfolioFilter">
                <div class="portfolioFilter-inner">
                    <a href="?c=WebsiteTinMoi&a=View" data-filter=".dessert">All</a>
                    <a href="?c=WebsiteTheThao&a=View" data-filter="*" class="current">Thế Thao</a>
                    <a href="?c=WebsiteGiaitri&a=View" data-filter=".dessert">Giải Trí</a>
                    <a href="?c=WebsiteThoitrang&a=View" data-filter=".dinner">Thời Trang</a>
                    <a href="?c=Websitetinnoibat&a=View" data-filter=".freshfood">Tin Nỗi Bật</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-section spad">
    <h2 style="text-align: center;margin-bottom: 30px;">Thể Thao Tuần Này Có Gì?</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-items">
                    <div class="single-blog-item">
                        <div class="blog-pic">
                            <img src="View/website/img/10jpg.jpg" alt="">
                        </div>
                        <div class="blog-text">
                            <div class="blog-tag">
                                <div class="post-info">
                                    <span>CongVien</span> - Dec 29, 2018
                                </div>
                                <div class="tag-details">
                                    <a href="#" class="tag-event">
                                        <i class="fa fa-tag"></i> Cycling
                                    </a>
                                    <a href="#" class="tag-comments">
                                        <i class="fa fa-comments-o"></i> 5 Comments
                                    </a>
                                </div>
                            </div>
                            <a href="./blog-details.html">
                                <h3>Ronaldo giành danh hiệu đẹp nhất c1</h3>
                            </a>
                            <p> Bước đầu là giai đoạn rất quan trọng với người tập thể hình. Đây là giai đoạn kích thích khởi động các cơ, chính vì vậy hãy để cơ luôn trọng trạng thái hoạt động, dù nặng hay nhẹ. Liên tục duy trì 5 – 6 buổi tập / tuần.
                                Bạn không được phép nghỉ, nghỉ buổi nào bạn cũng đang gián đoạn quá trình quá trình kích thích, khởi động cơ. Tuy nhiên, cũng đừng để cơ quá mệt mỏi, chỉ nên tập 30 phút mỗi ngày....</p>
                            <a href="#" class="blog-btn">Read More <i class="fa  fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="single-blog-item">
                        <div class="blog-pic">
                            <img src="View/website/img/11.jpg" alt="">
                        </div>
                        <div class="blog-text">
                            <div class="blog-tag">
                                <div class="post-info">
                                    <span>John Smith</span> - Dec 29, 2018
                                </div>
                                <div class="tag-details">
                                    <a href="./blog-details.html" class="tag-event">
                                        <i class="fa fa-tag"></i> Event
                                    </a>
                                    <a href="blog-details.html" class="tag-comments">
                                        <i class="fa fa-comments-o"></i> 6 Comments
                                    </a>
                                </div>
                            </div>
                            <a href="#">
                                <h3>How to Stop Muscle Cramps in Their Tracks</h3>
                            </a>
                            <p>It’s a moment many aspiring marathoners fantasize about as they finish their umpteenth long training run: The few weeks leading up to the race when a training program calls for less running...</p>
                            <a href="#" class="blog-btn">Read More <i class="fa  fa-angle-double-right"></i></a>
                        </div>
                    </div>

                    <div class="blog-pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">Next <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="blog-sidebar">
                    <div class="sidebar-recent">
                        <h4>Thể loại mới</h4>
                        <div class="sr-item">
                            <a href="#">
                                <h5>Leo núi và Đạp xe</h5>
                            </a>
                            <div class="blog-date">Ngày 22, 2020</div>
                        </div>
                        <div class="sr-item">
                            <a href="#">
                                <h5>Mọi điều bạn cần biết trước khi đi xe đạp trong nhà đầu tiên</h5>
                            </a>
                            <div class="blog-date">Ngày 21, 2020</div>
                        </div>
                        <div class="sr-item">
                            <a href="#">
                                <h5>13 cách để nâng tạ hiệu quả hơn</h5>
                            </a>
                            <div class="blog-date">Ngày 29, 2020</div>
                        </div>
                        <div class="sr-item">
                            <a href="#">
                                <h5>Chạy cuộc đua tốt nhất của bạn từ trước đến nay với 5 lời khuyên cho người thon hoàn hảo</h5>
                            </a>
                            <div class="blog-date">Ngày 31, 2020</div>
                        </div>
                    </div>

                    <div class="popular-tags">
                        <h4>Popular Tags</h4>
                        <a href="#">Cycling</a>
                        <a href="#">Building</a>
                        <a href="#">Trianer</a>
                        <a href="#">Medicine products</a>
                        <a href="#">Medication</a>
                        <a href="#">Treatment</a>
                        <a href="#">Event</a>
                    </div>
                    <div class="weekly-time">
                        <h4>Thời Gian Trực Tuyến</h4>
                        <ul>
                            <li>
                                <p>Thứ 2</p>
                                <span>07:00-17:00</span>
                            </li>
                            <li>
                                <p>Thứ 3</p>
                                <span>07:00-17:00</span>
                            </li>
                            <li>
                                <p>Thứ 4</p>
                                <span>07:00-17:00</span>
                            </li>
                            <li>
                                <p>Thứ 5</p>
                                <span>07:00-17:00</span>
                            </li>
                            <li>
                                <p>Thứ 6</p>
                                <span>07:00-17:00</span>
                            </li>
                            <li>
                                <p>Thứ 7</p>
                                <span>07:00-17:00</span>
                            </li>
                            <li>
                                <p>Chủ Nhật</p>
                                <span>07:00-17:00</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<!-- Footer Section Begin -->
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