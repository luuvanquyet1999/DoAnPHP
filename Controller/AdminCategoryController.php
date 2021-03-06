<?php
require SYSTEM_PATH . "/Model/AdminCategoryModel.php";
class AdminCategoryController
{
    private $CategoryModel;

    public function __construct()
    {
        $this->CategoryModel = new AdminCategoryModel();
    }
    function View()
    {
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            $data = $this->CategoryModel->GetAll();
            require SYSTEM_PATH . "/View/Admin/Category/List.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function Add()
    {
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            require SYSTEM_PATH . "/View/Admin/Category/Add.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function SaveAdd()
    {
        $Category_id = $_POST["category_id"];
        $Category_name = $_POST["category_name"];
        $Category_link = $_POST["category_link"];
        $Active = $_POST["Active"];
        $result = $this->CategoryModel->Insert(new Category($Category_id, $Category_name, $Category_link, $Active));

        if ($result == true)
            header('location: index.php?c=AdminCategory&a=View&r=1');
        else
            header('location: index.php?c=AdminCategory&a=View&r=0');
    }
    function Update()
    {
        //session_start();
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            $cate_id = $_GET['CategoryID'];
            $Category = $this->CategoryModel->GetRecordById($cate_id);
            require SYSTEM_PATH . "/View/Admin/Category/Update.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function SaveUpdate()
    {
        $Category_id = $_POST["category_id"];
        $Category_name = $_POST["category_name"];
        $Category_link = $_POST["category_link"];
        $Active = $_POST["Active"];
        $result = $this->CategoryModel->Update(new Category($Category_id, $Category_name, $Category_name, $Active));
        if ($result == true)
            header('location: index.php?c=AdminCategory&a=View&r=1');
        else
            header('location: index.php?c=AdminCategory&a=View&r=0');
    }
    function Delete()
    {
        $Category_id = $_GET["CategoryID"];

        $result = $this->CategoryModel->Delete($Category_id);
        if ($result == true)
            header('location: index.php?c=AdminCategory&a=View&r=1');
        else
            header('location: index.php?c=AdminCategory&a=View&r=0');
    }
}
