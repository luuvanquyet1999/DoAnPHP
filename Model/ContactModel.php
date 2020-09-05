<?php
include_once './Model/DB.php';
class Contact
{
    public $contact_id;
    public $contact_email;
    public $contact_phone;
    public $contact_address;
    public $Active;
    public $contact_comment;
    function  __construct($contact_id, $contact_email, $contact_phone, $contact_address, $Active, $contact_comment)
    {
        $this->contact_id = $contact_id;
        $this->contact_email = $contact_email;
        $this->contact_phone = $contact_phone;
        $this->contact_address = $contact_address;
        $this->Active = $Active;
        $this->contact_comment =  $contact_comment;
    }
}
class ContactDefault
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
class ShowContact
{
    public $sendcontact_id;
    public $hidden;
    function __construct($sendcontact_id,$hidden)
    {
        $this->sendcontact_id = $sendcontact_id;
        $this->hidden = $hidden;
    }
}

class ContactModel extends DB
{
    // private $mysql;
    // public function __construct()
    // {
    //     $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    //     $this->mysql->query("SET NAMES 'UTF8'");
    // }
    function GetAll()
    {
        $query = "SELECT * FROM lph_contact ";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new Contact($value[0], $value[1], $value[2], $value[3], $value[4], $value[6]));
        }
        return $data;
    }
    function Insert(Contact $contact)
    {
        $query = "INSERT INTO lph_contact (ContactId,ContactEmail,ContactPhone,ContactAdress, Active) VALUES ('$contact->contact_id','$contact->contact_email',
                '$contact->contact_phone','$contact->contact_address','1')";
        $result = $this->mysql->query($query);
        return $result;
    }
    function Delete($contact_id)
    {
        $query = "DELETE FROM lph_contact WHERE ContactId = '$contact_id'";
        $result = $this->mysql->query($query);
        return $result;
    }
    function GetById($contact_id)
    {
        $query = "SELECT * FROM lph_contact WHERE
                        ContactId = '$contact_id' LIMIT 1";
        $result = $this->mysql->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new Contact($data[0][0], $data[0][1], $data[0][2], $data[0][3], $data[0][4], $data[0][6]);
        }
        return null;
    }

    function Update(Contact $contact)
    {
        $query = "UPDATE lph_contact 
                    SET ContactEmail = '$contact->contact_email' ,
                        ContactPhone='$contact->contact_phone',
                        ContactAdress='$contact->contact_address',
                        Active = '$contact->Active',
                        Comment = '$contact->contact_comment'
                    WHERE ContactId = '$contact->contact_id'";
        $result = $this->mysql->query($query);
        return $result;
    }
    function GetAllContactDefault()
    {
        $query = "SELECT SendContactId,Content,Fullname,Email,case WHEN hidden = 1 then 'Đã xem'
        WHEN hidden = 0 then 'Xem'
        end as hidden
        FROM lph_sendcontact 
        ORDER BY hidden asc, SendContactId DESC";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new ContactDefault($value[1], $value[2], $value[3], $value[4]));
        }
        return $data;
    }
    function SendContact(ContactDefault $contactDefault)
    {
        $query = "INSERT INTO lph_sendcontact(Content,Fullname,Email) VALUES ('$contactDefault->sendcontact_content','$contactDefault->sendcontact_fullname',
                                            '$contactDefault->sendcontact_email')";
        $result = $this->mysql->query($query);
        return $result;
    }
    
}
