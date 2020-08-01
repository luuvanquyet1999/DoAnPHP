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
    <title>ADMINISTRATOR | Member</title>

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

    <!-- <link href="asset/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="asset/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="asset/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="asset/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="asset/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet"> -->

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
                            <h3>Update UserName</h3>
                        </div>
                      
                    </div>

                    <div class="clearfix"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <a href="?c=Useradmin&a=view" class="btn btn-primary">Quay Lại</a>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <form action="index.php?c=UserAdmin&a=SaveUpdate" method="post" enctype="multipart/form-data">
                                    <div class="form-group" style="display: none;">
                                         <label for="exampleInputEmail1">id</label>
                                         <input type="text" value="<?= $UserAdmin->UserAdmin_id ?>" readonly name="UserAdmin_id"  class="form-control" name="" id="exampleInputEmail1" aria-describedby="emailHelp">
                                         </div>
                                        <div class="form-group" style="width:50%">
                                         <label for="exampleInputEmail1">UserName</label>
                                         <input type="text" value="<?= $UserAdmin->UserAdmin_username ?>" readonly name="UserAdmin_username"  class="form-control" name="" id="exampleInputEmail1" aria-describedby="emailHelp">
                                         </div>
                                         <div class="form-group" style="width:50%">
                                       <label for="exampleInputPassword1">Password</label>
                                         <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $UserAdmin->UserAdmin_password ?>" name="UserAdmin_password">
                                             </div>
                                             <div class="form-group" style="width:50%">
                                         <label for="exampleInputEmail1">FullName</label>
                                         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?= $UserAdmin->UserAdmin_fullname ?>" name="UserAdmin_fullname">
                                         </div>
                                         <div class="form-group" style="width:50%">
                                         <label for="exampleInputEmail1">Email</label>
                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $UserAdmin->UserAdmin_email ?>" name="UserAdmin_email">
                                         </div>
                                         <div class="form-group" style="width:50%">
                                         <label for="exampleInputEmail1">Gander</label>
                                         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $UserAdmin->UserAdmin_gender ?>" name="UserAdmin_gender">
                                         </div>
                                         <div class="form-group" style="width:50%">
                                         <label for="exampleInputEmail1">Active</label>
                                         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $UserAdmin->Active ?>" name="Active">
                                         </div>
                                         <div class="form-group" style="width:50%">
                                         <label for="exampleInputEmail1">DateOfbirth</label>
                                         <input type="date" min="1990-01-01" max="2020-01-01" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $UserAdmin->UserAdmin_dateofbirth ?>" name="UserAdmin_dateofbirth">
                                         </div>
                                      

                                             <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
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