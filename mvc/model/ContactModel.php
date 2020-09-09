<?php
class Contact1{
    public $contact_id;
    public $contact_email;
    public $contact_phone;
    public $contact_address;
    public $contact_title;
    public $contact_comment;
    public $Active;

    function  __construct($contact_id,$contact_email,$contact_phone,$contact_address,$Active,$contact_title,$contact_comment)
    {
        $this->contact_id=$contact_id;
        $this->contact_email=$contact_email;
        $this->contact_phone=$contact_phone;
        $this->contact_address=$contact_address;
        $this->contact_comment=$contact_comment;
        $this->contact_title=$contact_title;
        $this->Active=$Active;
    }
}

class SendContact
{
    public $sendcontact_content;
    public $sendcontact_fullname;
    public $sendcontact_email;
    public $hidden;
    function __construct($sendcontact_content, $sendcontact_fullname, $sendcontact_email,$hidden)
    {
        $this->sendcontact_content = $sendcontact_content;
        $this->sendcontact_fullname = $sendcontact_fullname;
        $this->sendcontact_email = $sendcontact_email;
        $this->hidden = $hidden;
    }
}
class ContactModel extends  DB{
    function GetAll()
    {
        $query = "SELECT * FROM lph_contact WHERE Active =1 ";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new Contact1($value[0], $value[1], $value[2], $value[3], $value[4], $value[5],$value[6]));
        }
        return  $data;
    }
    function SendContact(SendContact $sendContact)
    {
        $query = "INSERT INTO lph_sendcontact(Content,Fullname,Email,Hidden) VALUES ('$sendContact->sendcontact_content','$sendContact->sendcontact_fullname',
                                            '$sendContact->sendcontact_email',$sendContact->hidden)";
        $result = $this->mysql->query($query);
        return $result;
    }
}