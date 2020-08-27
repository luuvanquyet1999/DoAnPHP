<?php
require SYSTEM_PATH . "/Model/WebsiteContactModel.php";
class WebsiteContactController
{
    private $WebsiteContactDefaultModel;
    public function __construct()
    {
        $this->WebsiteContactDefaultModel = new WebsiteContactDefaultModel();
    }

    function View()
    {
        $data = $this->WebsiteContactDefaultModel->GetAll();
        require SYSTEM_PATH . "/View/WebSite/LienHe.php";
    }
  
    function SendContact()
    {
        $content = $_POST["content"];
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $title = $_POST["title"];
        // echo $post_link;
        // die();
        $contact = new WebsiteContactDefault($content,$fullname,$email,$title);
        $WebsiteContactDefaultModel = new WebsiteContactDefaultModel();
        $result = $WebsiteContactDefaultModel->SendContact($contact);
        //$ContactDefaultModel = new ContactDefaultModel();
     //   $result = $ContactDefaultModel->SendContact(new ContactDefault($content,$fullname,$email,$title));
        if ($result == true)
            header('location: index.php?c=contactdefault&a=View&r=1');
        else
            header('location: index.php?c=contactdefault&a=View&r=0');
    }
}
