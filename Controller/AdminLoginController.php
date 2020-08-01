<?php
class LoginController
{
    function View(){
        
        require SYSTEM_PATH."/View/Admin/login.php";
    }
    function Logout(){
        session_start(); 
        unset($_SESSION['username']);
         header('location: index.php?c=Login&a=View&r=1');
    }
}