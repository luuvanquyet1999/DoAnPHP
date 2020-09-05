<?php
require SYSTEM_PATH . "/Model/AdminMemberModel.php";
class AdminMemberController
{
    private $AdminMemberModel;
    public function __construct()
    {
        $this->AdminMemberModel = new AdminMemberModel();
    }

    function View()
    {
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            $data = $this->AdminMemberModel->GetAll();
            require SYSTEM_PATH . "/View/Admin/Member/List.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function Add()
    {
        //session_start();
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            require SYSTEM_PATH . "/View/Admin/Member/Add.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function SaveAdd()
    {
        $member_id = $_POST["member_id"];
        $member_name = $_POST["member_name"];
        $member_job = $_POST["member_job"];
        $member_facebook = $_POST["member_facebook"];
        $member_instagram = $_POST["member_instagram"];
        $member_twitter = $_POST["member_twitter"];
        $member_desc = $_POST["member_desc"];
        $file_name = $_FILES["member_avatar"]["name"];
        move_uploaded_file($_FILES["member_avatar"]["tmp_name"], "fileUpload/Member/" . $_FILES["member_avatar"]["name"]);
        $path = "fileUpload/Member/" . $file_name;
        $member_avatar = $path;
        // echo $member_id.$member_name.$member_job. $member_avatar. $file_name;
        // die();
        $result = $this->AdminMemberModel->Insert(new Member($member_id, $member_name, $member_avatar, $member_job, $member_facebook, $member_instagram, $member_twitter,$member_desc));
        if ($result == true)
            header('location: index.php?c=AdminMember&a=View&r=1');
        else
            header('location: index.php?c=AdminMember&a=View&r=0');
    }
    function Update()
    {
        //session_start();
        if (isset($_SESSION['username'])) {
            $user = $_SESSION['username'];
            $member_id = $_GET["member_id"];
            $member = $this->AdminMemberModel->GetRecordById($member_id);
            require SYSTEM_PATH . "/View/Admin/Member/Update.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function SaveUpdate()
    {
        $member_id = $_POST["member_id"];
        $member_name = $_POST["member_name"];
        $member_job = $_POST["member_job"];
        $member_facebook = $_POST["member_facebook"];
        $member_instagram = $_POST["member_instagram"];
        $member_twitter = $_POST["member_twitter"];
        $member_desc = $_POST["member_desc"];
        $file_name = $_FILES["member_avatar"]["name"];
        move_uploaded_file($_FILES["member_avatar"]["tmp_name"], "fileUpload/Member/" . $_FILES["member_avatar"]["name"]);
        $path = "fileUpload/Member/" . $file_name;
        $member_avatar = $path;
        // echo $member_id.$member_name.$member_job. $member_avatar. $file_name;
        // die();
        $result = $this->AdminMemberModel->Update(new Member($member_id, $member_name, $member_avatar, $member_job, $member_facebook, $member_instagram, $member_twitter,$member_desc));
        if ($result == true)
            header('location: index.php?c=AdminMember&a=View&r=1');
        else
            header('location: index.php?c=AdminMember&a=View&r=0');
    }
    function Delete()
    {
        $member_id = $_GET["member_id"];
        $result = $this->AdminMemberModel->Delete($member_id);
        if ($result == true)
            header('location: index.php?c=AdminMember&a=View&r=1');
        else
            header('location: index.php?c=AdminMember&a=View&r=0');
    }
}
