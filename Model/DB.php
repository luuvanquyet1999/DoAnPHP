<?php


class DB
{
    public $mysql;
    function __construct()
    {
        $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
        $this->mysql->query("SET NAMES 'utf8'");
    }
}