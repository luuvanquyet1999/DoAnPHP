<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator | Tài khoản quản trị viên</title>
    <?php
    include 'asset/Scripts/ScriptHeader.php';
    ?>

</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
        include_once('./View/Admin/Share/Header.php');
        ?>
        <?php
        include_once('./View/Admin/Share/Menu.php');
        ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>QUẢN LÝ TÀI KHOẢN QUẢN TRỊ VIÊN</h3>
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
                                                <div class="card-body">
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
                                                    <table id="zero_config" class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>STT</th>
                                                                <th>UserName</th>
                                                                <th>Full Name</th>
                                                                <th>Email</th>
                                                                <th>Ngày Sinh</th>
                                                                <th>Giới tính</th>
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
                                                                    <td><?= $value->UserAdmin_username ?></td>
                                                                    <td><?= $value->UserAdmin_fullname ?></td>
                                                                    <td><?= $value->UserAdmin_email ?></td>
                                                                    <td><?= $value->UserAdmin_dateofbirth ?></td>
                                                                    <td><?= $value->UserAdmin_gender ?></td>
                                                                    <td>
                                                                        <a class="btn btn-danger" href="javascript:void(0);" onclick="fucAlert(this.id)" id="<?= $value->UserAdmin_id ?>"><i class="fa fa-trash"></i></a>
                                                                        <a hidden href="?c=UserAdmin&a=Delete&UserAdminID=<?= $value->UserAdmin_id ?>" id="xoa<?= $value->UserAdmin_id ?>"></a>
                                                                        <a href="?c=UserAdmin&a=Update&UserAdminID=<?= $value->UserAdmin_id ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
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
        </div>
        <?php
        include_once('./View/Admin/Share/Footer.php');
        ?>
        <?php
        include 'asset/Scripts/ScriptFooter.php';
        ?>
</body>

</html>