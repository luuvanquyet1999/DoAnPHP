<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator | Bình luận</title>
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
                            <h3>QUẢN LÝ BÌNH LUẬN</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container">
                        <form action="?c=AdminPost&a=UpdateHot" method="post">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <!--<a href="?c=AdminComment&a=View" class="btn btn-warning mt-2">Quay lại</a>
                                             <input type="submit" name="duyet" class="btn btn-primary mt-2" value="Bài viết phổ biến" />
                                            <input type="submit" name="koduyet" class="btn btn-danger mt-2" value="Xóa khỏi bài viết phổ biến" /> -->
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div class="row" style="width:100%">
                                                <div class="col-sm-12">
                                                    <div class="card-body">
                                                        <p class="pl-3" style="color: red">
                                                            <?php
                                                            if (isset($_GET['r'])) {
                                                                if ($_GET['r'] == 1) {
                                                                    echo "<script type='text/javascript'>alert('Success');</script>";
                                                                } else if ($_GET['r'] == 2) {
                                                                    echo "<script type='text/javascript'>Swal.fire({";
                                                                    echo "icon: 'error',";
                                                                    echo "title: 'Bạn chưa chọn đối tượng nào!!',";
                                                                    echo "text: 'Vui lòng chọn đối tượng!',";
                                                                    echo "})</script>";
                                                                } else {
                                                                    echo "<script type='text/javascript'>alert('Error');</script>";
                                                                }
                                                            }
                                                            ?>
                                                        </p>
                                                        <table id="zero_config" class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr class="text-center">
                                                                    <!-- <th></th> -->
                                                                    <th>STT</th>
                                                                    <th>Tiêu đề</th>
                                                                    <th>Tổng bình luận</th>
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
                                                                        <!-- <td class="text-center"><input type="checkbox" name='array[]' value="<?= $value->post_id ?>"></td> -->
                                                                        <td><?= $stt++ ?></td>
                                                                        <td><?= $value->post_title ?></td>
                                                                        <td><?= $value->count ?></td>
                                                                        <td>
                                                                            <a href="?c=AdminComment&a=Detail&ID=<?= $value->post_id ?>" class="btn btn-primary"><i class="fas fa-eye" style="font-size: 25px;"></i></a>
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
                        </form>
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