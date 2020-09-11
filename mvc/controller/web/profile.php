<?php
class profile extends Controller {
    function View(){
        if (!isset($_SESSION["username"])) {
            header('Location:/doanphp/login');
        }
           $user =$this->getmodel('UserModel');
           $data1 = $user->FindUser($_SESSION['username']);
        $this->getviewweb('profile',$data=[$data1]);
    }
    function image(){
        $user =$this->getmodel('UserModel');
        if (!isset($_SESSION["username"])) {
            header('Location:/doanphp/login');

        }


        if (isset($_POST["uploadpost"])) {
            if ($_FILES['postimg']['error'] > 0) {
//                header("location:/doanphp/profile");
            } else {
                $file_name = $_FILES['postimg']['name'];
                $size = $_FILES['postimg']['size'];
                $file_tmp = $_FILES['postimg']['tmp_name'];
                $path = "public/img/bg-img/" . $file_name;
                $image = $path;
                $username= $_SESSION["username"];
                move_uploaded_file($file_tmp, $path);
                 $update =$user->Update($image,$username);
                $_SESSION['imageuser'] = $image;
                header("location:/doanphp/profile");
            }
        }else{
            if (isset($_POST["updatett"])){
                $fullname = $_POST["fullname"];
                $email = $_POST["email"];
                $gender = $_POST["gender"];
                $username= $_SESSION["username"];
                $update =$user->UpdateTT($fullname,$gender,$email,$username);
                $_SESSION['fullname'] = $fullname;
                header("location:/doanphp/profile");
            }
        }
    }
}