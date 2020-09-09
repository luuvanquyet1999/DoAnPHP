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
    <title>Fuho Fc &amp; About</title>
    <?php include_once  './mvc/view/link.php' ?>
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
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(<?php echo CSSDIR ?>img/bg-img/40.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Đội ngũ</h2>
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
                            <li class="breadcrumb-item active" aria-current="page">Đội ngũ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <!-- About Us Content -->
                    <div class="about-us-content bg-white mb-30 p-30 box-shadow">
                        <!-- Section Title -->
                        <?php
                        $stt = 1;
                        foreach ($data[2] as $value) {
                        ?>
                            <div class="section-heading">
                                <h5><?= $value[1] ?></h5>
                            </div>
                            <p><?= $value[2] ?></p>
                            <p><?= $value[3] ?></p>
                            <img class="mt-15" src="<?php echo Home; ?><?= $value[4] ?>" alt="">
                        <?php
                        }
                        ?>
                        <!-- Team Member Area -->
                        <div class="section-heading mt-30">
                            <h5>Thành Viên</h5>
                        </div>
                        <?php
                        $stt = 1;
                        foreach ($data[1] as $value) {
                        ?>
                            <div class="single-team-member d-flex align-items-center">
                                <div class="team-member-thumbnail">
                                    <img src="<?php echo Home; ?><?= $value[1] ?>" alt="">
                                    <div class="social-btn" id="linkfacebook">
                                        <a href="<?= $value[3] ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#linkfacebook"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#linkfacebook"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="team-member-content">
                                    <h6><?= $value[0] ?></h6>
                                    <span><?= $value[2] ?></span>
                                    <p><?= $value[4] ?></p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
                        <!-- Sidebar Widget -->

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Thể loại</h5>
                            </div>

                            <!-- Catagory Widget -->
                            <ul class="catagory-widgets">
                                <?php
                                $stt = 1;

                                foreach ($data[0] as $value) {
                                ?>
                                    <li><a href="<?php echo Home; ?>archive/<?= makeLink($value[0]) ?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?= $value[0] ?></span> <span><?= $value[1] ?></span></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget">
                            <a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
                        </div>

                        <!-- Sidebar Widget -->
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require_once './mvc/view/pages/footer.php'; ?>
    <?php require_once './mvc/view/script.php' ?>

</body>

</html>