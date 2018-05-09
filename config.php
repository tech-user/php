<?php


//* Database credentials.


define('DB_SERVER','localhost');
define('DB_USERNAME','admin');
define('DB_PASSWORD','Admin@123');
define('DB_NAME','global');

/* attempt to connect mysql database*/
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


//checking connecton

if($link === false){

  die("Error: Could not connect".mysqli_connect_error());
}

?>
