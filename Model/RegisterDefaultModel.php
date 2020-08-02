<?php

class RegisterDefault
{
    public $user_username;
    public $user_password;
    public $user_phone;
    public $user_email;

    public function __construct($user_username, $user_password,$user_phone, $user_email)
    {
        $this->user_username = $user_username;
        $this->user_email = $user_email;
        $this->user_password = $user_password;
        $this->user_phone = $user_phone;
    }
}

class RegisterDefaultModel
{
    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }
    function Insert(RegisterDefault $registerDefault)
    {
        $query = "INSERT INTO lph_customer(Username, Password,Phone,Email,Active) VALUES ('$registerDefault->user_username','$registerDefault->user_password','$registerDefault->user_phone','$registerDefault->user_email','1')";
        $result = $this->mysql->query($query);
        return $result;
    }
    function Check(RegisterDefault $registerDefault)
    {
        $query = "select * from lph_customer where Username='$registerDefault->user_username' or Email = '$registerDefault->user_email'";
        $result = $this->mysql->query($query);
        return $result;
    }

}
