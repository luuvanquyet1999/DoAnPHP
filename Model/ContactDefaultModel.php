<?php

class ContactDefault{
    public $sendcontact_content;
    public $sendcontact_fullname;
    public $sendcontact_email;
    public $sendcontact_title;
    function __construct( $sendcontact_content,$sendcontact_fullname,$sendcontact_email,$sendcontact_title)
    {
       $this->sendcontact_content=$sendcontact_content;
       $this->sendcontact_fullname=$sendcontact_fullname;
       $this->sendcontact_email=$sendcontact_email;
       $this->sendcontact_title=$sendcontact_title;

    }
}

class Contact{
    public $contact_id;
    public $contact_address;
    public $contact_phone;
    public $contact_email;
    public $active;
    function __construct( $contact_id,$contact_address,$contact_phone,$contact_email,$active)
    {
       $this->contact_id=$contact_id;
       $this->contact_address=$contact_address;
       $this->contact_phone=$contact_phone;
       $this->contact_email=$contact_email;
       $this->active=$active;

    }
}
class ContactDefaultModel{
    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }
    function GetAll()
    {
        $query = "SELECT * FROM lph_sendcontact ";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new ContactDefault($value[1], $value[2], $value[3], $value[4]));
        }
        return $data;
    }
    function SendContact(ContactDefault $contactDefault)
    {
        $query = "INSERT INTO lph_sendcontact(content,fullname,email,title) VALUES ('$contactDefault->sendcontact_content','$contactDefault->sendcontact_fullname',
                                            '$contactDefault->sendcontact_email','$contactDefault->sendcontact_title')";
        $result = $this->mysql->query($query);
        return $result;
    }
}