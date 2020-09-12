<?php
include_once './mvc/view/config.php';
include_once './mvc/view/setlink.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fuho Fc &amp; Login</title>
    <?php include_once './mvc/view/link.php' ?>
</head>

<body>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<?php require_once './mvc/view/pages/header.php'; ?>

<section class="breadcrumb-area bg-img bg-overlay"
         style="background-image: url(<?php echo CSSDIR ?>img/bg-img/40.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Quên mật khẩu</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="mag-login-area py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="login-content bg-white p-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Chúng tôi sẵn sàng hỗ trợ bạn!</h5>
                    </div>

                    <form action="<?php echo Home; ?>forgotpassword/failed" method="post">

                        <?php
                            if ($data[1]==0){
                                echo '<div class="form-group">
                                    <label>Vui lòng nhập email hoặc tên đăng nhập</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email or User Name">
                                </div>';
                            }elseif ($data[1]==1){
                                echo '
                                <div class="form-group" type="hidden">
                                    <label>Tên đăng nhập</label>
                                    <input type="text" class="form-control" name="email" value="'.$data[2].'" placeholder="Email or User Name" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu mới</label>
                                    <input type="text" class="form-control" name="password" placeholder="Password New">
                                </div>
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu mới</label>
                                    <input type="text" class="form-control" name="passwordrp"  placeholder="Enter Password New" >
                                </div>
                                ';
                            }

                          ?>

                        <p class="text-danger"><?= $data[0] ?></p>
                        <button name="forgot" type="submit" class="btn mag-btn mt-30">Xác nhận</button>
                        <p class="mt-30"><a style="color: #ed3974;" href="<?php echo Home; ?>login">Đã có tài khoản
                                !! Đăng nhập lại đây</a></p>
                        <p class="mt-30"><a style="color: #ed3974;" href="<?php echo Home; ?>register">Bạn chưa có
                                tài khoản !! Đăng kí tại đây</a></p>
                        <p class="mt-30"><a
                                    href="<?php echo Home; ?>contact">Nếu không thể lấy tài
                                khoản hãy liên hệ với chung tôi tại dây</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once './mvc/view/script.php' ?>
</body>

</html>
