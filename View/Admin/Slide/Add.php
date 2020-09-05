<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator | Slide</title>
    <?php
    include 'asset/Scripts/ScriptHeader.php';
    ?>

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
                }
                filerdr.readAsDataURL(input.files[0]);
            }
        }
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
                            <h3>THÊM SLIDE</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container">
                        <div class="row">
                            <form action="index.php?c=AdminSlide&a=SaveAdd" method="post" enctype="multipart/form-data">
                                <div class="form-group row" hidden>
                                    <label for="colFormLabel" class="col-sm-2 col-form-label ">ID</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly name="slide_id" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label ">Hình ảnh</label>
                                    <div class="col-sm-9" id="up1">
                                        <input type="file" hidden name="slide_image" onchange="showPreview1(this)" />
                                        <button type="button" class="btn-chang" onclick="clickavatar1()">
                                            <img id="imgPreview1" src="images/up-img.png" style="max-width: 100%; height: 200px" />
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group row" hidden>
                                    <label for="colFormLabel" class="col-sm-2 col-form-label ">Active</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="Active" value="1" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="action">
                                        <button type="reset" value="submit" class="btn btn-info">Refresh</button>
                                        <button type="submit" value="submit" class="btn btn-success">Lưu</button>
                                        <a href="index.php?c=AdminSlide&a=View" class="btn btn-warning">Cancel</a>
                                    </div>
                                </div>
                            </form>
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
</body>

</html>