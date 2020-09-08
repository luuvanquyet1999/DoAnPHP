<?php
include_once 'config.php';
?>
<header class="header-area">
    <!-- Navbar Area -->
    <div class="mag-main-menu" id="sticker" style="">
        <div class="classy-nav-container breakpoint-off">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="magNav">

                <!-- Nav brand -->
                <a href="<?php echo Home; ?>WebsiteHome" class="nav-brand"><img
                            src="<?php echo CSSDIR ?>img/core-img/logo4.png" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Nav Content -->
                <div class="nav-content d-flex align-items-center">
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="<?php echo Home; ?>WebsiteHome">Trang Chủ</a></li>
                                <li><a href="<?php echo Home; ?>archive">Bài Viết</a></li>
                                <li><a href="#">Trang</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo Home; ?>WebsiteHome">Trang Chủ</a></li>
                                        <li><a href="archive">Bài viết</a></li>
                                        <li><a href="<?php echo Home; ?>post">Đọc ngay</a></li>
                                        <li><a href="<?php echo Home; ?>about">Đội ngũ</a></li>
                                        <li><a href="<?php echo Home; ?>contact">Liên Hệ</a></li>
                                        <li><a href="<?php echo Home; ?>login">Đăng nhập</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Danh sách</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="<?php echo Home; ?>archive/tin-noi-bat">Tin nổi bật</a></li>
                                            <li><a href="<?php echo Home; ?>archive/thoi-trang">Thời Trang</a></li>
                                            <li><a href="<?php echo Home; ?>archive/thoi-trang">Thời Trang</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="<?php echo Home; ?>archive/the-thao"">Thể Thao</a></li>
                                            <li><a href="<?php echo Home; ?>archive">Bài viết</a></li>
                                            <li><a href="video-post.html">Single Video Post</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="<?php echo Home; ?>archive/giai-tri">Giải Trí</a></li>
                                            <li><a href="<?php echo Home; ?>archive"">Đọc ngay</a></li>
                                            <li><a href="<?php echo Home; ?>login">Đăng nhập</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="<?php echo Home; ?>about">Đội ngũ</a></li>
                                <li><a href="<?php echo Home; ?>contact">Liên Hệ</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

                    <div class="top-meta-data d-flex align-items-center">
                        <!-- Top Search Area -->
                        <div class="top-search-area" >
                            <form action="/doanphp/archive/search" name="search_post" id="search_post" method="post">
                                <input type="search" name="topsearch" id="topsearch" "
                                       placeholder="Search and hit enter...">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="top-meta-data d-flex align-items-center">
                            <?php
                            if (!isset($_SESSION["username"])){
                                ?>
                                <a href="<?php echo Home; ?>login" class="login-btn"><i class="fa fa-user"
                                                                                        aria-hidden="true"></i></a>
                                <?php
                            }else{
                                ?>
                                <a class="submit-video show " type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <?= $_SESSION["username"] ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo Home; ?>logout">Đăng xuất</a>
                                </div>
                                <?php
                            }
                            ?>
                    </div>
            </nav>
        </div>
    </div>
</header>
<script>
    $('#search_post').on('submit', function(e) {
        var x = document.forms["search_post"]["topsearch"].value;
        if (x.length<=3) {
            e.preventDefault(); // Now nothing will happen
        }

    });
</script>