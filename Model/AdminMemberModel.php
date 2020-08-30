<?php
class Member
{
    public $member_id;
    public $member_name;
    public $member_avatar;
    public $member_job;
    public $member_facebook;
    public $member_instagram;
    public $member_twitter;
    function __construct($member_id, $member_name, $member_avatar, $member_job,$member_facebook, $member_instagram, $member_twitter)
    {
        $this->member_id = $member_id;
        $this->member_name = $member_name;
        $this->member_avatar = $member_avatar;
        $this->member_job = $member_job;
        $this->member_facebook = $member_facebook;
        $this->member_instagram = $member_instagram;
        $this->member_twitter = $member_twitter;
    }
}
class AdminMemberModel
{
    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }
    function GetAll()
    {
        $query = "SELECT * FROM lph_member";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new Member($value[0], $value[1], $value[2], $value[3],$value[4], $value[5], $value[6]));
        }
        return $data;
    }
    function Insert(Member $member)
    {
        $query = "INSERT INTO lph_member (MemberName, MemberAvartar, MemberJob, MemberFaceBook, MemberInstagram, MemberTwitter) 
        VALUES ('$member->member_name','$member->member_avatar','$member->member_job','$member->member_facebook','$member->member_instagram','$member->member_twitter')";
        $result = $this->mysql->query($query);
        return $result;
    }
    function GetRecordById($member_id)
    {
        $query = "SELECT * FROM lph_member WHERE MemberId ='$member_id' LIMIT 1";
        $result = $this->mysql->query($query);
        $data = $result->fetch_all();
        // print_r($data);
        // die();
        if (count($data)) {
            return new Member($data[0][0], $data[0][1], $data[0][2], $data[0][3],$data[0][4], $data[0][5], $data[0][6]);
        }
        return null;
    }
    function Update(Member $member)
    {
        $query = "UPDATE lph_member 
        SET MemberName='$member->member_name', 
            MemberAvartar='$member->member_avatar',
            MemberJob='$member->member_job',
            MemberFaceBook='$member->member_facebook', 
            MemberInstagram='$member->member_instagram',
            MemberTwitter='$member->member_twitter'
        WHERE MemberId='$member->member_id'";
        $result = $this->mysql->query($query);
        return $result;
    }
    function Delete($member_id)
    {
        $query = "DELETE FROM lph_member 
        WHERE MemberId = '$member_id'";
        $result = $this->mysql->query($query);
        return $result;
    }
}
