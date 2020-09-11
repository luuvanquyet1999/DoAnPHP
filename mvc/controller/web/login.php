<?php


class login extends Controller
{
    function View()
    {
            if (isset($_SERVER['HTTP_REFERER'])){
                $_SESSION['redirect_url'] = $_SERVER['HTTP_REFERER'];
            }else{
                $_SESSION['redirect_url']=null;
            }
        if (isset($_SESSION["username"])){
            header('Location:/doanphp/WebsiteHome');
        }
        $messager="";
        $this->getviewweb('login',$data=[ $messager]);
    }
    function Failed(){
        $messager="";
        // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
        if (isset($_POST["login"])) {
            // lấy thông tin người dùng
            $username = $_POST["username"];
            $password = $_POST["password"];
            //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
            //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
            $username = strip_tags($username);
            $username = addslashes($username);
            $password = strip_tags($password);
            $password = addslashes($password);
            if ($username == "" || $password == "") {
                $messager = "Username và password không được để trống";
            }else{
                $login= $this->getmodel('UserModel');
                $data1=$login->FindUser($username);
                foreach ($data1 as $value ){
                    if ($username==$value[0]&&$password!=$value[1]){
                        $messager="Password không chính xác";
                    }
                   if ($username==$value[0]&&$password==$value[1]){
                       if ($value[2]==1){
                           $_SESSION['username'] = $username;
                           $_SESSION['fullname'] = $value[4];
                           if (isset($_SESSION['redirect_url'])){
                               header('Location:'.$_SESSION['redirect_url']);
                           }else{
                               header('Location:/doanphp/WebsiteHome');
                           }
                       }else{
                           $messager="Tài khoản đã bị khóa .";
                       }
                   }
                }
            }
        }
        $this->getviewweb('login',$data=[$messager]);
    }
}