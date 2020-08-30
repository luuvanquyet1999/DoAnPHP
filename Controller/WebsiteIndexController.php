<?php
require SYSTEM_PATH."/Model/AdminGioiThieuModel.php";
require SYSTEM_PATH."/Model/AdminPostModel.php";
require SYSTEM_PATH."/Model/ContactModel.php";
class WebsiteIndexController
{
    private $gioithieumodel;
    private $contactmodel;
    private $postmodel;
    function __construct()
    {
        $this->gioithieumodel = new AdminGioiThieuModel();
        $this->contactmodel = new ContactModel();
        $this->postmodel = new AdminPostModel();
    }
    function View(){
        $data = $this->postmodel->GetPost();
        require SYSTEM_PATH."/View/website/Index.php";
    }
    function Gioithieu(){
        $data= $this->gioithieumodel->GetAll();
        $data1= $this->gioithieumodel->GetMember();
        require SYSTEM_PATH."/View/website/GioiThieu.php";
    }
    function Contact(){
        $data = $this->contactmodel->GetAll();
        require SYSTEM_PATH . "/View/WebSite/LienHe.php";
    }
}

