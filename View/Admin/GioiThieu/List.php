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
                                                    <table id="bootstrap-data-table" class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>STT</th>
                                                                <th>Title</th>
                                                                <th>Summary</th>
                                                                <th>Content</th>
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
                                                                    <td><?= $value->title ?></td>
                                                                    <td><?= $value->summary ?></td>
                                                                    <td><?= $value->content ?></td>
                                                                    <td>
                                                                        <img src="<?= $value->image ?>" style="width:100%; height:200px"/>
                                                                    </td>
                                                                    <td>
                                                                        <a href="?c=AdminGioiThieu&a=Update&intro_id=<?= $value->intro_id ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
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