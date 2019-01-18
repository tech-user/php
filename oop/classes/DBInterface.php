<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 2018-12-18
 * Time: 19:27
 */

interface DBInterface
{
    public function db_connect();
    public function insert($data);
    public function read($where);
    public function update($where);
    public function delete($where);

}// DB Interface
