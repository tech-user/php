<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Contact form</title>
</head>
<body>
   
<h4>Thank You</h4>
<p>Here is the information you have submitted:</p>

<ol>
   <li><em>Name:</em> <?php  echo $_POST["name"] ?> </li>
   <li><em>Email:</em> <?php  echo $_POST["email"] ?> </li>
   <li><em>Subject:</em> <?php  echo $_POST["subject"] ?> </li>
   <li><em>Message:</em> <?php  echo $_POST["message"] ?> </li>

</ol>



</body>
</html>