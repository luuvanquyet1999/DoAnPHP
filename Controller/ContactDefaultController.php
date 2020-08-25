<?php
require SYSTEM_PATH . "/Model/ContactDefaultModel.php";
class ContactDefaultController
{
    private $ContactDefaultModel;
    public function __construct()
    {
        $this->ContactDefaultModel = new ContactDefaultModel();
    }

    function View()
    {
        $data = $this->ContactDefaultModel->GetAll();
        require SYSTEM_PATH . "/View/Admin/ContactDefault/List.php";
    }
  
    function SendContact()
    {
        $content = $_POST["content"];
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        //$title = $_POST["title"];
        // echo $post_link;
        // die();
        $contact = new ContactDefault($content,$fullname,$email);
        $ContactDefaultModel = new ContactDefaultModel();
        $result = $ContactDefaultModel->SendContact($contact);
        //$ContactDefaultModel = new ContactDefaultModel();
     //   $result = $ContactDefaultModel->SendContact(new ContactDefault($content,$fullname,$email,$title));
        if ($result == true)
            header('location: index.php?c=WebsiteContact&a=View&r=1');
        else
            header('location: index.php?c=WebsiteContact&a=View&r=0');
    }
}
