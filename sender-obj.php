<?php
//server connection
$mysqli = new mysqli("localhost", "root", "", "demo");


//Chek connection
if($mysqli === false){
         die("ERROR: Colud not connect. " . $mysqli->connect_error);
}

//Sql query execute
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)";

if ($stmt = $mysqli->prepare($sql)) {
      //Bind variables
$stmt->bind_param("sss", $first_name, $last_name, $email);

   //set parameters
   $first_name = $_REQUEST['first_name'];
   $last_name = $_REQUEST['first_name'];
   $email = $_REQUEST['email'];

   //attempt to execute prepared statement

   if($stmt->execute()){
         echo "Record inserted successfully.";
   } else{
      echo "ERROR : Could not execute query: $sql. " . $mysqli->error;
   }


} else{
   echo "ERROR: Could not prepare query : $sql. " . $mysqli->error;
}


//Close statement

$stmt->close();

//close connection
$mysqli->close();



?>