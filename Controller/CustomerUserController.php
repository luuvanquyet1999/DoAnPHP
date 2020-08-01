<?php
require SYSTEM_PATH."/Model/CustomerUserModel.php";
class CustomerUserController
{
    private $customermodel;
    public function __construct()
    {
        $this->customermodel = new CustomerUserModel();
    }
    function View(){
        $data = $this->customermodel->GetAll();
        require SYSTEM_PATH."/View/Admin/Customer/ListUser.php";
    }
}

