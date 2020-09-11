<?php

class register extends Controller{
    function View (){
        $messager="";
        $this->getviewweb('register',$data=[ $messager]);
    }
    function failed(){
        $messager='';
        if (isset($_POST["register"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $passwordcf = $_POST["passwordcf"];
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $gender = $_POST["gender"];
            if ($username == "" || $password == "" || $passwordcf == "" || $fullname == "" || $gender == "") {
                $messager ="Vui lòng điền đầy đủ thông tin";
            }elseif($password==$passwordcf){
                $register= $this->getmodel('UserModel');
                $data1=$register->FindUser($username);
                if (!empty($data1)){
                   $messager='Tài khoản đã tồn tại';
                }else{
                    $image='';
                    if ($gender==0){
                        $image = 'public/img/bg-img/53.jpg';
                    }else{
                        $image='public/img/bg-img/55.jpg';
                    }
                    $register->InsertUser($username,$password,$fullname,$gender,$image,$email);
                    $_SESSION['username'] = $username;
                    $_SESSION['fullname'] = $fullname;
                    $_SESSION['imageuser'] = $image;
                    header('Location:/doanphp/WebsiteHome');
                }

            }else{
                $messager ='Mật khẩu và mật khẩu xác nhận không giống nhau';
            }

        }
        $this->getviewweb('register',$data=[ $messager]);
    }
}