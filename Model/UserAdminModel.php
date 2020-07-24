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
    function __construct($UserAdmin_id, $UserAdmin_fullname, $UserAdmin_email, $UserAdmin_username,$UserAdmin_gender,$UserAdmin_password,$UserAdmin_dateofbirth,$Active)
    {
        $this->UserAdmin_id = $UserAdmin_id;
        $this->UserAdmin_fullname = $UserAdmin_fullname;
        $this->UserAdmin_email = $UserAdmin_email;
        $this->UserAdmin_username = $UserAdmin_username;
        $this->UserAdmin_gender = $UserAdmin_gender;
        $this->UserAdmin_password = $UserAdmin_password;
        $this->UserAdmin_dateofbirth = $UserAdmin_dateofbirth;
        $this->Active = $Active;
    }
}
class UserAdminModel
{
    private $mysql;
    public function __construct()
    {
        $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }
    function GetAll()
    {
        $query = "SELECT * FROM lph_adiminuser WHERE Active ='1'";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new UserAdmin($value[0], $value[1], $value[2], $value[3], $value[4], $value[5], $value[6], $value[7]));
        }
        return $data;
    }

   
    function Update(Category $Category)
    {
        // $query = "UPDATE lop SET TenLop = '$lop->TenLop', MaKhoa='$lop->MaKhoa'
        // WHERE MaLop = '$lop->MaLop'";
        // $result = $this->mysql->query($query);
        // return $result;
    }
    function Delete($UserAdmin_id)
    {

        $query = "UPDATE lph_adminuser SET Active = 0
        WHERE usernameid = '$UserAdmin_id'";
        $result = $this->mysql->query($query);
        return $result;
    }
}
