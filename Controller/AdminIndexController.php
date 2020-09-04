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
        if (isset($_SESSION['username'])) {
            $user = $_SESSION['username'];
            // $totalMember = $this ->adminModel ->CountMember();
            // $totalFeedBack = $this ->feedbackModel ->CountFeedBack();
            // $totalProduct = $this ->productModel ->CountProduct();
            require_once SYSTEM_PATH . "/View/Admin/index.php";
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
            header('location:index.php?c=AdminIndex&a=View');
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
        $id = $_POST["id"];
        $fullName = $_POST["fullname"];
        $userName = $_POST["user"];
        $email = $_POST["email"];
        $passWord = $_POST["pass"];
        $confimpass = $_POST["confimpass"];
        $DateofBirth = $_POST["dateofbirth"];
        $genDer = $_POST["gioitinh"];
        // echo $fullname.$user.$pass.$confimpass.$dateofbirth.$gioitinh.$email;
        // die();
        if ($passWord == $confimpass) {
            $result = $this->indexModel->registerRecord(new Admin($id, $userName, $passWord, $fullName, $genDer, $email, $DateofBirth));
            if ($result == true) {
                header('location:index.php?c=AdminIndex&a=View&r=2');
            } else {
                header('location:index.php?c=AdminIndex&a=register&r=0');
            }
        } else {
            header('location:index.php?c=AdminIndex&a=register&r=0');
        }
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
