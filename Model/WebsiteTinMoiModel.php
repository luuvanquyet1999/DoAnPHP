<?php
class Category
{
    public $cate_id;
    public $cate_name;
    public $cate_link;
    function __construct($cate_id, $cate_name,$cate_link)
    {
        $this->cate_id = $cate_id;
        $this->cate_name = $cate_name;
        $this->cate_link = $cate_link;
    }
}
class WebsiteTinMoiModel
{
    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }
    function GetAllCategory()
    {
        $query = "SELECT * FROM lph_category ";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new Category($value[0], $value[1], $value[2]));
        }
        return $data;
    }
}
