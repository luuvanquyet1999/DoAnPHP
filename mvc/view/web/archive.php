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
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Fuho FC &amp; Archive</title>
    <link href="<?php echo CSSDIR?>css/buzina-pagination.min.css" rel="stylesheet" type="text/css">
    <!-- Favicon -->
    <?php include_once  './mvc/view/link.php'?>
    <style>
        .pagination {
            margin-bottom: 20px;
            display: -ms-flexbox;
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: .25rem;
        }
    </style>
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
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(<?php echo CSSDIR?>img/bg-img/41.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2><?= $data[0]?></h2>
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
                        <li class="breadcrumb-item"><a href="<?php echo Home;?>archive">Bài Viết</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><strong><?= $data[0]?></strong></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Archive Post Area Start ##### -->
<div class="archive-post-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
                <div id="uniqueId" class="archive-posts-area bg-white p-30 mb-30 box-shadow">
                    <?php
                    foreach ($data[1] as $value) {
                        ?>
                        <!-- Single Catagory Post -->
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url(<?php echo Home;?><?= $value[1]?>);">
                                <a href="video-post.html"></a>
                            </div>
                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="<?php echo Home;?>post/<?=($value[5])?>"><?= SetDate($value[2])?></a>
                                    <a href="<?php echo Home;?>post/<?= makeLink($value[0])?>"><?= $value[0]?></a>
                                </div>
                                <a href="<?php echo Home;?>post/<?= ($value[5])?>" class="post-title"><?= $value[3]?></a>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                </div>
                                <p><?= $value[4]?></p>
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
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Categories</h5>
                        </div>

                        <!-- Catagory Widget -->
                        <ul class="catagory-widgets">
                            <?php
                            $stt = 1;

                            foreach ($data[2] as $value) {
                                ?>
                                <li><a href="<?php echo Home;?>archive/<?= makeLink($value[0])?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?= $value[0]?></span> <span><?= $value[1]?></span></a></li>
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
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Subscribe</h5>
                        </div>

                        <!-- Single YouTube Channel -->
                        <?php
                        $stt = 1;
                        foreach ($data[3] as $value) {
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

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Archive Post Area End ##### -->

<?php require_once './mvc/view/pages/footer.php'; ?>
<?php require_once './mvc/view/script.php'?>
<?php require_once './mvc/view/script1.php'?>
<script>
    $(document).ready(function () {
        $('#uniqueId').buzinaPagination({
            itemsOnPage:4
        });
    });
</script>
</body>

</html>
