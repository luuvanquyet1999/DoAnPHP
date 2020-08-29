<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php
if (!isset($_SESSION["username"])) {
    echo "<script type='text/javascript'>alert('Vui lòng bạn đăng nhập tài khoản Admin');</script>";
    header('Location: index.php?c=AdminLogin&a=View');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | Slide</title>

    <?php
    include 'asset/Scripts/ScriptHeader.php';
    ?>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- menu -->
            <?php
            include_once('./View/Admin/Share/Menu.php');
            ?>
            <!-- end menu -->
            <div class="top_nav">
                <!-- header -->
                <?php
                include_once('./View/Admin/Share/Header.php');
                ?>
                <!-- end header -->
            </div>
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>QUẢN LÝ SLIDE</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <a href="?c=AdminSlide&a=Add" class="btn btn-primary mt-2">Thêm mới</a>
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
                                                    <table id="datatable" class="table table-striped table-bordered">
                                                        <thead class="text-center">
                                                            <tr>
                                                                <th>STT</th>
                                                                <th>Image</th>
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
                                                                    <td style="text-align: center;"><img src="<?= $value->slide_image ?>" style="max-width:100%; height:150px"></td>
                                                                    <td>
                                                                        <a class="btn btn-danger" href="javascript:void(0);" onclick="fucAlert(this.id)" id="<?= $value->slide_id ?>"><i class="fa fa-trash"></i></a>
                                                                        <a hidden href="?c=AdminSlide&a=Delete&slide_id=<?= $value->slide_id ?>" id="xoa<?= $value->slide_id ?>"></a>
                                                                        <!-- <a href="?c=AdminSlide&a=Delete&slide_id=<?= $value->slide_id ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a> -->
                                                                        <a href="?c=AdminSlide&a=Update&slide_id=<?= $value->slide_id ?>" class="btn btn-primary"><i class=" fa fa-edit"></i></a>
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
            <!-- footer -->
            <?php
            include_once('./View/Admin/Share/Footer.php');
            ?>
            <!-- end footer -->
        </div>
        <?php
        include 'asset/Scripts/ScriptFooter.php';
        ?>
</body>

</html>