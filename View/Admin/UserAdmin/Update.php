<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php
if (!isset($_SESSION["username"])) {
    echo "<script type='text/javascript'>alert('Vui lòng bạn đăng nhập tài khoản Admin');</script>";
    header('Location: index.php?c=Login&a=View');
}
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMINISTRATOR | TÀI KHOẢN QUẢN TRỊ VIÊN</title>
    <?php
    include 'asset/Scripts/ScriptHeader.php';
    ?>
</head>

<body>
    <?php
    include_once('./View/Admin/Share/Menu.php');
    ?>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <?php
        include_once('./View/Admin/Share/header.php');
        ?>
        <!-- Content -->
        <div class="content">
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>CẬP NHẬT THÔNG TIN TÀI KHOẢN QUẢN TRỊ VIÊN</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row" style="width:100%">
                                            <div class="col-sm-12">
                                                <form action="index.php?c=UserAdmin&a=SaveUpdate" method="post" enctype="multipart/form-data">
                                                    <div class="form-group" style="display: none;">
                                                        <label for="exampleInputEmail1">id</label>
                                                        <input type="text" value="<?= $UserAdmin->UserAdmin_id ?>" readonly name="UserAdmin_id" class="form-control" name="" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="form-group" style="width:50%">
                                                        <label for="exampleInputEmail1">UserName</label>
                                                        <input type="text" value="<?= $UserAdmin->UserAdmin_username ?>" readonly name="UserAdmin_username" class="form-control" name="" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="form-group" style="width:50%">
                                                        <label for="exampleInputPassword1">Password</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $UserAdmin->UserAdmin_password ?>" name="UserAdmin_password">
                                                    </div>
                                                    <div class="form-group" style="width:50%">
                                                        <label for="exampleInputEmail1">FullName</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $UserAdmin->UserAdmin_fullname ?>" name="UserAdmin_fullname">
                                                    </div>
                                                    <div class="form-group" style="width:50%">
                                                        <label for="exampleInputEmail1">Email</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $UserAdmin->UserAdmin_email ?>" name="UserAdmin_email">
                                                    </div>
                                                    <div class="form-group" style="width:50%">
                                                        <label for="exampleInputEmail1">Gender</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $UserAdmin->UserAdmin_gender ?>" name="UserAdmin_gender">
                                                    </div>
                                                    <div class="form-group" style="width:50%" hidden>
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
                    </div>
                </div>
            </div>
            <!-- /page content -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <?php
        include_once('./View/Admin/Share/Footer.php');
        ?>
    </div>
    <!-- /#right-panel -->
    <?php
    include 'asset/Scripts/ScriptFooter.php';
    ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>
</body>

</html>