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
    <meta charset="UTF-8">
    <link rel="icon" href="View/Admin/images/favicon.ico" type="image/ico" />
    <title>ADMINISTRATOR | Posts</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <!-- Custom Theme Style -->
    <link href="asset/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php
            include_once('./View/Admin/Share/header.php');
            ?>
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Quản lý bài viết</h3>
                        </div>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <a href="?c=Post&a=Add" class="btn btn-primary">Thêm mới</a>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row" style="width:100%">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <p>
                                                        <?php
                                                        if (isset($_GET['r'])) {
                                                            if ($_GET['r'] == 1) {
                                                                echo "<script type='text/javascript'>alert('Success');</script>";
                                                            } else {
                                                                echo "<script type='text/javascript'>alert('Error');</script>";
                                                            }
                                                        }
                                                        ?>
                                                    </p>
                                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>STT</th>
                                                                <th>Tiêu đề</th>
                                                                <th>Tóm tắt</th>
                                                                <th>Nội dung</th>
                                                                <th>Ngày viết</th>
                                                                <th>Link</th>
                                                                <th>category id</th>
                                                                <th>#</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            </tr>
                                                            <?php
                                                            $stt = 1;
                                                            foreach ($data as $value) {
                                                            ?>
                                                                <tr>
                                                                    <td><?= $stt++ ?></td>
                                                                    <td><?= $value->post_title ?></td>
                                                                    <td><?= $value->post_summary ?></td>
                                                                    <td><?= $value->post_content ?></td>
                                                                    <td><?= $value->post_createdate ?></td>
                                                                    <td><?= $value->post_link ?></td>
                                                                    <td><?= $value->category_id ?></td>
                                                                    <td>
                                                                        <a href="?c=Post&a=Delete&PostID=<?= $value->post_id ?>" class="btn btn-danger"><i class="fa fa-trash-o "></i></a>
                                                                        <a href="?c=Post&a=Update&PostID=<?= $value->post_id ?>" class="btn btn-primary"><i class="fa fa-eyedropper"></i></a>
                                                                    </td>
                                                                </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <?php
            include_once('./View/Admin/Share/footer.php');
            ?>
            <!-- /footer content -->
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
    <!-- Datatables -->
    <!-- <script src="asset/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="asset/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="asset/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="asset/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="asset/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="asset/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="asset/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="asset/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="asset/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="asset/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="asset/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="asset/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script> -->
    <script src="asset/vendors/jszip/dist/jszip.min.js"></script>
    <script src="asset/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="asset/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="asset/build/js/custom.min.js"></script>

</body>

</html>