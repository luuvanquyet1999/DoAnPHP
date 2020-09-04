<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="asset/assets/images/favicon.png">
    <title>REGISTER</title>
    <!-- Custom CSS -->
    <link href="asset/dist/css/style.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary mt-0">
                <div>
                    <div class="text-center p-b-20">
                        <span class="db"><img src="asset/assets/images/logo.png" alt="logo" /></span>
                    </div>
                    <form class="form-horizontal m-t-20 " method="post" action="index.php?c=AdminIndex&a=SignUp">
                        <p>
                            <?php
                            if (isset($_GET['r'])) {
                                if ($_GET['r'] == 1) {
                                    echo "<script type='text/javascript'>alert('Success. Xin mời đăng nhập vào hệ thống!');</script>";
                                } else {
                                    echo "<script type='text/javascript'>alert('Error. Dữ liệu nhập không đúng hoặc đã tồn tại username!');</script>";
                                }
                            }
                            ?>
                        </p>
                        <div class="row p-b-30">
                            <div class="col-12">
                                <input hidden type="text" name="id" class="form-control form-control-lg" readonly>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" autocomplete="off" name="fullname" class="form-control form-control-lg" placeholder="Full name" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" autocomplete="off" name="user" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                    </div>
                                    <input type="email" autocomplete="off" name="email" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" autocomplete="off" name="pass" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" autocomplete="off" name="confimpass" class="form-control form-control-lg" placeholder=" Confirm Password" aria-label="Password" aria-describedby="basic-addon1" required>
                                </div>
                                <span class="text-light">Date of Birth:</span>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="date" name="dateofbirth" class="form-control form-control-lg" placeholder="DateOfBirth" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="input-group text-light gender">
                                    <span>Gender:
                                        <input type="radio" id="male" name="gender" value="0">
                                        <label for="male" class="mr-4">Nữ</label>
                                        <input type="radio" id="female" name="gender" value="1">
                                        <label for="female">Nam</label>
                                    </span>
                                    <input hidden type="text" value="0" name="gioitinh" id="gioitinh">
                                </div>
                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-block btn-lg btn-info" type="submit">Sign Up</button>
                                    </div>
                                    <div class="p-t-20">
                                        <a class="btn btn-success btn-block btn-lg" href="?c=AdminIndex&a=View"> Sign In</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="asset/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="asset/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="asset/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();


        $(document).ready(function() {
            $('.gender input[type="radio"]').click(function() {
                var selectedOption = $("input:radio[name=gender]:checked").val()
                document.getElementById("gioitinh").value = selectedOption;
            });
        });
    </script>

</body>

</html>