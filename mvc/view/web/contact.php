<?php
include_once './mvc/view/config.php';
include_once './mvc/view/setlink.php';
include_once './mvc/view/checkSeseson.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fuho Fc &amp; Contact</title>
    <?php include_once  './mvc/view/link.php'?>
</head>

<body>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<?php require_once './mvc/view/pages/header.php'; ?>
<!-- ##### Header Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(<?php echo CSSDIR?>img/bg-img/40.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="website"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
                <div class="contact-content-area bg-white mb-30 p-30 box-shadow">
                    <!-- Google Maps -->
                    <div class="map-area mb-30">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.6441590447503!2d108.21911381468367!3d16.032028888903945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218389cf02c2b%3A0xbdc63233587e2d88!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyDEkMO0bmcgw4E!5e0!3m2!1svi!2s!4v1598763176017!5m2!1svi!2s"  allowfullscreen="" ></iframe>

                    </div>
                    <?php
                    $stt = 1;
                    foreach ($data[1] as $value) {
                        ?>
                    <!-- Section Title -->
                        <h5 style="color: #ed3974;text-transform: uppercase;"><strong><?=$value->contact_title?></strong></h5>
                    <div class="contact-information mb-30">
                        <p><?= $value->contact_comment?></p>
                        <div class="section-heading">
                            <h5>Contact</h5>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>Our Office:</p>
                                <h6><?= $value->contact_address ?></h6>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>Email:</p>
                                <h6><?= $value->contact_email ?> </h6>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>Phone:</p>
                                <h6><?= $value->contact_phone ?> </h6>
                            </div>
                        </div>
                    </div>
                        <?php
                    }
                    ?>
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>GET IN TOUCH</h5>
                    </div>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="<?php echo Home;?>contact/sendcontact" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn mag-btn mt-30" type="submit" name="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="sidebar-area bg-white mb-30 box-shadow">
                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Categories</h5>
                        </div>

                        <!-- Catagory Widget -->
                        <ul class="catagory-widgets">
                            <?php
                            $stt = 1;

                            foreach ($data[0] as $value) {
                                ?>
                                <li><a href="<?php echo Home;?>archive/<?= makeLink($value[0])?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?= $value[0]?></span> <span><?= $value[1]?></span></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once './mvc/view/pages/footer.php'; ?>
<?php require_once './mvc/view/script.php'?>
</body>

</html>
