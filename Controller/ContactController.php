<?php
require SYSTEM_PATH . "/Model/ContactModel.php";
class ContactController
{
    private $LienHeModel;
    public function __construct()
    {
        $this->ContactModel = new ContactModel();
    }
    function View()
    {
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            $data = $this->ContactModel->GetAll();
            require SYSTEM_PATH . "/View/Admin/Contact/List.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function Add()
    {
        //session_start();
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            require SYSTEM_PATH . "/View/Admin/Contact/Add.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function SaveAdd()
    {
        $contact_id = $_POST["contact_id"];
        $contact_email = $_POST["contact_email"];
        $contact_phone = $_POST["contact_phone"];
        $contact_address = $_POST["contact_address"];
        $contact_comment = $_POST["contact_comment"];
        $Active = $_POST["Active"];
        $result = $this->ContactModel->Insert(new Contact($contact_id, $contact_email, $contact_phone, $contact_address, $Active, $contact_comment));
        if ($result == true)
            header('location: index.php?c=Contact&a=View&r=1');
        else
            header('location: index.php?c=Contact&a=View&r=0');
    }
    function Delete()
    {
        $contact_id = $_GET["contact_id"];

        $result = $this->ContactModel->Delete($contact_id);
        if ($result == true)
            header('location: index.php?c=Contact&a=View&r=1');
        else
            header('location: index.php?c=Contact&a=View&r=0');
    }
    function Update()
    {
        //session_start();
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            $contact_id = $_GET['contact_id'];
            $contact = $this->ContactModel->GetById($contact_id);
            require SYSTEM_PATH . "/View/Admin/Contact/Update.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function SaveUpdate()
    {
        $contact_id = $_POST["contact_id"];
        $contact_email = $_POST["contact_email"];
        $contact_phone = $_POST["contact_phone"];
        $contact_address = $_POST["contact_address"];
        $contact_comment = $_POST["contact_comment"];
        $Active = $_POST["Active"];
        $result = $this->ContactModel->Update(new Contact($contact_id, $contact_email, $contact_phone, $contact_address, $Active, $contact_comment));
        if ($result == true)
            header('location: index.php?c=Contact&a=View&r=1');
        else
            header('location: index.php?c=Contact&a=View&r=0');
    }
    // function SendContact()
    // {
    //     $content = $_POST["content"];
    //     $fullname = $_POST["fullname"];
    //     $email = $_POST["email"];
    //     $hidden = 0;
    //     $result  = $this->ContactModel->SendContact(new ContactDefault($content, $fullname, $email, $hidden));
    //     if ($result == true)
    //         header('location: index.php?c=WebsiteIndex&a=Contact&r=1');
    //     else
    //         header('location: index.php?c=WebsiteIndex&a=Contact&r=0');
    // }

    function GetAllContactDefault()
    {
        //session_start();
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            $data = $this->ContactModel->GetAllContactDefault();
            require SYSTEM_PATH . "/View/Admin/ContactDefault/List.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function UpdateActive()
    {
        $contact_id = $_GET["Id"];
        $result = $this->ContactModel->UpdateActive($contact_id);
        // if ($result == true)
        //     header('location: index.php?c=Contact&a=GetAllContactDefault&r=1');
        // else
        header('location: index.php?c=Contact&a=GetAllContactDefault');
    }
}
