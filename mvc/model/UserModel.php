<?php

class User{
    protected $userid;
    protected $useremail;
    protected $userpassword;
    protected $username;
    protected  $usernamefull;
    protected $usergender;
    protected $dateofbirth;
    protected $roles;
    public function __construct($userid,$useremail,$userpassword,$username,$dateofbirth,$roles,$usergender,$usernamefull)
    {
        $this->userid=$userid;
        $this->useremail=$useremail;
        $this->userpassword=$userpassword;
        $this->useremail=$username;
        $this->usernamefull=$usernamefull;
        $this->usergender=$usergender;
        $this->roles=$roles;
    }
}

class UserModel extends DB{
    function FindUser($username){
        $query = "SELECT Username ,UsernamePassword ,Active ,Roles ,UsernameFull,Image,UsernameEmail ,UsernameGender
                    FROM lph_username WHERE
					Username = '$username' LIMIT 1 ";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1], $row[2],$row[3],$row[4],$row[5],$row[6],$row[7]]);
        }
        return $data;
    }
    function GetUserPost($value){
        $query = "SELECT UsernameFull,Image, UserTitle FROM lph_username WHERE UserName='$value'AND  Active =1";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1], $row[2]]);
        }
        return $data;
    }
    function GetAdmin($value){
        $query = "SELECT UsernameFull,Image FROM lph_adiminuser WHERE UserName='$value'  ";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1]]);
        }
        return $data;
    }
    function InsertUser($username,$password,$fullname,$gender,$imgae,$email){
        $query="INSERT INTO lph_username(UserName,UsernameFull,UserNameGender,UsernamePassword ,Active ,Roles,Image,UsernameEmail) VALUES (
							'$username','$fullname',$gender,'$password',1,0,'$imgae','$email')";
        $result = $this->mysql->query($query);
        return $result;
    }
    function  Update($image ,$username){
        $query="UPDATE lph_username SET Image ='$image'
                WHERE Active =1 AND Username ='$username'";
        $result = $this->mysql->query($query);
        return $result;
    }
    function  UpdateTT($fullname ,$gender,$email ,$username){
        $query="UPDATE lph_username SET UsernameFull ='$fullname',UserNameGender=$gender,UsernameEmail ='$email'
                WHERE Active =1 AND Username ='$username'";
        $result = $this->mysql->query($query);
        return $result;
    }
    function GetEmailUser(){
        $query = "SELECT Username ,UsernameEmail ,Image FROM lph_username WHERE Active =1  ";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1],$row[2]]);
        }
        return $data;
    }
    function UpdatePassword($username,$password){
        $query = "UPDATE lph_username SET UsernamePassword = '$password'
                WHERE Active =1 AND Username ='$username'  ";
        $result = $this->mysql->query($query);
        return $result;
    }


}