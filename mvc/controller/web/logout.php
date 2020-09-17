<?php

class logout{
    function View()
    {
        session_unset();
        if (isset($_SERVER['HTTP_REFERER'])){
            $_SESSION['redirect_url'] = $_SERVER['HTTP_REFERER'];
        }else{
            $_SESSION['redirect_url']=null;
        }
        if (isset($_SESSION['redirect_url'])){
            header('Location:'.$_SESSION['redirect_url']);
        }else{
            header("location:/doanphp/login");
        }
    }
}