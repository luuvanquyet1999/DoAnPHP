<?php
include_once './Model/DB.php';
class Admin
{
    public $id;
    public $userName;
    public $passWord;
    public $fullName;
    public $genDer;
    public $email;
    public $DateofBirth;
    public $image;
    public function __construct($id, $userName, $passWord, $fullName, $genDer, $email, $DateofBirth, $image)
    {
        $this->id = $id;
        $this->userName = $userName;
        $this->passWord = $passWord;
        $this->fullName = $fullName;
        $this->genDer = $genDer;
        $this->email = $email;
        $this->DateofBirth = $DateofBirth;
        $this->image=$image;
    }
}
class AdminIndexModel extends DB
{
    // private $mysql;
    // public function __construct()
    // {
    //     $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    //     $this->mysql->query("SET NAMES 'UTF8'");
    // }
    function registerRecord(Admin $admin)
    {
        $query = "Select * from lph_adiminuser where Username ='$admin->userName'";
        $check = $this->mysql->query("$query");
        $array = $check->fetch_all();
        if (count($array)) {
            return false;
        } else {
            $checkEmail = $this->mysql->query("select * from lph_adiminuser where UsernameEmail ='$admin->email'");
            $count = $checkEmail->fetch_all();
            if (count($count)) {
                return false;
            } else {
                $sql1 = "INSERT INTO lph_adiminuser(Username,UsernamePassword,UsernameFull,UsernameEmail,UsernameGender,DateOfBirth,Active, Image) 
                VALUES ('$admin->userName','$admin->passWord','$admin->fullName','$admin->email','$admin->genDer','$admin->DateofBirth','1', '$admin->image')";
                $result = $this->mysql->query($sql1);
                return $result;
                // print_r($result);
                // die();
            }
        }
    }
    function loginRecord($user, $pass)
    {
        $query = "SELECT * FROM lph_adiminuser WHERE Active = 1 AND UsernamePassword ='$pass' AND Username = '$user'";
        $result = $this->mysql->query($query);
        return $result;
    }

    function getPassword($user)
    {
        $query = "select * from tdb_adminuser where username = '$user'";
        $result = $this->mysqli->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new Admin($data[0][0], $data[0][1], $data[0][2], $data[0][3], $data[0][4], $data[0][5], $data[0][6], $data[0][7]);;
        }
        return null;
    }
    function UpdateRecord(Admin $ad)
    {
        $query = "update tdb_adminuser set password ='$ad->passWord',fullname ='$ad->fullName',email='$ad->email',phone = '$ad->phone',avatar='$ad->avatar' where username = '$ad->userName'";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function UpdateAvatar(Admin $ad)
    {
        $query = "update tdb_adminuser set avatar='$ad->avatar' where username = '$ad->userName'";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function forgotPassword($email)
    {
        $query = "select * from tdb_adminuser where email = '$email'";
        $result = $this->mysqli->query($query);
        $num_rows = mysqli_num_rows($result);
        return $num_rows;
    }
    function updatePasswordByEmail($email, $pass)
    {
        $query = "update tdb_adminuser set password ='$pass' where email ='$email'";
        $this->mysqli->query($query);
    }
     //update profile
    function UpdateProfile($UserAdmin_id)
    {
        $query = "SELECT * FROM lph_adiminuser WHERE Username = '$UserAdmin_id' AND Active = 1 LIMIT 1";
        $result = $this->mysql->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new UserAdmin($data[0][0], $data[0][1], $data[0][2], $data[0][3], $data[0][4], $data[0][5], $data[0][6], $data[0][7], $data[0][8]);
        }
        return null;
    }
    
}
