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
    <title>ADMINISTRATOR | Contact </title>
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
                            <h3>Địa chỉ website</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-3"></div>
                            <div class="col-md-6 col-sm-6">
                                <div class="add">
                                    <h3>Cập nhật</h3>
                                    <form action="index.php?c=Contact&a=SaveUpdate" method="post">

                                        <div class="form-group row" hidden>
                                            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">ID</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="<?= $contact->contact_id ?>" readonly name="contact_id" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="<?= $contact->contact_email ?>" name="contact_email" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="<?= $contact->contact_phone ?>" name="contact_phone" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">Address</label>
                                            <div class="col-sm-10">
                                                <td><input type="text" value="<?= $contact->contact_address ?>" name="contact_address" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group row" hidden>
                                            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">Active</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="<?= $contact->Active ?>" name="contact_Active" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="action">
                                                <button type="submit" value="submit" class="btn btn-primary">Lưu</button>
                                                <a href="index.php?c=Contact&a=View" class="btn btn-warning">Cancel</a>
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