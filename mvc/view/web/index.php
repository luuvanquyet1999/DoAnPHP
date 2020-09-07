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
    <title>Fuho Fc &amp; Home</title>
    <?php include_once './mvc/view/link.php' ?>
</head>

<body>
<!-- ##### Header Area Start ##### -->
<?php require_once './mvc/view/pages/header.php'; ?>
<!-- ##### Header Area End ##### -->
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<!-- ##### Hero Area End ##### -->

<!-- ##### Mag Posts Area Start ##### -->
<section class="mag-posts-area d-flex flex-wrap">

    <!-- >>>>>>>>>>>>>>>>>>>>
     Post Left Sidebar Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Tin mới</h5>
            </div>
            <?php
            foreach ($data[2] as $value) {
                ?>
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="<?php echo Home; ?><?= $value[1] ?>" alt="">
                    </div>
                    <div class="post-content">
                        <a href="<?php echo Home; ?>post/<?= ($value[5]) ?>"
                           class="post-title"><?= $value[3] ?></a>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget">
            <a href="#" class="add-img"><img src="<?php echo CSSDIR ?>img/bg-img/locfuho_image.jpg" alt=""></a>
        </div>

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Phổ Biến</h5>
            </div>

            <!-- Single Blog Post -->
            <?php
            foreach ($data[8] as $value) {
                ?>
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="<?php echo Home; ?><?= $value[1] ?>" alt="">
                    </div>
                    <div class="post-content">
                        <a href="<?php echo Home; ?>post/<?= ($value[2]) ?>"><?= $value[0] ?></a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <!-- >>>>>>>>>>>>>>>>>>>>
         Main Posts Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
        <!-- Trending Now Posts Area -->
        <div class="trending-now-posts mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Xu hướng</h5>
            </div>

            <div class="trending-post-slides owl-carousel">
                <!-- Single Trending Post -->

                <?php
                $stt = 1;
                foreach ($data[1] as $value) {
                    ?>
                    <div class="single-trending-post">
                        <img src="<?php echo Home; ?><?= $value[2] ?>" alt="">
                        <div class="post-content">
                            <a href="<?php echo Home; ?>archive/<?= makeLink($value[1]) ?>"
                               class="post-cata"><?= $value[1] ?></a>
                            <a href="<?php echo Home; ?>post/<?=($value[3]) ?>"
                               class="post-title"><?= $value[0] ?></a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>

        <!-- Feature Video Posts Area -->
        <div class="feature-video-posts mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Dành Cho Bạn</h5>
            </div>

            <div class="featured-video-posts">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <!-- Single Featured Post -->
                        <?php
                        $stt = 1;
                        foreach ($data[3] as $value) {
                        ?>
                        <div class="single-featured-post">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <img src="<?php echo Home; ?><?= $value[1] ?>"" alt="">
                                <a href="video-post.html" </a>
                            </div>
                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="<?php echo Home; ?>archive/<?= makeLink($value[0]) ?>"><?= SetDate($value[2]) ?></a>
                                    <a href="<?php echo Home; ?>archive/<?= makeLink($value[0]) ?>"><?= $value[0] ?></a>
                                </div>
                                <a href="<?php echo Home; ?>post/<?= makeLink($value[3]) ?>"
                                   class="post-title"><?= $value[3] ?></a>
                                <p><?= $value[4] ?></p>
                            </div>
                            <!-- Post Share Area -->
                        </div>
                    </div>
                    <?php
                    }
                    ?>


                    <div class="col-12 col-lg-5">
                        <!-- Featured Video Posts Slide -->
                        <div class="featured-video-posts-slide owl-carousel">

                            <div class="single--slide">
                                <!-- Single Blog Post -->

                                <?php
                                $stt = 1;
                                foreach ($data[4] as $value) {
                                    ?>
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="<?php echo Home; ?><?= $value[1] ?>" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="<?php echo Home; ?>post/<?= makeLink($value[3]) ?>"
                                               class="post-title"><?= $value[3] ?></a>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>

                            <div class="single--slide">
                                <!-- Single Blog Post -->
                                <?php
                                $stt = 1;
                                foreach ($data[5] as $value) {
                                    ?>
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="<?php echo Home; ?><?= $value[1] ?>" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="<?php echo Home; ?>post/<?= makeLink($value[3]) ?>"
                                               class="post-title"><?= $value[3] ?></a>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>

                                <!-- Single Blog Post -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sports Videos -->
        <div class="sports-videos-area">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Thời Trang</h5>
            </div>

            <div class="sports-videos-slides owl-carousel mb-30">
                <!-- Single Featured Post -->
                <?php
                $stt = 1;
                foreach ($data[6] as $value) {
                    ?>
                    <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            <img src="<?php echo Home; ?><?= $value[1] ?>" alt="">
                            <a href="video-post.html"></i></a>
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="<?php echo Home; ?>archive/<?= makeLink($value[0]) ?>"><?=SetDate($value[2]) ?></a>
                                <a href="<?php echo Home; ?>archive/<?= makeLink($value[0]) ?>"><?= $value[0] ?></a>
                            </div>
                            <a href="<?php echo Home; ?>post/<?= ($value[5]) ?>"
                               class="post-title"><?= $value[3] ?></a>
                            <p><?= $value[4] ?></p>
                        </div>
                        <!-- Post Share Area -->
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="sports-videos-area">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Thể Thao</h5>
            </div>

            <div class="sports-videos-slides owl-carousel mb-30">
                <!-- Single Featured Post -->
                <?php
                $stt = 1;
                foreach ($data[7] as $value) {
                    ?>
                    <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            <img src="<?php echo Home; ?><?= $value[1] ?>" alt="">
                            <a href="video-post.html"></i></a>
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="<?php echo Home; ?>archive/<?= makeLink($value[0]) ?>"><?= SetDate($value[2]) ?></a>
                                <a href="<?php echo Home; ?>archive/<?= makeLink($value[0]) ?>"><?= $value[0] ?></a>
                            </div>
                            <a href="<?php echo Home; ?>archive/<?= ($value[5]) ?>"
                               class="post-title"><?= $value[3] ?></a>
                            <p><?= $value[4] ?></p>
                        </div>
                        <!-- Post Share Area -->
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>

    </div>

    <!-- >>>>>>>>>>>>>>>>>>>>
     Post Right Sidebar Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
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
                    <li><a href="<?php echo Home; ?>archive/<?= makeLink($value[0]) ?>"><span><i
                                        class="fa fa-angle-double-right" aria-hidden="true"></i> <?= $value[0] ?></span>
                            <span><?= $value[1] ?></span></a></li>
                    <?php
                }
                ?>

            </ul>
        </div>

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget">
            <a href="#" class="add-img"><img src="<?php echo CSSDIR ?>img/bg-img/myteam.jpg" alt=""></a>
        </div>
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Subscribe</h5>
            </div>

            <!-- Single YouTube Channel -->
            <?php
            $stt = 1;
            foreach ($data[9] as $value) {
                ?>
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="<?php echo Home; ?><?= $value[1] ?>" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title"><?= $value[0] ?></a>
                        <a href="<?=$value[3]?>" class="btn subscribe-btn"><i class="fa fa-facebook" aria-hidden="true"></i>
                            Subscribe</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<?php require_once './mvc/view/pages/footer.php'; ?>
<?php require_once './mvc/view/script.php' ?>
</body>

</html>