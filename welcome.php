

    <?php

    // Initialize the session

    session_start();



    // If session variable is not set it will redirect to login page

    if(!isset($_SESSION['username']) || empty($_SESSION['username'])){

      header("location: login.php");

      exit;

    }

    ?>



    <!DOCTYPE html>

    <html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>Welcome</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

        <style type="text/css">

            body{ font: 14px sans-serif; text-align: center; }

        </style>

    </head>

    <body>

        <div class="page-header">

            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>Welome to Php Server - login system.</h1>
  <h4>Successfully created login system.</h4>
        </div>

        <p><a href="logout.php" class="btn btn-danger">Sign Out</a></p>




    </body>

    </html>
