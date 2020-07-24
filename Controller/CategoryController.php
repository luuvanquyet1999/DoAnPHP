<?php
require SYSTEM_PATH . "/Model/CategoryModel.php";
class CategoryController
{
    private $CategoryModel;

    public function __construct()
    {
        $this->CategoryModel = new CategoryModel();
    }
    function View()
    {
        //$Category = new CategoryModel();
        $data = $this->CategoryModel->GetAll();
        require SYSTEM_PATH . "/View/Admin/Category/List.php";
    }
    function Add()
    {
        require SYSTEM_PATH . "/View/Admin/Category/Add.php";
    }
    function SaveAdd()
    {
        $Category_id = $_POST["category_id"];
        $Category_name = $_POST["category_name"];
        $Category_link = $_POST["category_link"];
        $Active = $_POST["Active"];
        $result = $this->CategoryModel->Insert(new Category($Category_id, $Category_name, $Category_link, $Active));
        if ($result == true)
            header('location: index.php?c=Category&a=View&r=1');
        else
            header('location: index.php?c=Category&a=View&r=0');
    }
    function Update()
    {
        $Category_id = $_GET["CategoryID"];
        $Category = $this->CategoryModel->GetRecordById($Category_id);
        require SYSTEM_PATH . "/View/Admin/Category/Update.php";
    }
    function SaveUpdate()
    {
        $Category_id = $_POST["category_id"];
        $Category_name = $_POST["category_name"];
        $Category_link = $_POST["category_link"];
        $Active = $_POST["Active"];
        $result = $this->CategoryModel->Update(new Category($Category_id, $Category_name, $Category_name, $Active));
        if ($result == true)
            header('location: index.php?c=Category&a=View&r=1');
        else
            header('location: index.php?c=Category&a=View&r=0');
    }
    function Delete()
    {
        $Category_id = $_GET["CategoryID"];

        $result = $this->CategoryModel->Delete($Category_id);
        if ($result == true)
            header('location: index.php?c=Category&a=View&r=1');
        else
            header('location: index.php?c=Category&a=View&r=0');
    }
}
