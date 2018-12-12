<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "test";

$con = new mysqli($host, $user, $password, $database);

if($con->connect_error){
    die("Connection Faied." . $con->connect_error);
}

?>
