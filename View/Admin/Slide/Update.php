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
    <title>ADMINISTRATOR | SLIDE</title>
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
                    <div class="clearfix"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-3"></div>
                            <div class="col-md-6 col-sm-6">
                                <div class="add">
                                    <h3>Chỉnh sửa Slide</h3>
                                    <form action="index.php?c=AdminSlide&a=SaveUpdate" method="post" enctype="multipart/form-data">
                                        <div class="form-group row" hidden>
                                            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">ID</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="<?= $slide->slide_id ?>" readonly name="slide_id" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label ">Hình ảnh</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control-file" name="slide_image">
                                                <img class="imageShow" id="showImage" style="width: 150px" height="100px" src="<?= $slide->slide_image ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row" hidden>
                                            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">acitve</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="Active" value="1" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="action">
                                                <button type="submit" value="submit" class="btn btn-primary">Update</button>
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