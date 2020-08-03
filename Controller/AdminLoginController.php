<?php
class AdminLoginController
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