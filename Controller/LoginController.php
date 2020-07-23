<?php
require 'Model\LoginModel.php';
class LoginController
{
function LuuThem()
{
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    echo $user_email.$user_password;
    $loginModel = new LoginModel();
    $login=$loginModel->GetEmailPass($user_email,$user_password);
   
   
}
}