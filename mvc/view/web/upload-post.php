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
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/40.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Upload Bài Viết</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo Home; ?>website""><i class="fa fa-home"
                                                                                             aria-hidden="true"></i>
                            Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Upload Bài Viết</li>
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
                        <h5>Upload Bài Viết</h5>
                    </div>

                    <div class="video-info mt-30">
                        <form action="<?php echo Home;?>uploadpost/failed" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="upload-file">Tiêu đề bài viết</label>
                                <input name='posttitle'type="text" class="form-control" name="video-name" required>
                            </div>
                            <div class="form-group">
                                <label >Thể Loại</label>
                                <select name="postcatelogy" class="form-control" required>
                                    <?php
                                    $stt = 0;
                                    foreach ($data[1] as $value) {
                                    ?>
                                        <option value="<?=$value[0] ?>"><?=$value[0] ?></option>

                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="upload-file">Tóm tắt bài viết*</label>
                                <input  type="text" name="postsummary" class="form-control"required >
                            </div>
                            <div class="form-group">
                                <label for="upload-file">Nội dung</label>
                                <textarea name="summernote" id="summernote" class="form-control" cols="30" rows="10"required></textarea>
                            </div>
                            <p class="text-danger"><?=$data[0]?></p>
                            <div class="form-group">
                                <label for="upload-file">Upload Hình Ảnh</label>
                                <input type="file" name="postimg" class="form-control-file">
                            </div>
                            <button type="submit" name="uploadpost" class="btn mag-btn mt-30"><i class="fa fa-cloud-upload"></i> Upload
                                bài viết
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once './mvc/view/pages/footer.php'; ?>
<?php require_once './mvc/view/script.php' ?>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,
            width :  // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true                  // set focus to editable area after initializing summernote
        });
    });
</script>
</body>

</html>
