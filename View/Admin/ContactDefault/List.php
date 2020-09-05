<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator | Liên hệ</title>
    <?php
    include 'asset/Scripts/ScriptHeader.php';
    ?>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
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
                            <h3>QUẢN LÝ LIÊN HỆ</h3>
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
                                                    <form action="list.php" method="post">
                                                        <table id="zero_config" class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>STT</th>
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Content</th>
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
                                                                        <td><?= $value->sendcontact_fullname ?></td>
                                                                        <td><?= $value->sendcontact_email ?></td>
                                                                        <td><a href="?c=Contact&a=UpdateActive&Id=<?= $value->sendcontact_id ?>" class="btn btn-primary" id="<?= $value->sendcontact_id ?>" data-toggle="modal" data-target="#exampleModal" onclick="checkid('<?= $value->sendcontact_fullname ?>','<?= $value->sendcontact_email ?>','<?= $value->sendcontact_content ?>')"><?= $value->hidden ?></a></td>
                                                                    </tr>
                                                                    <script>
                                                                        function checkid(name, email, content) {
                                                                            document.getElementById('name').innerHTML = 'Họ và tên :' + name;
                                                                            document.getElementById('email').innerHTML = 'Email :' + email;
                                                                            document.getElementById('content').innerHTML = 'Nội dung :' + content;
                                                                        }
                                                                    </script>
                                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Liên hệ</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p id="name"></p>
                                                                                    <p id="email"></p>
                                                                                    <p id="content"></p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <a href="?c=Contact&a=UpdateActive&Id=<?= $value->sendcontact_id ?>" class="btn btn-secondary">Close</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
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
            </div>
        </div>
        <?php
        include_once('./View/Admin/Share/Footer.php');
        ?>
        <?php
        include 'asset/Scripts/ScriptFooter.php';
        ?>
        <!-- Modal -->

</body>

</html>