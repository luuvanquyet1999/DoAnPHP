<?php
require SYSTEM_PATH . "/Model/UserAdminModel.php";
class UserAdminController
{
    private $UserAdminModel;

    public function __construct()
    {
        $this->UserAdminModel = new UserAdminModel();
    }
    function View()
    {
        if (isset($_SESSION['username'])) {
            $user = $_SESSION['username'];
            $data = $this->UserAdminModel->GetAll();
            require SYSTEM_PATH . "/View/Admin/UserAdmin/List.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    // function Add()
    // {
    //     require SYSTEM_PATH . "/View/Admin/Category/Add.php";
    // }
    // function SaveAdd()
    // {
    //     $Category_id = $_POST["category_id"];
    //     $Category_name = $_POST["category_name"];
    //     $Category_link = $_POST["category_link"];
    //     $Active = $_POST["Active"];
    //     $result = $this->CategoryModel->Insert(new Category($Category_id, $Category_name, $Category_link, $Active));
    //     if ($result == true)
    //         header('location: index.php?c=Category&a=View&r=1');
    //     else
    //         header('location: index.php?c=Category&a=View&r=0');
    // }
    function Update()
    {
        //session_start();
        if (isset($_SESSION['username'])) {
            $user = $_SESSION['username'];
            $UserAdmin_id = $_GET["UserAdminID"];
            $UserAdmin = $this->UserAdminModel->GetRecordById($UserAdmin_id);
            require SYSTEM_PATH . "/View/Admin/UserAdmin/Update.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function SaveUpdate()
    {
        $UserAdmin_username = $_POST["UserAdmin_username"];
        $UserAdmin_id = $_POST["UserAdmin_id"];
        $UserAdmin_fullname = $_POST["UserAdmin_fullname"];
        $UserAdmin_email = $_POST["UserAdmin_email"];
        $UserAdmin_gender = $_POST["gioitinh"];
        $UserAdmin_password = $_POST["UserAdmin_password"];
        $UserAdmin_dateofbirth = $_POST["UserAdmin_dateofbirth"];
        $Active = $_POST["Active"];
        // echo $UserAdmin_username ." <br>".$UserAdmin_id ." <br>".$UserAdmin_fullname ." <br>".$UserAdmin_email ." <br>".$UserAdmin_gender
        //  ."<br> ".$UserAdmin_password."<br> ".$UserAdmin_dateofbirth." <br>".$Active;

        $result = $this->UserAdminModel->Update(new UserAdmin($UserAdmin_id, $UserAdmin_fullname, $UserAdmin_email, $UserAdmin_username, $UserAdmin_gender, $UserAdmin_password, $Active, $UserAdmin_dateofbirth));
        if ($result == true)
            header('location: index.php?c=UserAdmin&a=View&r=1');
        else
            header('location: index.php?c=UserAdmin&a=View&r=0');
    }
    function Delete()
    {
        $UserAdmin_id = $_GET["UserAdminID"];

        $result = $this->UserAdminModel->Delete($UserAdmin_id);
        if ($result == true)
            header('location: index.php?c=UserAdmin&a=View&r=1');
        else
            header('location: index.php?c=UserAdmin&a=View&r=0');
    }
}
