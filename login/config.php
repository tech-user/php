<?php

//server connection
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'global');

/* attempt to connect MySQL database Object Oriented*/
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check connection

if ($mysqli === false) {
      die("ERROR: Could not connect. " . $mysqli->connect_error);
}

?>
