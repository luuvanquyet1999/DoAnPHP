<?php

class logout{
    function View()
    {
        session_unset();
        header("location:/doanphp/login");
    }
}