<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="footer-widget">
                    <!-- Logo -->
                    <a href="<?php echo Home; ?>WebsiteHome" class="foo-logo"><img src="<?php echo CSSDIR?>img/core-img/logo4.png" alt=""></a>
                    <?php
                    $mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
                    $mysql->query("SET NAMES 'utf8'");
                    $query ="SELECT Comment FROM lph_contact WHERE Active =1";
                    $result = $mysql->query($query);
                    while ($row = mysqli_fetch_array($result)) { ?>
                        <p><?=$row[0]?></p>
                        <?php
                    }
                    ?>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="footer-widget">
                    <h6 class="widget-title">Thể Loại</h6>
                    <nav class="footer-widget-nav">
                        <ul>
                            <?php
                            $mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
                            $mysql->query("SET NAMES 'utf8'");
                            $query ="SELECT CategoryName FROM lph_category WHERE Active =1";
                            $result = $mysql->query($query);
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?=$row[0]?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="footer-widget">
                    <h6 class="widget-title">Danh Mục</h6>
                    <ul class="footer-tags">
                        <li><a href="#">Du Lịch</a></li>
                        <li><a href="#">Thời Trang</a></li>
                        <li><a href="#">Âm Nhạc</a></li>
                        <li><a href="#">Thiết Kế</a></li>
                        <li><a href="#">Mới</a></li>
                        <li><a href="#">Xu hướng</a></li>
                        <li><a href="#">VIDEO</a></li>
                        <li><a href="#">Game</a></li>
                        <li><a href="#">Thể Thao</a></li>
                        <li><a href="#">Phong Cách</a></li>
                        <li><a href="#">Thức Ăn</a></li>
                        <li><a href="#">TV Show</a></li>
                        <li><a href="#">Twitter Video</a></li>
                        <li><a href="#">Playing</a></li>
                        <li><a href="#">Clips</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class="copywrite-area">
        <div class="container">
            <div class="row">
                <!-- Copywrite Text -->
                <div class="col-12 col-sm-5">
                    <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="#" target="_blank">LocFuho</a>
                    </p>
                </div>
                <div class="col-12 col-sm-3">
                   <h6 class="copywrite-text" style="color: #ed3974;"><b>Thanks for watching</b></h6>
                </div>
                <div class="col-12 col-sm-4">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="#" >Trang Chủ</a></li>
                            <li><a href="#">Bài Viết</a></li>
                            <li><a href="#">Đội Ngũ</a></li>
                            <li><a href="#">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
