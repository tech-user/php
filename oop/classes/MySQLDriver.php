<?php

class MySQLDriver extends DBCommonMethods implements DBInterface {
public function __construct($host, $uid, $password, $db)
{
    parent::__construct($host, $uid, $password, $db); }
    public function db_connect(){// connect code goes here }
    public function delete($where){// delete code goes here.}
        public function insert($data) { //insert code goes here }
        public function read($where) { //read code goes here }
        public function update($where) { //update code goes here }
}

