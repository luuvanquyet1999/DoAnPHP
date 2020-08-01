<?php

class RegisterDefault
{
    public $user_username;
    public $user_email;
    public $user_password;

    public function __construct($user_username, $user_email, $user_password)
    {
        $this->user_username = $user_username;
        $this->user_email = $user_email;
        $this->user_password = $user_password;
    }
}

class RegisterDefaultModel
{
    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }
    function Insert(RegisterDefault $registerDefault)
    {
        $query = "INSERT INTO lph_user (UserName, UserNamepassword, UserNameEmail) VALUES ('$registerDefault->user_username','$registerDefault->user_password','$registerDefault->user_email')";
        $result = $this->mysql->query($query);
        return $result;
    }

}
