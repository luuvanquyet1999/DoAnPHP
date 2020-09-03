<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator | Thành viên nhóm</title>
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
                            <h3>CHỈNH SỬA THÀNH VIÊN NHÓM</h3>
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
                                            <form action="index.php?c=AdminMember&a=SaveUpdate" method="post" enctype="multipart/form-data" style="width:100%">
                                                <div class="form-group row" hidden>
                                                    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">ID</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly name="member_id" value="<?= $member->member_id ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Tên thành viên</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="member_name" class="form-control" value="<?= $member->member_name ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="colFormLabel" class="col-sm-2 col-form-label ">Nghề nghiệp</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="member_job" class="form-control" value="<?= $member->member_job ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-2">
                                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Link Facebook</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="member_facebook" class="form-control" value="<?= $member->member_facebook ?>"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="colFormLabel" class="col-sm-2 col-form-label ">Link Instagram</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="member_instagram" class="form-control" value="<?= $member->member_instagram ?>"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-2">
                                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Link Twitter</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="member_twitter" class="form-control" value="<?= $member->member_twitter ?>"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-2">
                                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Mô tả</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="member_desc" rows="3" class="form-control" value="<?= $member->member_desc ?>"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="colFormLabel" class="col-sm-2 col-form-label ">Avatar</label>
                                                    <div class="col-sm-10">
                                                        <div class="custom-file">
                                                            <input type="file" name="member_avatar" class="custom-file-input" id="exampleInputFile">
                                                            <label class="custom-file-label" for="exampleInputFile"><?= $member->member_avatar ?></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="action">
                                                        <button type="submit" value="submit" class="btn btn-success">Update</button>
                                                        <a href="index.php?c=AdminMember&a=View" class="btn btn-warning">Cancel</a>
                                                    </div>
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
        <?php
        include_once('./View/Admin/Share/Footer.php');
        ?>
        <?php
        include 'asset/Scripts/ScriptFooter.php';
        ?>
</body>

</html>