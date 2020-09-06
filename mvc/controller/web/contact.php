<?php

class contact extends Controller
{
    function View()
    {
        $post= $this->getmodel('PostModel');
        $data1= $post-> GetCategories();

        $slide= $this->getmodel('ContactModel');
        $data2=$slide->GetAll();
        $this->getviewweb('contact',$data=[$data1,$data2]);
    }
     function SendContact()
    {
        $content = $_POST["message"];
        $fullname = $_POST["name"];
        $email = $_POST["email"];
        $hidden = 0;
        $result  = $this->getmodel('ContactModel')->SendContact(new SendContact($content, $fullname, $email, $hidden));
        if ($result == true){
            echo '<script language="javascript">';
            echo 'alert("Đã gửi thành công")';
            echo '</script>';
            header('location: /doanphp/contact');
           
        }
        else{
            header('location: /doanphp/contact');
        }
    }
}