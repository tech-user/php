<?php

abstract  class DBCommonMethods
{

    private $host;
    private $uid;
    private $password;
    private $db;

    public function __construct($host, $uid, $password, $db)
    {
        $this->host = $host;
        $this->uid = $uid;
        $this->password = $password;
        $this->db = $db;
    }
}//DB Common Methods

