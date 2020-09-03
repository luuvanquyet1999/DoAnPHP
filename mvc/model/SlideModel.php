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

class SlideModel extends DB{
    public  function GetSV(){
        return "Nguyen Huyen Tri";
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

}



