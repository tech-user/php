<?php

//Server connection include file
require_once "config.php";


//Define variables
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";


//Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   //validate username
   if(empty(trim($_POST["username"]))){
         $username_err = "Please enter a username";
   } else{
      //Prepare a select statement
      $sql = "SELECT id FROM users WHERE username = ? ";

      if($stmt = $mysqli->prepare($sql)){
         // Bind variables to the prepared statement as parameters
         $stmt->bind_param("s", $param_username);

         //set parameters
         $param_username = trim($_POST["username"]);

         // Attempt to execute the prepared statement
         if ($stmt->execute()) {
               //store result
               $stmt->store_result();
               if ($stmt->num_rows == 1) {
                     $username_err = "This username is alreardy taken.";
               } else{
                  $username = trim($_POST["username"]);
               }
         } else {
            echo "Oops! something went wrong. Please try again later.";
         }
      }
         //Close statement
         $stmt->close();

   }

      //validate password
      if(empty(trim($_POST["password"]))){
               $password_err = "Please enter a password";
      } elseif(strlen(trim($_POST["password"])) < 6) {
         $password_err = "assword must have atleast 6 characters.";
      } else{
         $password = trim($_POST["password"]);
      }



      //validate confirm password
      if(empty(trim($_POST["confirm_password"]))){
            $confirm_password_err = "Please confirm password.";
      } else {
         $confirm_password = trim($_POST["confirm_password"]);
         if (empty($password_err) && ($password != $confirm_password)) {
                  $confirm_password_err = "Password did not match.";
         }
      }


         // Check input errors before inserting in database
         if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
                  
            // Prepare SQL insert statement
               $sql = "INSERT INTO users (username, password) VALUES (? ,?)";

                  if($stmt = $mysqli->prepare($sql)){
                        // Bind variables to the prepared statement as parameters
                        $stmt->bind_param("ss", $param_username, $param_password);

                        //set parameters
                        $param_username = $username;
                        $param_password = password_hash($password, PASSWORD_DEFAULT);// Creates a password hash


                        // Attempt to execute the prepared statement
                        if($stmt->execute()){
                           //Redirect to login page
                           header("location: index.php");
                        } else {
                           echo "Something went wrong";
                        }

                  }

                     //Close Statement
                     $stmt->close();

         }

         //Close Connection

         $mysqli->close();



}// $_SERVER condition end


?>



<!---------------------- html part ------------------->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>User Registration</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 300px; padding: 20px; }
    </style>

</head>
<body>

<div class="wrapper">
      <h3>Sign Up</h3>
      <p>Please fill this form to create an account.</p>
   

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

         <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
               <label>Username</label>
               <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
               <span class="help-block"><?php echo $username_err; ?></span>
         </div>


            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>

            <div class="form-group">
               <button class="btn btn-primary" type="submit">Register</button>
               <button class="btn btn-secondary" type="reset">Reset</button>

            </div>
            <p>Already have an account? <a href="index.php">Login here</a>.</p>
      </form>






</div><!--Wrapper end -->




   
</body>
</html>


