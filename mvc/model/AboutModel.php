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
        $query = "SELECT MemberName , MemberAvartar , MemberJob , MemberFaceBook ,MemberDesc FROM lph_member";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1], $row[2], $row[3],$row[4]]);
        }
        return $data;
    }
}