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
class CustomerUserModel
{
    private $mysql;
    public function __construct()
    {
        $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }
    function GetAll()
    {
        $query = "SELECT * FROM lph_customer";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new Customer($value[1], $value[3], $value[4]));
        }
        return $data;
    }
}
