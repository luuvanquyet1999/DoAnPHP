<?php

class Uploadpost extends Controller
{
    function View()
    {
        if (!isset($_SESSION["username"])) {
            header('Location:/doanphp/login');
        }
        //kiem tra roles
        $login = $this->getmodel('UserModel');
        $catelogy = $this->getmodel('CatelogyModel');
        $data2=$catelogy->GetCatelogyName();
        $data1 = $login->FindUser($_SESSION["username"]);
        foreach ($data1 as $value) {
            if ($value[3] == 0) {
                header('Location:/doanphp/website');
            }
        }
        $messeger = '';
        $this->getviewweb('upload-post', $data = [$messeger,$data2]);
    }

    function Failed()
    {
        $messeger = '';
        if (!isset($_SESSION["username"])) {
            header('Location:/doanphp/login');
        }
        //kiem tra roles
        $login = $this->getmodel('UserModel');
        $post = $this->getmodel('PostModel');
        $data1 = $login->FindUser($_SESSION["username"]);
        $catelogy = $this->getmodel('CatelogyModel');
        $data4=$catelogy->GetCatelogyName();
        foreach ($data1 as $value) {
            if ($value[3] == 0) {
                header('Location:/doanphp/website');
            }
        }
        if (isset($_POST["uploadpost"])) {
            if ($_FILES['postimg']['error'] > 0) {
                $messeger = 'Vui lòng chọn hình ảnh';
            } else {
                $postconcent = $_POST["summernote"];
                $posttitle = $_POST['posttitle'];
                $postcatelogy = $_POST['postcatelogy'];
                $postsummary = $_POST['postsummary'];
                $username = $_SESSION["username"];
                $data2 = $post->GetTitle($posttitle);
                if ($data2==0) {
                    $file_name = $_FILES['postimg']['name'];
                    $size = $_FILES['postimg']['size'];
                    //lấy đường dẫn tạm lưu nội dung file:
                    $file_tmp = $_FILES['postimg']['tmp_name'];
                    //tạo đường dẫn lưu file trên host:
                    $path = "fileUpload/Post/" . $file_name;
                    $postimg = $path;
                    //upload nội dung file từ đường dẫn tạm vào đường dẫn vừa tạo:
                    move_uploaded_file($file_tmp, $path);
                    $postlink = $this->makeLink($posttitle);
                    $data3 = $post->InserPost($posttitle, $postsummary, $postconcent, $postimg, $postcatelogy, $username,$postlink);
                    if ($data3 == true) {
                        $messeger='Upload thành công';
                        header("location:/doanphp/uploadpost");
                    } else {
                        $messeger = 'Upload Không Thành Công';
                    }
                } elseif($data2==1){
                    $messeger = "Bài viết đã tồn tại";
                }
            }

        }
        $this->getviewweb('upload-post', $data = [$messeger,$data4]);
    }
}