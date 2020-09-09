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
        $query = "SELECT Username ,UsernamePassword ,Active ,Roles ,UsernameFull
                    FROM lph_username WHERE
					Username = '$username' ";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1], $row[2],$row[3],$row[4]]);
        }
        return $data;
    }
    function GetUserPost($value){
        $query = "SELECT UsernameFull,Image, UserTitle FROM lph_username WHERE UserName='$value' ";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1], $row[2]]);
        }
        return $data;
    }
    function InsertUser($username,$password,$fullname,$gender,$imgae){
        $query="INSERT INTO lph_username(UserName,UsernameFull,UserNameGender,UsernamePassword ,Active ,Roles,Image) VALUES (
							'$username','$fullname',$gender,'$password',1,0,'$imgae')";
        $result = $this->mysql->query($query);
        return $result;
    }
}