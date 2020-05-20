<?php

//session start
session_start();



// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
      header("location: index.php");
      exit;
}


//include db config file
require_once "config.php";


//define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";



// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

      //validate new password
      if (empty(trim($_POST["new_password"]))) {
            $new_password_err = "Please enter the new password";
      } elseif (strlen(trim($_POST["new_password"])) < 6) {
         $new_password_err = "Password must have atleast 6 characters.";
      } else{
         $new_password = trim($_POST["new_password"]);
      }


      //validate confirm password
      if (empty(trim($_POST["confirm_password"]))) {
            $confirm_password_err = "Please confirm the password.";
      } else{
         $confirm_password = trim($_POST["confirm_password"]);
         if (empty($new_password_err) && ($new_password != $confirm_password)) {
                  $confirm_password_err = "Password did not match.";
         }
      }



      //SQL update query
      if (empty($new_password_err) && empty($confirm_password_err)) {
            
         //Prepare an update statement
            $sql = "UPDATE users SET password = ? WHERE id = ? ";

            if($stmt = $mysqli->prepare($sql)){

               // Bind variables to the prepared statement as parameters
               $stmt->bind_param("si", $param_password, $param_id);

               //set parameters
               $param_password = password_hash($new_password, PASSWORD_DEFAULT);
               $param_id = $_SESSION["id"];

               // Attempt to execute the prepared statement
               if($stmt->execute()){
                  
                  // Password updated successfully. Destroy the session, and redirect to login page
                  session_destroy();
                  header("location: index.php");
                  exit();
               } else {
                  echo "Opps! Something went wrong. Please try again later.";
               }

            }
            //Close statement
            $stmt->close();

      }
//close connection
$mysqli->close();



}




?>


<!---------------- HTML PART------------->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Reset Password</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
   <div class="wrapper">
         <h3>Reset Password</h3>
         <p>Please fill out this form to reset your password.</p>

         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         
         <div class="form-group <?php echo(!empty($new_password_err)) ? 'has-error' : ''; ?>">
            <label>New Password</label>
            <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>"><span class="help-block"><?php echo $new_password_err; ?></span>
         </div>

         <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
         </div>

         <div class="form-group">
               <button class="btn btn-warning" type="submit">Reset Password</button>
                <a class="btn btn-link" href="welcome.php">Cancel</a>
            </div>

         </form>


   </div>   





</body>
</html>