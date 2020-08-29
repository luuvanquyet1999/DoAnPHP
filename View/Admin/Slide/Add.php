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
                            <h3>THÊM SLIDE</h3>
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
                                                <form action="index.php?c=AdminSlide&a=SaveAdd" method="post" enctype="multipart/form-data">
                                                    <div class="form-group row" hidden>
                                                        <label for="colFormLabel" class="col-sm-2 col-form-label ">ID</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" readonly name="slide_id" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="colFormLabel" class="col-sm-2 col-form-label ">Hình ảnh</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" name="slide_image" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" hidden>
                                                        <label for="colFormLabel" class="col-sm-2 col-form-label ">Active</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="Active" value="1" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="action">
                                                            <button type="submit" value="submit" class="btn btn-primary">Lưu</button>
                                                            <a href="index.php?c=AdminSlide&a=View" class="btn btn-warning">Cancel</a>
                                                        </div>
                                                    </div>
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