<form action="index.php?c=Contact&a=SendContact" method="post">
    <p>
        <?php
        if (isset($_GET['r'])) {
            if ($_GET['r'] == 1) {
                echo "<script type='text/javascript'>alert('Đã gửi liên hệ! Xin cảm ơn');</script>";
            } else {
                echo "<script type='text/javascript'>alert('Đã có lỗi xảy ra trong quá trình xử lý, vui lòng thử lại sau');</script>";
            }
        }
        ?>
    </p>
    <div class="row">
        <div class="col-lg-6">
            <input type="text" placeholder="Your name" name="fullname">
        </div>
        <div class="col-lg-6">
            <input type="text" placeholder="Your Email" name="email">
        </div>
        <div class="col-lg-12 text-center">
            <textarea placeholder="Your message" name="content"></textarea>
            <button type="submit" value="button">Send Message</button>
        </div>
    </div>
</form>