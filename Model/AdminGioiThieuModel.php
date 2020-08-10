<?php
class GioiThieu
{
    public $intro_id;
    public $title;
    public $summary;
    public $content;
    public $image;
    function __construct($intro_id, $title, $summary, $content, $image)
    {
        $this->intro_id = $intro_id;
        $this->title = $title;
        $this->summary = $summary;
        $this->content = $content;
        $this->image = $image;
    }
}
class AdminGioiThieuModel
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
            array_push($data, new GioiThieu($value[0], $value[1], $value[2], $value[3], $value[4]));
        }
        return $data;
    }
    function GetRecordById($intro_id)
    {
        $query = "SELECT * FROM lph_introduce WHERE
                        IntroduceId = '$intro_id' LIMIT 1";
        $result = $this->mysql->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new GioiThieu($data[0][0], $data[0][1], $data[0][2], $data[0][3], $data[0][4]);
        }
        return null;
    }
    function Update(GioiThieu $gioithieu)
    {
        $query = "UPDATE lph_introduce 
                    SET Title = '$gioithieu->title' ,
                    Summary='$gioithieu->summary',
                    Content='$gioithieu->content',
                    Image = '$gioithieu->image'
                    WHERE IntroduceId = '$gioithieu->intro_id'";
        $result = $this->mysql->query($query);
        return $result;
    }
}
