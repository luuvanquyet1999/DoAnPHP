<?php
class RegisterDefaultController
{
    function View(){
        require SYSTEM_PATH."/View/Website/dangki.php";
    }
    function Register(){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $email = $_POST["email"];
        $result = $this->CategoryModel->Insert(new RegisterDefault($username, $password, $email));
        echo $username.$password.$confirmpassword.$email;
        // if ($result == true)
        //     header('location: index.php?c=Category&a=View&r=1');
        // else
        //     header('location: index.php?c=Category&a=View&r=0');
    }
}