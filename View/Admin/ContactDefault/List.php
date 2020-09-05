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
    <style>
        #box-modal {
            width: 864px;
            height: 250px;
            display: block;
            position: fixed;
            top: 20%;
            left: 19%;
            border-radius: 16px;
            animation-name: modal;
            animation-duration: 2s;
            z-index: 1000;
            background-color: #e0e0e0;
            outline: none;
        }

        #box-modal #btnTieptuc {
            position: absolute;
            right: 7%;
            bottom: 13%;
            background-color: azure;
            color: green;
            font-weight: bold;
        }

        @keyframes modal {
            from {
                top: 0%;
                left: 19%;
            }

            to {
                top: 20%;
                left: 19%;
            }
        }
    </style>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">

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
                                                                        <td><?= $value->sendcontact_fullname ?></td>
                                                                        <td><?= $value->sendcontact_email ?></td>
                                                                        <td>
                                                                            <a href="javascript:void(0)" class="btn btn-primary" id="<?= $value->sendcontact_id ?>" onclick="setHidden(this.id); checkid('<?= $value->sendcontact_fullname ?>','<?= $value->sendcontact_email ?>','<?= $value->sendcontact_content ?>')"><?= $value->hidden ?></a>
                                                                            <a hidden href="?c=Contact&a=UpdateActive&Id=<?= $value->sendcontact_id ?>" id="xoa<?= $value->sendcontact_id ?>">ẩn</a>
                                                                        </td>
                                                                    </tr>
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
        <script>
            function checkid(name, email, content) {
                document.getElementById('name').innerHTML = 'Họ và tên :' + name;
                document.getElementById('email').innerHTML = 'Email :' + email;
                document.getElementById('content').innerHTML = 'Nội dung :' + content;
            }

            function setHidden(id) {
                document.getElementById("box-modal").style.display = "block";
                document.getElementById("btnTieptuc").addEventListener("click", function() {
                    document.getElementById("box-modal").style.display = "none";
                    document.getElementById('xoa' + id).click();
                });
            }
        </script>
        <div id="box-modal" style="display: none;">
            <h3 class="text-center m-auto pt-3">CHI TIẾT LIÊN HỆ</h3>
            <div class="modal-body">
                <p id="name"></p>
                <p id="email"></p>
                <p id="content"></p>
            </div>
            <a id="btnTieptuc" href="javascript:void(0)" class="btn btn-primary">Đóng</a>
        </div>
</body>

</html>