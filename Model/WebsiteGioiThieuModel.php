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
class WebsiteMember
{
    public $member_id;
    public $member_name;
    public $member_avatar;
    public $member_job;
    function __construct($member_id, $member_name, $member_avatar, $member_job)
    {
        $this->member_id = $member_id;
        $this->member_name = $member_name;
        $this->member_avatar = $member_avatar;
        $this->member_job = $member_job;
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
    function GetMember()
    {
        $query = "SELECT * FROM lph_member ";
        $result = $this->mysql->query($query);
        $data1 = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data1, new WebsiteMember($value[0],$value[1], $value[2], $value[3]));
        }
        return $data1;
    }
}

