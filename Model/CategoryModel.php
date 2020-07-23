<?php
class Category
{
    public $Category_id;
    public $Category_name;
    public $Category_link;
    public $Active;
    function __construct($Category_id, $Category_name, $Category_link, $Active)
    {
        $this->Category_id = $Category_id;
        $this->Category_name = $Category_name;
        $this->Category_link = $Category_link;
        $this->Active = $Active;
    }
}
class CategoryModel
{
    private $mysql;
    public function __construct()
    {
        $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }
    function GetAll()
    {
        $query = "SELECT * FROM lph_Category";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new Category($value[0], $value[1], $value[2], $value[3]));
        }
        return $data;
    }
}
