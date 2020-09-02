<?php

class Login
{
    public $user_id;
    public $user_email;
    public $user_password;

    public function __construct($user_id, $user_email, $user_password)
    {
        $this->user_id = $user_id;
        $this->user_email = $user_email;
        $this->user_password = $user_password;
    }
}

class LoginModel
{
    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }

    function GetAdmin(){
        
    }
    function GetEmailPass($user_email, $user_password)
    {
        $query = "SELECT
                        user_email,user_password 
                    FROM
                        useradmin
                    WHERE
                    user_email = '$user_email' and user_password='$user_password'";
        $result = $this->mysql->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new Login($data[0][0], $data[0][1], $data[0][2]);
        }
        return null;
    }
}
