<?php
//Check existing id parameter 
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    
    //include db config file
    require_once "config.php";

    //SQL Select query
    $sql = "SELECT * FROM emp WHERE id = ?";

    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to prepared statement as parameters

            mysqli_stmt_bind_param($stmt, "i", $param_id);

            //set Parameters
            $param_id = trim($_GET["id"]);
            
            //attempt to execute prepared statement
            if (mysqli_stmt_execute($stmt)) {
                    $result = mysqli_stmt_get_result($stmt);

                    if (mysqli_num_rows($result) == 1) {
                            /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */

                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                            //Retreive individual field value

                            $name = $row["name"];
                            $address = $row["address"];
                            $salary = $row["salary"];
                    } else {
                        // URL doesn't contain valid id parameter. Redirect to error page
                        header("locatioin: error.php");
                        exit();
                    }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

    }

        //close statement

        mysqli_stmt_close($stmt);

        //Close connection

        mysqli_close($link);


} else {
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}


?>


<!-- html part -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Record</title>

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
            <div class="col-md-12">
                <div class="page-header"><h3>View Record</h3></div>
                
                <div class="form-group">
                    <label for="name">Name :</label>
                    <p class="form-control-static"><?php echo $row["name"]; ?></p>
                </div>

                <div class="form-group">
                    <label for="address">Address :</label>   
                    <p class="form-control-static"><?php echo $row["address"]; ?></p>
                </div>

                <div class="form-group">
                    <label for="salary">Salary :</label>   
                    <p class="form-control-static"><?php echo $row["salary"]; ?></p>
                </div>
                
                <a href="index.php" class="btn btn-primary" role="button">Back</a>

            </div><!-- col-md-12-->
        </div><!-- container fluid-->
</div> <!-- wrapper -->




    
</body>
</html>
