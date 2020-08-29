<?php
require SYSTEM_PATH."/Model/AdminGioiThieuModel.php";
require SYSTEM_PATH."/Model/ContactModel.php";
class WebsiteIndexController
{
    private $gioithieumodel;
    private $contactmodel;
    function __construct()
    {
        $this->gioithieumodel = new AdminGioiThieuModel();
        $this->contactmodel = new ContactModel();
    }
    function View(){
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

