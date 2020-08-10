<?php
require SYSTEM_PATH."/Model/WebsiteGioiThieuModel.php";
class WebsiteGioiThieuController
{
    private $websitegioithieumodel;
    function __construct()
    {
        $this->websitegioithieumodel = new WebsiteGioiThieuModel();
    }
    function View(){
        //$data= $this->websitegioithieumodel->GetAll();
        require SYSTEM_PATH."/View/website2/GioiThieu.php";
    }
}

