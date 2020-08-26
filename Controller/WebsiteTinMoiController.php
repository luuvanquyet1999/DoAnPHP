<?php
require SYSTEM_PATH."/Model/WebsiteTinMoiModel.php";
class WebsiteTinMoiController
{
    private $WebsiteTinMoiModel;
    function __construct()
    {
        $this->WebsiteTinMoiModel = new WebsiteTinMoiModel();
    }
    function View(){
        $data= $this->WebsiteTinMoiModel->GetAllCategory();
        require SYSTEM_PATH."/View/Website2/TinMoi.php";
    }
}

