<?php
class Customer
{
    public $username;
    public $phone;
    public $email;
    function __construct($username, $phone, $email)
    {
        $this->username = $username;
        $this->phone = $phone;
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
        $query = "SELECT * FROM lph_customer WHERE Active =1";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new Customer($value[1], $value[3], $value[4]));
        }
        return $data;
    }
}
