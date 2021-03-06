<?php
require SYSTEM_PATH . "/Model/AdminGioiThieuModel.php";
class AdminGioiThieuController
{
    private $admingioithieumodel;
    function __construct()
    {
        $this->admingioithieumodel = new AdminGioiThieuModel();
    }
    function View()
    {
        //session_start();
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            $data = $this->admingioithieumodel->GetAll();
            require SYSTEM_PATH . "/View/Admin/GioiThieu/List.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function Update()
    {
        //session_start();
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            $intro_id = $_GET['intro_id'];
            $gioithieu = $this->admingioithieumodel->GetRecordById($intro_id);
            require SYSTEM_PATH . "/View/Admin/GioiThieu/Update.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function SaveUpdate()
    {
        $intro_id = $_POST["intro_id"];
        $title = $_POST["title"];
        $summary = $_POST["summary"];
        $content = $_POST["content"];
        $file_name = $_FILES["image"]["name"];
        move_uploaded_file($_FILES["image"]["tmp_name"], "fileUpload/Introduce/" . $_FILES["image"]["name"]);
        $path = "fileUpload/Introduce/" . $file_name;
        $image = $path;
        $result = $this->admingioithieumodel->Update(new GioiThieu($intro_id, $title, $summary, $content, $image));
        if ($result == true)
            header('location: index.php?c=AdminGioiThieu&a=View&r=1');
        else
            header('location: index.php?c=AdminGioiThieu&a=View&r=0');
    }
}
