<?php

class  About1{
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
class  AboutModel extends DB{
    function GetAll()
    {
        $query = "SELECT * FROM lph_member";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new About1($value[0], $value[1], $value[2], $value[3]));
        }
        return $data;
    }
}