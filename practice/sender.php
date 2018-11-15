<?php

//Server connection
$conn = mysqli_connect("localhost", "root", "", "demo");

//check connection
if ($conn === false) {
      die("ERROR: Could not connect to DB" . mysqli_connect_error());
}

//SQL insert query
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)";

if($stmt = mysqli_prepare($conn, $sql)){
   // Bind variables to the prepared statement as parameters
   mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);
   
   // Set parameters
   $first_name = $_REQUEST['first_name'];
   $last_name = $_REQUEST['last_name'];
   $email = $_REQUEST['email'];
   
   // Attempt to execute the prepared statement
   if(mysqli_stmt_execute($stmt)){
       echo "Records inserted successfully.";
   } else{
       echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
   }
} else{
   echo "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
}

//Close statement
mysqli_stmt_error($stmt);

//close connection
mysqli_close($conn);


?>