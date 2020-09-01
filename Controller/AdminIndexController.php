<?php
require SYSTEM_PATH . "/Model/AdminIndexModel.php";
class AdminIndexController
{
    private $indexModel;
    function __construct()
    {
        $this->indexModel = new AdminIndexModel();
    }
    function View()
    {
        require SYSTEM_PATH . "/View/Admin/login.php";
    }
    function register()
    {
        require_once SYSTEM_PATH . "/View/Admin/register.php";
    }
    function trangchu()
    {
        session_start();
        if (isset($_SESSION['username'])) {
            $user = $_SESSION['username'];
            // $totalMember = $this ->adminModel ->CountMember();
            // $totalFeedBack = $this ->feedbackModel ->CountFeedBack();
            // $totalProduct = $this ->productModel ->CountProduct();
            require_once SYSTEM_PATH . "/View/Admin/Index.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
        //require_once SYSTEM_PATH . "/View/Admin/Index.php";
    }
    function login()
    {
        session_start();
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $result = $this->indexModel->loginRecord($user, $pass);
        if ($result == 0) {
            header('location:index.php?c=AdminIndex&a=view');
        } else {
            header('location:index.php?c=AdminIndex&a=trangchu');
            $_SESSION['username'] = $user;
        }
    }
    function logout()
    {
        session_start();
        unset($_SESSION['username']);
        session_destroy();
        require_once SYSTEM_PATH . "/View/Admin/login.php";
    }
    function SignUp()
    {
        // $id = $_POST["id"];
        // $fullname = $_POST["fullname"];
        // $user = $_POST["user"];
        // $email = $_POST["email"];
        // $pass = $_POST["pass"];
        // $confimpass = $_POST["confimpass"];
        // $dateofbirth = $_POST["dateofbirth"];
        // $gioitinh = $_POST["gioitinh"];
        // // echo $fullname.$user.$pass.$confimpass.$dateofbirth.$gioitinh;
        // // die();
        // if ($pass == $confimpass) {
        //     $result = $this->adminModel->registerRecord(new Admin($id, $user, $pass, $fullname, $gioitinh, $email, $dateofbirth));
        //     if ($result == true) {
        //         header('location:index.php?c=AdminIndex&a=View');
        //     } else {
        //         header('location:index.php?c=AdminIndex&a=register');
        //     }
        // } else {
        //     header('location:index.php?c=AdminIndex&a=register');
        // }
        //require SYSTEM_PATH . "/View/Admin/register.php";
    }
    function Profile()
    {
        session_start();
        if (isset($_SESSION['username'])) {
            $user = $_SESSION['username'];
            $result = $this->indexModel->UpdateProfile($user);
            die();
            require_once SYSTEM_PATH . "/View/Admin/profile.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
}
