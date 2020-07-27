<?php
require SYSTEM_PATH . "/Model/ContactDefaultModel.php";
require SYSTEM_PATH."/Model/ToacsiiModel.php";
class ContactDefaultController
{
    private $ContactDefaultModel;
    private $ToacsiiModel;
    public function __construct()
    {
        $this->ContactDefaultModel = new ContactDefaultModel();
        $this->ToacsiiModel = new ToacsiiModel();
    }

    function View()
    {
        $data = $this->ContactDefaultModel->GetAll();
        require SYSTEM_PATH . "/View/Website/contact.php";
    }
  
    function SendContact()
    {
        $content = $_POST["content"];
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $title = $_POST["title"];
        echo $content.$fullname.$email.$title;
        // echo $post_link;
        // die();
        $contact = new ContactDefault($content,$fullname,$email,$title);
        $ContactDefaultModel = new ContactDefaultModel();
        $result = $ContactDefaultModel->SendContact($contact);
        //$ContactDefaultModel = new ContactDefaultModel();
     //   $result = $ContactDefaultModel->SendContact(new ContactDefault($content,$fullname,$email,$title));
        if ($result == true)
            header('location: index.php?c=contactdefault&a=View&r=1');
        else
            header('location: index.php?c=contactdefault&a=View&r=0');
    }
}
