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
            $gender = $_POST["gender"];
            if ($username == "" || $password == "" || $passwordcf == "" || $fullname == "" || $gender == "") {
                $messager ="Vui lòng điền đầy đủ thông tin";
            }elseif($password==$passwordcf){
                $register= $this->getmodel('UserModel');
                $data1=$register->FindUser($username);
                if (!empty($data1)){
                   $messager='Tài khoản đã tồn tại';
                }else{
                    $register->InsertUser($username,$password,$fullname,$gender);
                    $_SESSION['username'] = $username;
                    header('Location:/doanphp/website');
                }

            }else{
                $messager ='Mật khẩu và mật khẩu xác nhận không giống nhau';
            }

        }
        $this->getviewweb('register',$data=[ $messager]);
    }
}