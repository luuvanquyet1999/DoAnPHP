<?php
include_once './mvc/view/config.php';
require_once './mvc/view/setlink.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mag - Video &amp; Magazine HTML Template</title>
    <?php include_once './mvc/view/link.php' ?>
    <script src="<?php echo CSSDIR ?>js/jquery/jquery-2.2.4.min.js"></script>
</head>

<body>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!--header-->
<?php require_once './mvc/view/pages/header.php'; ?>
<!--header-->
<section class="breadcrumb-area bg-img bg-overlay"
         style="background-image: url(<?php echo CSSDIR ?>img/bg-img/49.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2><?= $data[2] ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!--    Display Ul li Home-->
<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo Home; ?>website"><i class="fa fa-home"
                                                                                            aria-hidden="true"></i>
                                Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo Home; ?>post">Bài Viết</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $data[3] ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--    Display Ul li Home-->

<!-- ##### Post Details Area Start ##### -->
<section class="post-details-area">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-xl-8">
                <?php
                foreach ($data[1] as $value) {
                    ?>
                    <div class="post-details-content bg-white mb-30 p-30 box-shadow" style="overflow: auto">
                        <div class="blog-thumb mb-30">
                            <img src="<?php echo Home; ?><?= $value[0] ?>" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="post-meta">
                                <a href="<?php echo Home; ?>post/<?= makeLink($value[2]) ?>"><?= SetDate($value[1]) ?></a>
                                <a href="<?php echo Home; ?>post/<?= makeLink($value[2]) ?>"><?= $value[2] ?></a>
                            </div>
                            <h4 class="post-title"><?= $value[3] ?></h4>
                            <div class="post-meta-2" style="overflow: auto">
                                <p style="overflow: auto"><?= $value[4] ?></p>
                            </div>
                            <?php foreach ($data[5] as $value) { ?>
                                <div class="post-meta-2 mt-2" style="overflow: auto">
                                    <div class="post-author d-flex align-items-center" style="overflow: auto">
                                        <div class="post-author-thumb">
                                            <img src="<?php echo Home; ?><?= $value[1] ?>" alt="">
                                        </div>
                                        <div class="post-author-desc pl-4">
                                            <a href="#" class="author-name"><?= $value[0] ?></a>
                                            <p><?= $value[2] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <!-- Related Post Area -->
                <div class="related-post-area bg-white mb-30 px-30 pt-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Bài viết tương tự</h5>
                    </div>

                    <div class="row">
                        <!-- Single Blog Post -->
                        <?php
                        foreach ($data[6] as $value) {
                            ?>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-blog-post style-4 mb-30">
                                    <div class="post-thumbnail">
                                        <img src="<?php echo Home; ?><?= $value[0] ?>" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="<?php echo Home; ?>post/<?= $value[2] ?>"
                                           class="post-title"><?= $value[1] ?></a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>

                <!-- Comment Area Start -->
                <div class="comment_area clearfix bg-white mb-30 p-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Bình luận bài viết</h5>
                    </div>
                    <div id="display_comment"></div>
                </div>

                <!-- Post A Comment Area -->
                <div class="post-a-comment-area bg-white mb-30 p-30 box-shadow clearfix">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Hãy để lại bình luận tại đây</h5>
                    </div>
                    <div class="contact-form-area">
                        <form method="POST" id="comment_form">
                            <div class="form-group">
                                <?php
                                    if (!isset($_SESSION["username"])){
                                    echo  '  <input type="text" name="comment_name" id="comment_name" class="form-control"
                                       placeholder="Enter Name"/>';
                                    }
                                ?>

                            </div>
                            <div class="form-group">
                                <textarea name="comment_content" id="comment_content" class="form-control"
                                          placeholder="Enter Comment" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="comment_post" id="comment_post"
                                       value="<?= $data[7] ?>" readonly="'readonly">
                                <input type="hidden" name="comment_id" id="comment_id" value="0" readonly="readonly"/>
                                <input type="submit" name="submit" id="submit" class="btn mag-btn mt-30" type="submit"
                                       value="Submit"/>
                            </div>
                        </form>
                        <span id="comment_message"></span>
                        <br/>
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
                        <ul class="catagory-widgets">
                            <?php
                            $stt = 1;
                            foreach ($data[0] as $value) {
                                ?>
                                <li><a href="<?php echo Home; ?>archive/<?= makeLink($value[0]) ?>"><span><i
                                                    class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i> <?= $value[0] ?></span>
                                        <span><?= $value[1] ?></span></a></li>
                                <?php
                            } ?>
                        </ul>
                    </div>
                    <div class="single-sidebar-widget">
                        <a href="#" class="add-img"><img src="<?php echo CSSDIR ?>img/bg-img/myteam.jpg" alt=""></a>
                    </div>

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Subscribe</h5>
                        </div>
                        <?php
                        $stt = 1;
                        foreach ($data[4] as $value) { ?>
                            <div class="single-youtube-channel d-flex">
                                <div class="youtube-channel-thumbnail">
                                    <img src="<?php echo Home; ?><?= $value[1] ?>" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title"><?= $value[0] ?></a>
                                    <a href="<?= $value[3] ?>" class="btn subscribe-btn"><i class="fa fa-facebook"
                                                                                            aria-hidden="true"></i>
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
                            <p>Subscribe our newsletter gor get notification about new updates, information discount,
                                etc.</p>
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
<?php require_once './mvc/view/script.php' ?>
<?php require_once './mvc/view/script1.php' ?>
<?php $_SESSION["baiviet"] = $data[7]; ?>
</body>
</html>
<script>
    $(document).ready(function () {
        $('#comment_form').on('submit', function (event) {
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url: "http://localhost/doanphp/public/comment/add_comment.php",
                method: "POST",
                data: form_data,
                dataType: "JSON",
                success: function (data) {
                    console.log(data)
                    if (data.error != '') {
                        $('#comment_form')[0].reset();
                        $('#comment_message').html(data.error);
                        $('#comment_id').val('0');
                        $('#comment_post').val();
                        load_comment();
                    }
                }
            })
        });

        load_comment();

        function load_comment() {
            $.ajax({
                url: "http://localhost/doanphp/public/comment/fetch_comment.php",
                method: "POST",
                success: function (data) {
                    $('#display_comment').html(data);
                }
            })
        }

        $(document).on('click', '.reply', function () {
            var comment_id = $(this).attr("id");
            $('#comment_id').val(comment_id);
            $('#comment_name').focus();
        });


    });
</script>