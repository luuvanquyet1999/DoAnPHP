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
    <?php include_once  './mvc/view/link.php'?>
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
<!-- ##### Header Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(<?php echo CSSDIR?>img/bg-img/40.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Đăng ký</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Login Area Start ##### -->
<div class="mag-login-area py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="login-content bg-white p-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Tạo tài khoản </h5>
                    </div>

                    <form action="<?php echo Home;?>register/failed" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username"  placeholder="Email or User Name" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password"required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="passwordcf" placeholder="Nhập lại Password"required>
                        </div>
                        <div class="form-group">
                            <select  name="gender" class="form-control" required>
                                <option value="1">Nam</option>
                                <option value="0">Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="fullname" placeholder="Full name"required>
                        </div>

                        <p class="text-danger"><?=$data[0]?></p>
                        <button  name="register" type="submit" class="btn mag-btn mt-30">Đăng ký</button>
                        <p class="mt-30"><a  href="<?php echo Home;?>login">Bạn đã có tài khoản? Đăng nhập tại đây</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once './mvc/view/script.php'?>
</body>

</html>

