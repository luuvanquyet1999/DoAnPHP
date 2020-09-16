<?php

class contact extends Controller
{
    function View()
    {
        $post= $this->getmodel('PostModel');
        $data1= $post-> GetCategories();

        $slide= $this->getmodel('ContactModel');
        $data2=$slide->GetAll();
        $messeger ='';
        $this->getviewweb('contact',$data=[$data1,$data2,$messeger]);
    }
     function SendContact()
    {

        $content = $_POST["message"];
        $fullname = $_POST["name"];
        $email = $_POST["email"];
        $hidden = 0;
        $result  = $this->getmodel('ContactModel')->SendContact(new SendContact($content, $fullname, $email, $hidden));
        if ($result == true){
            $post= $this->getmodel('PostModel');
            $data1= $post-> GetCategories();

            $slide= $this->getmodel('ContactModel');
            $data2=$slide->GetAll();
            $messeger= '<script language="javascript">alert("Gửi thành công")</script>';
            $this->getviewweb('contact',$data=[$data1,$data2,$messeger]);
        }
        else{
            header('location: /doanphp/contact');
        }
    }
}