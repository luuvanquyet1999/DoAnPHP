<?php
include_once('./View/Admin/checkSession.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="View/Admin/images/favicon.ico" type="image/ico" />
    <title>ADMINISTRATOR | Introduce </title>
    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="asset/vendors/Style.css" rel="stylesheet">

    <link href="asset/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php
            include_once('./View/Admin/Share/header.php');
            ?>
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Giới thiệu</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-3"></div>
                            <div class="col-md-6 col-sm-6">
                                <div class="add">
                                    <h3>Cập nhật</h3>
                                    <form action="index.php?c=AdminGioiThieu&a=SaveUpdate" method="post" enctype="multipart/form-data">

                                        <div class="form-group row" hidden>
                                            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">ID</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="<?= $gioithieu->intro_id ?>" readonly name="intro_id" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">Tiêu đề</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="<?= $gioithieu->title ?>" name="title" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label ">Tóm tắt</label>
                                            <div class="col-sm-10">
                                                <textarea name="summary" class="form-control" rows="5" style="width:95%"><?= $gioithieu->summary ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label ">Nội dung</label>
                                            <div class="col-sm-10">
                                                <textarea name="content" class="form-control" rows="8" style="width:95%"><?= $gioithieu->content ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label ">Hình ảnh</label>
                                            <div class="col-sm-10">
                                                <input type="file" name = "image" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="action">
                                                <button type="submit" value="submit" class="btn btn-primary">Lưu</button>
                                                <a href="index.php?c=AdminGioiThieu&a=View" class="btn btn-warning">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
            <?php
            include_once('./View/Admin/Share/footer.php');
            ?>
        </div>
    </div>

    <!-- jQuery -->
    <script src="asset/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="asset/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="asset/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="asset/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="asset/vendors/iCheck/icheck.min.js"></script>
    <script src="asset/vendors/jszip/dist/jszip.min.js"></script>
    <script src="asset/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="asset/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="asset/build/js/custom.min.js"></script>

</body>

</html>