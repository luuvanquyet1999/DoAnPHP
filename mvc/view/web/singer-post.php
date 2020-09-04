<?php
include_once './mvc/view/config.php';
include_once './mvc/view/setlink.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mag - Video &amp; Magazine HTML Template</title>
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
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(<?php echo CSSDIR?>img/bg-img/49.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2><?=$data[2]?></h2>
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
                        <li class="breadcrumb-item"><a href="<?php echo Home;?>website"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo Home;?>post">Bài Viết</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?=$data[3]?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->
<!-- ##### Post Details Area Start ##### -->
<section class="post-details-area">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 col-xl-8">

                <?php
                foreach ($data[1] as $value) {
                ?>
                <div class="post-details-content bg-white p-30 box-shadow" style="overflow: auto">
                    <div class="blog-thumb mb-30">
                        <img src="<?php echo Home;?><?= $value[0]?>" alt="">
                    </div>
                    <div class="blog-content">
                        <div class="post-meta">
                            <a href="<?php echo Home;?>post/<?= makeLink($value[6])?>"><?=SetDate($value[1])?></a>
                            <a href="<?php echo Home;?>post/<?= makeLink($value[2])?>"><?=$value[2]?></a>
                        </div>
                        <h4 class="post-title"><?=$value[3]?></h4>
                        <!-- Post Meta -->
                        <div class="post-meta-2">
                            <p><?=$value[4]?>
                            </p>
                        </div>

                    </div>
                    <?php
                    foreach ($data[5] as $value) {
                        ?>

                        <div class="post-author d-flex align-items-center col-8 col-xl-8">
                            <div class="post-author-thumb">
                                <img src="<?php echo Home;?><?= $value[1]?>" alt="">
                            </div>
                            <div class="post-author-desc pl-4">
                                <a href="#" class="author-name"><?= $value[0]?></a>
                                <p><?= $value[2]?></p>
                            </div>
                        </div>
                        <div class="like-dislike-share my-5">
                            <h4 class="share">240<span>Share</span></h4>
                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Share on Facebook</a>
                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Share on Twitter</a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                    <?php
                }
                ?>
                <!-- Related Post Area -->
                <div class="related-post-area bg-white mb-30 px-30 pt-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Related Post</h5>
                    </div>

                    <div class="row">
                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-blog-post style-4 mb-30">
                                <div class="post-thumbnail">
                                    <img src="<?php echo CSSDIR?>img/bg-img/29.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Dentists Are Smiling Over Painless Veneer</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-blog-post style-4 mb-30">
                                <div class="post-thumbnail">
                                    <img src="<?php echo CSSDIR?>img/bg-img/30.jpg" alt="">
                                    <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                                    <span class="video-duration">09:27</span>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Will The Democrats Be Able To Reverse</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-blog-post style-4 mb-30">
                                <div class="post-thumbnail">
                                    <img src="<?php echo CSSDIR?>img/bg-img/28.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Comment Area Start -->
                <div class="comment_area clearfix bg-white mb-30 p-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>COMMENTS</h5>
                    </div>

                    <ol>
                        <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img src="<?php echo CSSDIR?>img/bg-img/53.jpg" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <a href="#" class="comment-date">27 Aug 2019</a>
                                    <h6>Tomas Mandy</h6>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="like">like</a>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                            </div>

                            <ol class="children">
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="<?php echo CSSDIR?>img/bg-img/54.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="comment-date">27 Aug 2019</a>
                                            <h6>Britney Millner</h6>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="like">like</a>
                                                <a href="#" class="reply">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </li>

                        <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img src="<?php echo CSSDIR?>img/bg-img/55.jpg" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <a href="#" class="comment-date">27 Aug 2019</a>
                                    <h6>Simon Downey</h6>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="like">like</a>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>

                <!-- Post A Comment Area -->
                <div class="post-a-comment-area bg-white mb-30 p-30 box-shadow clearfix">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>LEAVE A REPLY</h5>
                    </div>

                    <!-- Reply Form -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name*" required>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email*" required>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message*" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn mag-btn mt-30" type="submit">Submit Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="sidebar-area bg-white mb-30 box-shadow">

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

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget">
                        <a href="#" class="add-img"><img src="public/img/bg-img/myteam.jpg" alt=""></a>
                    </div>

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Subscribe</h5>
                        </div>

                        <!-- Single YouTube Channel -->
                        <?php
                        $stt = 1;
                        foreach ($data[4] as $value) {
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

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Newsletter</h5>
                        </div>

                        <div class="newsletter-form">
                            <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                            <form action="#" method="get">
                                <input type="search" name="widget-search" placeholder="Enter your email">
                                <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                            </form>
                        </div>
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
