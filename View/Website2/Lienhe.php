<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
?>
<?php
   include_once('./View/Website2/share/header.php');
?>

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
    <?php
   include_once('./View/Website2/share/Footer.php');
?>
