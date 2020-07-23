<?php


class BaseModel
{
    public $mysql;
    public function __construct()
    {
        $this->mysql =
            new mysqli(hostname, username, password, dbname);
    }

}