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
        
        <div style="    margin-left: 125px" class="row">
            <div style="    margin-top: 30px;" class="col-6">
            <div><h3>Thể Thao</h3></div>
                <a href="?c=WebsiteTheThao&a=View"> <img style="width:400px;" src="https://nld.mediacdn.vn/thumb_w/540/2019/8/3/photo-1-15648212499661517922266.jpg" alt=""></a>
                
                
            </div>
            <div style="    margin-top: 30px;" class="col-6">
            <div><h3>Giai Tri</h3></div>
                <a href="?c=WebsiteTheThao&a=View"> <img style="width:400px" src="https://nld.mediacdn.vn/thumb_w/540/2019/8/3/photo-1-15648212499661517922266.jpg" alt=""></a>
            </div>
        </div>
     
        <div style="    margin-left: 125px" class="row">
            <div style="    margin-top: 30px;" class="col-6">
            <div><h3>Công Nghệ</h3></div>
                <a href="?c=WebsiteTheThao&a=View"> <img style="width:400px" src="https://nld.mediacdn.vn/thumb_w/540/2019/8/3/photo-1-15648212499661517922266.jpg" alt=""></a>
            </div>
            <div style="    margin-top: 30px;" class="col-6">
            <div><h3>Âm Thực</h3></div>
                <a href="?c=WebsiteTheThao&a=View"> <img style="width:400px" src="https://nld.mediacdn.vn/thumb_w/540/2019/8/3/photo-1-15648212499661517922266.jpg" alt=""></a>
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