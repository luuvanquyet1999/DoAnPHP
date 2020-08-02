<?php
<<<<<<< HEAD

class LoginController
=======
class AdminLoginController
>>>>>>> e7279a5f5e47999c4564ffc7b03207c7ba46b49d
{
    function View(){
        
        require SYSTEM_PATH."/View/Admin/login.php";
    }
    function Logout(){
        session_start(); 
        unset($_SESSION['username']);
         header('location: index.php?c=AdminLogin&a=View&r=1');
    }
}