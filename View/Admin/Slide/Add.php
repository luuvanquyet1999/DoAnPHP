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
                                    <h3>Thêm Slide</h3>
                                    <form action="index.php?c=AdminSlide&a=SaveAdd" method="post" enctype="multipart/form-data">
                                        <table>
                                            <tr hidden>
                                                <td>Id</td>
                                                <td><input type="text" readonly name="slide_id" /></td>
                                            </tr>
                                            <tr>
                                                <div class="form-group row">
                                                    <input type="file" class="form-control-file col-sm-10" name="slide_image">
                                                </div>
                                            </tr>
                                            <tr hidden>
                                                <td>active</td>
                                                <td><input type="text" name="Active" value="1" /></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <button type="reset" value="submit" class="btn btn-success">Refresh</button>
                                                </td>
                                                <td>
                                                    <button type="submit" value="submit" class="btn btn-primary">Lưu</button>
                                                    <a href="index.php?c=AdminSlide&a=View" class="btn btn-warning">Cancel</a>
                                                </td>
                                            </tr>
                                        </table>
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