<?php
include_once './mvc/view/config.php';
include_once './mvc/view/setlink.php';
include_once './mvc/view/checkSeseson.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fuho Fc &amp; Upload Bài viết</title>
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
<?php require_once './mvc/view/pages/header.php'; ?>

<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo Home; ?>website""><i class="fa fa-home"
                                                                                             aria-hidden="true"></i>
                            Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thông tin cá nhân</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Video Submit Area Start ##### -->
<div class="video-submit-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <!-- Video Submit Content -->
                <div class="video-submit-content mb-50 p-30 bg-white box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Thông tin cá nhân</h5>
                    </div>

                    <div class="video-info mt-30">
                            <div class="table-responsive">
                                <div class="container emp-profile">
                                    <?php
                                    foreach ($data[0] as $value) {
                                    ?>
                                    <form action="<?php echo Home;?>profile/image" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-4">

                                                <div class="profile-img">
                                                    <img src="<?=$value[5]?>" alt=""/>
                                                    <div class="file btn btn-lg btn-primary">
                                                        Nhấn để chọn
                                                        <input type="file" name="postimg" class="form-control-file">
                                                    </div>

                                                </div>
                                                <button type="submit" name="uploadpost" class="btn mag-btn">
                                                        Cập nhật
                                                </button>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="profile-head">
                                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label><strong>Họ và tên:</strong></label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <p style="color: #ed3974;"><?=$value[4]?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label><strong>Email:</strong></label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <p style="color: #ed3974;"><?=$value[6]?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label><strong>Giới Tính</strong></label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <p style="color: #ed3974;"><?php if ($value[7]==1){
                                                                    echo 'Nam';
                                                                    }else{
                                                                    echo 'Nữ';
                                                                    }?></p>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            <div class="col-md-1">
                                                 <a type="button" title="Chỉnh sửa" class="btn" data-toggle="modal" data-target="#exampleModalLong">
                                                        <i style="color: #ed3974;" class="fa fa-edit"></i>
                                                    </a>
                                            </div>
                                        </div>
                                    </form>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Cập nhật thông tin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo Home;?>profile/image" method="post" >
            <?php
            foreach ($data[0] as $value) {
            ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="upload-file">Họ và tên</label>
                    <input name='fullname'type="text" class="form-control" name="video-name" value="<?=$value[4]?>" required>
                </div>
                <div class="form-group">
                    <label for="upload-file">Email</label>
                    <input name='email'type="text" class="form-control" name="video-name" value="<?=$value[6]?>" required>
                </div>
                <div class="form-group">
                    <select  name="gender" class="form-control" required>
                        <option value="1">Nam</option>
                        <option value="0">Nữ</option>
                    </select>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn mag-btn" data-dismiss="modal">Đóng</button>
                <button type="submit" name="updatett" class="btn mag-btn">Đồng ý</button>
            </div>
                <?php
            }
            ?>
            </form>
        </div>
    </div>
</div>

<?php require_once './mvc/view/pages/footer.php'; ?>
<?php require_once './mvc/view/script.php' ?>
</body>
</html>