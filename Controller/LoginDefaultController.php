<?php
class LoginDefaultController
{
    function View(){
        
        require SYSTEM_PATH."/View/website/dangnhap.php";
    }
    function Logout(){
        session_start(); 
        unset($_SESSION['username']);
         header('location: index.php?c=LoginDefault&a=View&r=1');
    }
}