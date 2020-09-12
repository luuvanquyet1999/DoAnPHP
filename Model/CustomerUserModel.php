<?php
include_once './Model/DB.php';
class Customer
{
    public $fullname;
    public $email;
    public $username;
    function __construct($fullname, $email, $username )
    {
        $this->username = $username;
        $this->phone = $fullname;
        $this->email = $email;
    }
}
class CustomerUserModel extends DB
{
    // private $mysql;
    // public function __construct()
    // {
    //     $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    //     $this->mysql->query("SET NAMES 'UTF8'");
    // }
    function GetAll()
    {
        $query = "SELECT * FROM lph_username WHERE Active =1 AND Roles =0";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new Customer($value[1], $value[2], $value[3]));
        }
        return $data;
    }
}
