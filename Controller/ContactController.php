<?php
require SYSTEM_PATH . "/Model/ContactModel.php";
class ContactController{
    private $LienHeModel;
    public function __construct()
    {
        $this->ContactModel = new ContactModel();
    }
    function View()
    {
        $data = $this->ContactModel->GetAll();
        require SYSTEM_PATH . "/View/Admin/Contact/List.php";
    }
    function Add()
    {
        require SYSTEM_PATH . "/View/Admin/Contact/Add.php";
    }
    function SaveAdd()
    {
        $contact_id = $_POST["contact_id"];
        $contact_email = $_POST["contact_email"];
        $contact_phone = $_POST["contact_phone"];
        $contact_address = $_POST["contact_address"];
        $Active=$_POST["Active"];
        $result = $this->ContactModel->Insert(new Contact($contact_id, $contact_email, $contact_phone,$contact_address,$Active));
        if ($result == true)
            header('location: index.php?c=Contact&a=View&r=1');
        else
            header('location: index.php?c=Contact&a=View&r=0');
    }
    function Delete()
    {
        $contact_id= $_GET["contact_id"];

        $result = $this->ContactModel->Delete($contact_id);
        if ($result == true)
            header('location: index.php?c=Contact&a=View&r=1');
        else
            header('location: index.php?c=Contact&a=View&r=0');
    }
    function Update()
    {
        $contact_id = $_GET['contact_id'];
        $contact = $this->ContactModel->GetById($contact_id);
        require SYSTEM_PATH . "/View/Admin/Contact/Update.php";
    }
    function SaveUpdate()
    {
        $contact_id = $_POST["contact_id"];
        $contact_email = $_POST["contact_email"];
        $contact_phone = $_POST["contact_phone"];
        $contact_address = $_POST["contact_address"];
        $Active=$_POST["Active"];
        $result = $this->ContactModel->Update(new Contact($contact_id, $contact_email, $contact_phone,$contact_address,$Active));
        if ($result == true)
            header('location: index.php?c=Contact&a=View&r=1');
        else
            header('location: index.php?c=Contact&a=View&r=0');
    }
}
