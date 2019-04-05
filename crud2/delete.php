<?php

//Server connection include file
require_once "config.php";

//Process delete operation after confirmation
if (isset($_POST["id"]) && !empty($_POST["id"])) {


   //SQL query delete statement
   $sql = "DELETE FROM emp WHERE id = ?";

   if ($stmt = mysqli_prepare($link, $sql)) {
         //bind variables to prepared statement as parameters

         mysqli_stmt_bind_param($stmt, "i", $param_id);

         //set parameters
         $param_id = trim($_POST["id"]);

          // Attempt to execute the prepared statement
         if (mysqli_stmt_execute($stmt)) {
         // Records deleted successfully. Redirect to landing page
            header("location: index.php");
            exit();
         } else {
            echo "Oops! Something went wrong. Please try again later.";
         }

   }
   // Close statement
   mysqli_stmt_close($stmt);
    
   // Close connection
   mysqli_close($link);



} else {
   //Check existence of id parameter
   if (empty(trim($_GET["id"]))) {
   
      // URL doesn't contain id parameter. Redirect to error page
      header("location: error.php");
      exit();
   }
}




?>

<!------------------------ HTML PART ------------------------->


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Delete Record</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

      <div class="wrapper">
            <div class="container-fluid">
                  <div class="row">
                        <div class="col-md-12">
                           <div class="page-header"><h3>Delete Record</h3></div>

                           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                           <div class="alert alert-danger fade in">
                              <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>">
                              <p>Are you sure you want to delete this record?</p>
                              <br>
                              <p>
                                 <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                                 <a href="index.php" class="btn btn-default">No</a>
                              </p>
                           </div>


                           </form>

                        </div>
                  </div>
            </div>
      </div>


   
</body>
</html>