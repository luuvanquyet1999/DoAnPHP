<?php
class WebsiteGioiThieu{
    public $intro_id;
    public $title;
    public $summary;
    public $content;
    public $image;
    function __construct($intro_id,$title,$summary,$content,$image)
    {
        $this->intro_id = $intro_id;
        $this->title = $title;
        $this->summary = $summary;
        $this->content = $content;
        $this->image = $image;
    }
}
class WebsiteGioiThieuModel
{
    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }
    function GetAll()
    {
        $query = "SELECT * FROM lph_introduce ";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new WebsiteGioiThieu($value[0],$value[1], $value[2], $value[3], $value[4]));
        }
        return $data;
    }
}

