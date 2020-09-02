<?php
require SYSTEM_PATH . "/Model/CustomerUserModel.php";
class CustomerUserController
{
    private $customermodel;
    public function __construct()
    {
        $this->customermodel = new CustomerUserModel();
    }
    function View()
    {

        session_start();
        if (isset($_SESSION['username'])) {
            $user = $_SESSION['username'];
            $data = $this->customermodel->GetAll();
            require SYSTEM_PATH . "/View/Admin/Customer/ListUser.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
}
