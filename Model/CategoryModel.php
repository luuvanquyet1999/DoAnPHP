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
        $query = "SELECT * FROM lph_Category WHERE Active ='1'";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new Category($value[0], $value[1], $value[2], $value[3]));
        }
        return $data;
    }
    function Insert(Category $Category)
    {
        $query = "INSERT INTO lph_Category (CategoryName, CategoryLink, Active) VALUES ('$Category->Category_name','$Category->Category_link','1')";
        $result = $this->mysql->query($query);
        print_r($result);
        return $result;
    }
    function GetRecordById($Category_id)
    {
        // $query = "SELECT * FROM lop WHERE MaLop = '$MaLop' LIMIT 1";
        // $result = $this->mysql->query($query);
        // $data = $result->fetch_all();
        // if (count($data)) {
        //     return new Lop($data[0][0], $data[0][1], $data[0][2]);
        // }
        // return null;
    }
    function Update(Category $Category)
    {
        // $query = "UPDATE lop SET TenLop = '$lop->TenLop', MaKhoa='$lop->MaKhoa'
        // WHERE MaLop = '$lop->MaLop'";
        // $result = $this->mysql->query($query);
        // return $result;
    }
    function Delete($Category_id)
    {

        $query = "UPDATE lph_Category SET Active = 0
        WHERE CategoryId = '$Category_id'";
        $result = $this->mysql->query($query);
        return $result;
    }
}
