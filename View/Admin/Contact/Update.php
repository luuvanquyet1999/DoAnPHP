<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator | Thông tin</title>
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
                            <h3>CHỈNH SỬA THÔNG TIN</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container">
                        <div class="row">
                            <form action="index.php?c=Contact&a=SaveUpdate" method="post" style="width:100%">
                                <div class="form-group row" hidden>
                                    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">ID</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $contact->contact_id ?>" readonly name="contact_id" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $contact->contact_email ?>" name="contact_email" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $contact->contact_phone ?>" name="contact_phone" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">Address</label>
                                    <div class="col-sm-10">
                                        <td><input type="text" value="<?= $contact->contact_address ?>" name="contact_address" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row" hidden>
                                    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-lg">Active</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $contact->Active ?>" name="contact_Active" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="action">
                                        <button type="submit" value="submit" class="btn btn-success">Update</button>
                                        <a href="index.php?c=Contact&a=View" class="btn btn-warning">Cancel</a>
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