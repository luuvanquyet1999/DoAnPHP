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

</head>

<body>
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
                            <h3>THÊM BÀI VIẾT</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container">
                        <div class="row">
                            <form action="index.php?c=AdminPost&a=SaveAdd" method="post" enctype="multipart/form-data" style="width:100%">
                                <div class="form-group row" hidden>
                                    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">ID</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly name="post_id" />
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label class="col-sm-2 col-form-label ">Loại bài viết</label>
                                    <div class="col-sm-10">
                                        <select name="category">
                                            <?php
                                            $mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
                                            $query = "SELECT * FROM lph_category WHERE Active =1";
                                            $result = $mysql->query($query);

                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<option value='" . $row[1] . "'>" . $row[1] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Tiêu đề</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="post_title" class="form-control" style="width:95%" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label ">Tóm tắt</label>
                                    <div class="col-sm-10">
                                        <textarea name="post_summary" class="form-control" rows="3" style="width:95%"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label ">Nội dung</label>
                                    <div class="col-sm-9">
                                        <div id="editor" name="editor" style="height: 300px; ">
                                        </div>
                                        <textarea id="txtContent" hidden name="post_content" class="form-control" rows="8" style="width:95%"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label ">Hình ảnh</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="post_image" />
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
                                        <button type="reset" value="submit" class="btn btn-info">Refresh</button>
                                        <button type="submit" onclick="getVaue()" value="submit" class="btn btn-success">Lưu</button>
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
</body>

</html>