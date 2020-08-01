<?php
class LoginDefaultController
{
    function View(){
        
        require SYSTEM_PATH."/View/website2/dangnhap.php";
    }
    function Logout(){
        session_start(); 
        unset($_SESSION['websiteusername']);
         header('location: index.php?c=websitecontact&a=view&s=success');
    }
}