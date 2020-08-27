<?php
class LoginDefaultController
{
    function Index(){
        require SYSTEM_PATH."/index.html";
    }
    function View(){
        
        require SYSTEM_PATH."/View/website/dangnhap.php";
    }
    function Logout(){
        session_start(); 
        unset($_SESSION['websiteusername']);
        header('location: index.php?c=WebsiteDefault&a=view&s=success');
    }
}