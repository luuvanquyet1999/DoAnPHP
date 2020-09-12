<?php

class forgotpassword extends  Controller {
    function  View (){
        $meeseger = '';
        $data1 = 0;
        $data2 ='';
        $this->getviewweb('forgot_password',$data=[$meeseger,$data1,$data2]);
    }
    function failed(){
        $meeseger = 'Tên tài khoản hoặc email không tồn tại';
        $data1 = 0;
        $data2 ='';
        $regis = $this->getmodel("UserModel");
        if (isset($_SESSION["username"])) {
            header('Location:/doanphp/login');
        }
        if (isset($_POST["forgot"])){
            $user = $_POST["email"];
            if (!isset($_POST["password"])&&!isset($_POST["passwordrp"])){
                $getuser =$regis->GetEmailUser();
                foreach ($getuser as $value){
                    if ($user==$value[0]){
                        $meeseger='Tài khoản hợp lệ </br>Vui lòng nhập lại mật khẩu mới';
                        $data1 =1;
                        $data2=$value[0];
                    }
                    if($user==$value[1]){
                        $data1 =1;
                        $data2=$value[0];
                        $meeseger='Email hợp lệ </br>Vui lòng nhập lại mật khẩu mới';
                    }
                }
            }else{
                $password = $_POST["password"];
                $passwordrp =$_POST["passwordrp"];
                if ($password!=$passwordrp){
                    $meeseger= 'Mật khẩu và nhập lại mật khẩu phải giống nhau';
                }else{
                    $regis->UpdatePassword($password,$user);
                    $meeseger='Thành công';
                    $data1 =0;

                }
            }

        }
        $this->getviewweb('forgot_password',$data=[$meeseger,$data1,$data2]);
    }
}