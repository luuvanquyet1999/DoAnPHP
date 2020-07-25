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
    <link href="asset/vendors/Style.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="asset/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">

    <script>
        function getDate() {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();
            if (dd < 10) {
                dd = '0' + dd
            }
            if (mm < 10) {
                mm = '0' + mm
            }
            today = yyyy + '-' + mm + '-' + dd;
            console.log(today);
            document.getElementById("date").value = today;
        }


        window.onload = function() {
            getDate();
        };
    </script>
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
                            <h3>QUẢN LÝ BÀI VIẾT</h3>
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
                            <div class="col-2"></div>
                            <div class="col-md-8 col-sm-8">
                                <div class="add">
                                    <h3>Thêm bài viết</h3>
                                    <form action="index.php?c=Post&a=SaveUpdate" method="post" enctype="multipart/form-data">
                                        <table style="width:95%">
                                            <tr hidden>
                                                <td>id</td>
                                                <td><input type="text" readonly name="post_id" value="<?= $post->post_id ?>" /></td>
                                            </tr>
                                            <tr>
                                                <td>Nhóm bài viết</td>
                                                <td>
                                                    <select name="category">
                                                        <!-- <option value=""></option> -->
                                                        <?php
                                                        $mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
                                                        $query = "SELECT * FROM lph_category WHERE Active =1";
                                                        $result = $mysql->query($query);

                                                        while ($row = mysqli_fetch_array($result)) {
                                                            echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tiêu đề</td>
                                                <td><input type="text" name="post_title" class="form-control" value="<?= $post->post_title ?>" /></td>
                                            </tr>
                                            <tr>
                                                <td>Tóm tắt</td>
                                                <td>
                                                    <textarea name="post_summary" class="form-control" rows="3" style="width:100%"><?= $post->post_summary ?></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nội dung</td>
                                                <td>
                                                    <textarea name="post_content" class="form-control" rows="8" style="width:100%"><?= $post->post_content ?></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Hình ảnh</td>
                                                <td><input type="file" name="post_image" class="form-control" /></td>
                                            </tr>
                                            <tr hidden>
                                                <td>ngày</td>
                                                <td><input type="text" name="createday" onload="getDate()" class="form-control" id="date" /></td>
                                            </tr>
                                            <tr hidden>
                                                <td>active</td>
                                                <td><input type="text" name="Active" value="1" /></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <button type="submit" value="submit" class="btn btn-primary">Lưu</button>
                                                    <a href="index.php?c=Post&a=View" class="btn btn-warning">Cancel</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                            <div class="col-2"></div>
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