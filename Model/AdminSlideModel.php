<?php

class Slide{
    public $slide_id;
    public $slide_image;
    public $Active;
    function __construct($slide_id, $slide_image,$Active)
    {
       $this->slide_id=$slide_id;
       $this->slide_image=$slide_image;
       $this->Active=$Active;

    }
}
class AdminSlideModel{
    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
        $this->mysql->query("SET NAMES 'UTF8'");
    }
    function GetAll()
    {
        $query = "SELECT * FROM lph_slide WHERE Active ='1'";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new Slide($value[0], $value[1], $value[2]));
        }
        return $data;
    }
    function Insert(Slide $slide)
    {
        $query = "INSERT INTO lph_slide (SlideImage, Active) VALUES ('$slide->slide_image','1')";
        $result = $this->mysql->query($query);
        print_r($result);
        return $result;
    }
    function Delete($slide_id)
    {
        $query = "UPDATE lph_slide SET Active = 0
        WHERE SlideId = '$slide_id'";
        $result = $this->mysql->query($query);
        return $result;
    }

    function GetById($slide_id)
    {
        $query = "SELECT * FROM lph_slide WHERE
                        SlideId = '$slide_id' LIMIT 1";
        $result = $this->mysql->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new Slide($data[0][0], $data[0][1], $data[0][2]);
        }
        return null;
    }
    function Update(Slide $slide)
    {
        $query1 = "SELECT * FROM lph_slide WHERE
                        SlideId = '$slide->slide_id' LIMIT 1";
        $result1 = $this->mysql->query($query1);
        $data = $result1->fetch_all();
        if (count($data)) {
            unlink($data[0][1]);
        }
        $query = "UPDATE lph_slide SET SlideImage = '$slide->slide_image' WHERE SlideId = '$slide->slide_id'";
        $result = $this->mysql->query($query);
        return $result;
    }
}