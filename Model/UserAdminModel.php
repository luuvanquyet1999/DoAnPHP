<?php
class UserAdmin
{
    public $UserAdmin_id;
    public $UserAdmin_fullname;
    public $UserAdmin_email;
    public $UserAdmin_username;
    public $UserAdmin_gender;
    public $UserAdmin_password;
    public $UserAdmin_dateofbirth;
    public $Active;
    function __construct($UserAdmin_id, $UserAdmin_fullname, $UserAdmin_email, $UserAdmin_username,$UserAdmin_gender,$UserAdmin_password,$Active,$UserAdmin_dateofbirth)
    {
        $this->UserAdmin_id = $UserAdmin_id;
        $this->UserAdmin_fullname = $UserAdmin_fullname;
        $this->UserAdmin_email = $UserAdmin_email;
        $this->UserAdmin_username = $UserAdmin_username;
        $this->UserAdmin_gender = $UserAdmin_gender;
        $this->UserAdmin_password = $UserAdmin_password;
        $this->Active = $Active;
        $this->UserAdmin_dateofbirth = $UserAdmin_dateofbirth;

    }
}
class UserAdminModel
{
    private $mysql;
    public function __construct()
    {
        $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
        $this->mysql->query("SET NAMES 'UTF8'");
    }
    function GetAll()
    {
        $query = "	SELECT UsernameId,UsernameFull,UsernameEmail,Username,(CASE
        WHEN UsernameGender =1 THEN 'Nam'
        WHEN UsernameGender =0 THEN 'Nữ'
    END) as UsernameGender,
                    UsernamePassword,(CASE
        WHEN Active =1 THEN 'Hiển thị'
        WHEN Active =0 THEN 'Ẩn'
    END) as Active,DateOfBirth FROM lph_adiminuser WHERE Active ='1' ORDER BY UsernameId desc";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new UserAdmin($value[0], $value[1], $value[2], $value[3], $value[4], $value[5], $value[6], $value[7]));
        }
        return $data;
    }

   
    function GetRecordById($UserAdmin_id)
    {
        $query = "SELECT * FROM lph_adiminuser WHERE UsernameId = '$UserAdmin_id' AND Active = 1 LIMIT 1";
        $result = $this->mysql->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new UserAdmin($data[0][0], $data[0][1], $data[0][2], $data[0][3], $data[0][4], $data[0][5], $data[0][6], $data[0][7]);
        }
        return null;
    }
    function Update(UserAdmin $userAdmin)
    {
        $query = "UPDATE lph_adiminuser SET UserNameid = '$userAdmin->UserAdmin_id',
        UserNameFull = '$userAdmin->UserAdmin_fullname',
        UserNameEmail = '$userAdmin->UserAdmin_email',
        UserName = '$userAdmin->UserAdmin_username',
        UserNameGender = $userAdmin->UserAdmin_gender,
        UserNamePassword = '$userAdmin->UserAdmin_password',
        Active = '$userAdmin->Active',
        DateOfBirth = '$userAdmin->UserAdmin_dateofbirth'
        WHERE UsernameId = '$userAdmin->UserAdmin_id'";
        $result = $this->mysql->query($query);
        return $result;
    }
    function Delete($UserAdmin_id)
    {

        $query = "UPDATE lph_adiminuser SET Active = 0
        WHERE usernameid = '$UserAdmin_id'";
        $result = $this->mysql->query($query);
        return $result;
    }
}
