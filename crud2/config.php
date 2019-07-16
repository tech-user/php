<?php

//server connection
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');


//Check connection
$link  = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === true) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
} 
?>