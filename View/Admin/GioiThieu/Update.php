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
    <title>ADMINISTRATOR | GIỚI THIỆU</title>
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
                            <h3>QUẢN LÝ GIỚI THIỆU</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="add">
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
                                                <input type="text" value="<?= $gioithieu->title ?>" name="title" class="form-control" style="width:95%"/>
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
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile"><?=$gioithieu->image?></label>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="action">
                                                <button type="submit" value="submit" class="btn btn-primary">Update</button>
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