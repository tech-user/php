<?php

//server connection

$link = mysqli_connect("localhost", "root", "", "demo");

//check connection
if ($link === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>