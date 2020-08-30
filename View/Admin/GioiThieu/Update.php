<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator | Giới thiệu</title>
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
                            <h3>CHỈNH SỬA GIỚI THIỆU</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container">
                        <div class="row">
                            <form action="index.php?c=AdminGioiThieu&a=SaveUpdate" method="post" enctype="multipart/form-data" style="width:100%" class="mt-1">
                                <div class="form-group row" hidden>
                                    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">ID</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $gioithieu->intro_id ?>" readonly name="intro_id" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">Tiêu đề</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $gioithieu->title ?>" name="title" class="form-control" style="width:95%" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label ">Tóm tắt</label>
                                    <div class="col-sm-10">
                                        <textarea name="summary" class="form-control" rows="5" style="width:95%"><?= $gioithieu->summary ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label ">Nội dung</label>
                                    <div class="col-sm-10">
                                        <div id="editor" name="editor" style="height: 300px; ">
                                            <?= $gioithieu->content ?>
                                        </div>
                                        <textarea id="txtContent" hidden name="content" class="form-control" rows="8" style="width:95%"></textarea> -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label ">Hình ảnh</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile"><?= $gioithieu->image ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="action">
                                        <button type="submit" onclick="getVaue()" value="submit" class="btn btn-primary">Update</button>
                                        <a href="index.php?c=AdminGioiThieu&a=View" class="btn btn-warning">Cancel</a>
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