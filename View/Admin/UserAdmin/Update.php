<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator | Tài khoản quản trị viên</title>
    <?php
    include 'asset/Scripts/ScriptHeader.php';
    ?>
    <script src="asset/assets/libs/jquery/dist/jquery.min.js"></script>
</head>

<body>
    <style>
        .btn-chang {
            padding: 5px;
            border: 0;
            margin-left: 2px;
            margin-right: 2px;
            background-color: transparent;
        }
    </style>
    <script>
        function showPreview1(input) {
            if (input.files && input.files[0]) {
                var filerdr = new FileReader();
                filerdr.onload = function(e) {
                    $('#imgPreview1').attr('src', e.target.result);
                    document.getElementById('avatars').click()
                }
                filerdr.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        window.onload = function() {
            var a = document.getElementById("gioitinh").value;
            if (a == "1") {
                document.getElementById("female").checked = true;
            } else {
                document.getElementById("male").checked = true;
            }
        };
    </script>
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
                            <h3>TÀI KHOẢN QUẢN TRỊ VIÊN</h3>
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
                                            <div class="col-md-8 ">
                                                <form action="index.php?c=UserAdmin&a=SaveUpdate" method="post" enctype="multipart/form-data" style="width:100%">
                                                    <div class="form-group" hidden>
                                                        <label for="exampleInputEmail1">id</label>
                                                        <input type="text" value="<?= $UserAdmin->UserAdmin_id ?>" readonly name="UserAdmin_id" class="form-control" name="" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">UserName</label>
                                                        <input type="text" value="<?= $UserAdmin->UserAdmin_username ?>" readonly name="UserAdmin_username" class="form-control" name="" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $UserAdmin->UserAdmin_password ?>" name="UserAdmin_password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">FullName</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $UserAdmin->UserAdmin_fullname ?>" name="UserAdmin_fullname">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $UserAdmin->UserAdmin_email ?>" name="UserAdmin_email">
                                                    </div>
                                                    <div class="form-group gender">
                                                        <label for="exampleInputEmail1" class="mr-3">Gender</label>
                                                        <input type="radio" id="male" name="gender" value="0">
                                                        <label for="male" class="mr-4">Nữ</label>
                                                        <input type="radio" id="female" name="gender" value="1">
                                                        <label for="female">Nam</label>
                                                        <input hidden type="text" name="gioitinh" id="gioitinh" value="<?= $UserAdmin->UserAdmin_gender ?>">
                                                    </div>
                                                    <div class="form-group" hidden>
                                                        <label for="exampleInputEmail1">Active</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $UserAdmin->Active ?>" name="Active">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">DateOfbirth</label>
                                                        <input type="date" min="1990-01-01" max="2020-01-01" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $UserAdmin->UserAdmin_dateofbirth ?>" name="UserAdmin_dateofbirth">
                                                    </div>
                                                    <div class="form-group row">
                                                        <button hidden type="submit" class="btn btn-success">Update</button>
                                                        <a href="index.php?c=UserAdmin&a=View" class="btn btn-warning">Cancel</a>
                                                    </div>

                                                </form>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card card-hover text-center" style="background: transparent;">
                                                    <form method="post" enctype="multipart/form-data" action="?c=UserAdmin&a=updateAvatar">
                                                        <div class="card-img" id="up1">
                                                            <input type="file" hidden class="form-control-file" name="image" onchange="showPreview1(this)">
                                                            <!-- <button type="button" class="btn-chang" onclick="clickavatar1()"> -->
                                                                <img id="imgPreview1" src="<?= $UserAdmin->image ?>" style="max-width: 100%; height: 200px" />
                                                            <!-- </button> -->
                                                            <input hidden type="submit" name="image" id="avatars">
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
            </div>
        </div>
        
        <?php
        include_once('./View/Admin/Share/Footer.php');
        ?>
        <?php
        include 'asset/Scripts/ScriptFooter.php';
        ?>
        <script type="text/javascript">
            function clickavatar1() {
                $("#up1 input[type=file]").click();
            }
        </script>
        <script>
            $(document).ready(function() {
                $('.gender input[type="radio"]').click(function() {
                    var selectedOption = $("input:radio[name=gender]:checked").val()
                    document.getElementById("gioitinh").value = selectedOption;
                });
            });
        </script>
</body>

</html>