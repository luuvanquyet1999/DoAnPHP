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
        $Category = new CategoryModel();
        $data = $Category->GetAll();
        require SYSTEM_PATH . "/View/Admin/Category/List.php";
    }
}
