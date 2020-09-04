<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator | Bài viết</title>
    <?php
    include 'asset/Scripts/ScriptHeader.php';
    ?>
    <link rel="stylesheet" href="asset/summernote/summernote-bs4.css">
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
        function getDate() {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();
            if (dd < 10) {
                dd = '0' + dd
            }
            if (mm < 10) {
                mm = '0' + mm
            }
            today = yyyy + '-' + mm + '-' + dd;
            console.log(today);
            document.getElementById("date").value = today;
        }


        window.onload = function() {
            getDate();
            var a = document.getElementById("cate").value;
            var sel = document.getElementById("box1");
            sel.value = a;
        };
    </script>
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
                            <h3>CHỈNH SỬA BÀI VIẾT</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container">
                        <div class="row">
                            <form action="index.php?c=AdminPost&a=SaveUpdate" method="post" enctype="multipart/form-data" style="width:100%">
                                <div class="form-group row" hidden>
                                    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">ID</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly name="post_id" value="<?= $post->post_id ?>" />
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label class="col-sm-2 col-form-label ">Loại bài viết</label>
                                    <div class="col-sm-10">
                                        <select name="category" id="box1" class="form-control" style="width:95%">
                                            <?php
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<option value='" . $row[1] . "'>" . $row[1] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <input hidden type="text" id="cate" value="<?= $post->category_name ?>">
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Tiêu đề</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="post_title" class="form-control" value="<?= $post->post_title ?>" style="width:95%" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label ">Tóm tắt</label>
                                    <div class="col-sm-10">
                                        <textarea name="post_summary" class="form-control" rows="3" style="width:95%"><?= $post->post_summary ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label ">Nội dung</label>
                                    <div class="col-sm-10">
                                        <textarea name="content" class="textarea form-control" placeholder="Place some text here" style="width:95%"><?= $post->post_content ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label ">Hình ảnh</label>
                                    <div class="col-sm-10" id="up1">
                                        <input type="file" hidden class="form-control-file" name="post_image" onchange="showPreview1(this)">
                                        <button type="button" class="btn-chang" onclick="clickavatar1()">
                                            <img id="imgPreview1" src="<?= $post->post_image ?>" style="max-width: 100%; height: 200px" />
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group row" hidden>
                                    <label for="colFormLabel" class="col-sm-2 col-form-label ">ngày</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="createday" onload="getDate()" class="form-control" id="date" />
                                    </div>
                                </div>
                                <div class="form-group row" hidden>
                                    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">active</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="Active" value="1" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="action">
                                        <button type="submit" value="submit" class="btn btn-success">Update</button>
                                        <a href="index.php?c=AdminPost&a=View" class="btn btn-warning">Cancel</a>
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
        <script src="asset/summernote/summernote-bs4.min.js"></script>
        <script>
            $(function() {
                // Summernote
                $('.textarea').summernote()
            })
        </script>
        <script type="text/javascript">
            function clickavatar1() {
                $("#up1 input[type=file]").click();
            }
        </script>
</body>

</html>