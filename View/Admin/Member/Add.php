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
    <title>ADMINISTRATOR | THÀNH VIÊN NHÓM</title>
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
                            <h3>THÊM THÀNH VIÊN NHÓM</h3>
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
                                                <form action="index.php?c=AdminMember&a=SaveAdd" method="post" enctype="multipart/form-data">
                                                    <div class="form-group row" hidden>
                                                        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">ID</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" readonly name="member_id" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Tên thành viên</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="member_name" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="colFormLabel" class="col-sm-2 col-form-label ">Nghề nghiệp</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="member_job" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="colFormLabel" class="col-sm-2 col-form-label ">Avatar</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" name="member_avatar" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="action">
                                                            <button type="reset" value="submit" class="btn btn-success">Refresh</button>
                                                            <button type="submit" value="submit" class="btn btn-primary">Lưu</button>
                                                            <a href="index.php?c=AdminMember&a=View" class="btn btn-warning">Cancel</a>
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