<?php 
// Functions to filter user inputs


function filterName($field){
         //Sanitize user name

         $field = filter_var(trim($field), FILTER_SANITIZE_STRING);

         //validate user name

         if (filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/") ))) {
               return $field;
         } else{
            return FALSE;
         }

} // Function filterName end


function filterEmail($field){

// Sanitize e-mail address
$field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    
// Validate e-mail address
if(filter_var($field, FILTER_VALIDATE_EMAIL)){
    return $field;
} else{
    return FALSE;
}

}// Functijon filterEmail end


function filterString($field){
   // Sanitize string
   $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
   if(!empty($field)){
       return $field;
   } else{
       return FALSE;
   }
} // Function fileterString end



// Define variables and inilialize with emtpy values

$nameErr = $emailErr = $messageErr = "";
$name = $email = $message = "";



// Processing form data when form is submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {

         // Validate user name
         if (empty($_POST["name"])) {
            $nameErr = "Please enter your name.";
         } else{
            $name = filterName($_POST["name"]);
            if ($name == FALSE) {
               $nameErr = "Please enter a valid name.";
            }
         }


         // Validate email address
         if (empty($_POST["email"])) {
               $emailErr = "Please enter your email address";
         } else {
            $email = filterEmail($_POST["email"]);
            if ($email == FALSE) {
               $emailErr = "Please enter a valid email address.";
            }
         }


         // Validate message subject
         if (empty($_POST["subject"])) {
            $subject = "";
         } else {
            $subject = filterString($_POST["subject"]);
         }



         // Validate comment/textarea box
         if (empty($_POST["message"])) {
               $messageErr = "Please enter your comment";
         } else {
            $message = filterString($_POST["message"]);
            if ($message == FALSE) {
            $messageErr = "Please enter a valid comment.";
            }
         }





// Check input errors before sending email

   if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
      // Recipient email address

      $to = 'ganesh.v@tppl.news';

      // Create email headers

      $headers = 'From: ' . $email . "\r\n" . 'Reply-TO : ' . $email . "\r\n" . 'X-Mailer : PHP/' . phpversion();


      // Sending mail

      if (mail($to, $subject, $message, $headers)) {
            echo '<p class="success"> Your message has been sent successfully! </p>';
      } else {
         echo '<p class="error">Unable to send email. Please try again!</p>';
      }

   }

}// Processing form data If Condition end



?>



<!-- HTML Part -->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>contact</title>
   <style type="text/css">
        .error{ color: red; }
        .success{ color: green; }
    </style>



</head>
<body>

<h2>Contact Us</h2>
    <p>Please fill in this form and send us.</p>
    <form action="contact.php" method="post">
        <p>
            <label for="inputName">Name:<sup>*</sup></label>
            <input type="text" name="name" id="inputName" value="<?php echo $name; ?>">
            <span class="error"><?php echo $nameErr; ?></span>
        </p>
        <p>
            <label for="inputEmail">Email:<sup>*</sup></label>
            <input type="text" name="email" id="inputEmail" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span>
        </p>
        <p>
            <label for="inputSubject">Subject:</label>
            <input type="text" name="subject" id="inputSubject" value="<?php echo $subject; ?>">
        </p>
        <p>
            <label for="inputComment">Message:<sup>*</sup></label>
            <textarea name="message" id="inputComment" rows="5" cols="30"><?php echo $message; ?></textarea>
            <span class="error"><?php echo $messageErr; ?></span>
        </p>
        <input type="submit" value="Send">
        <input type="reset" value="Reset">
    </form>


   
</body>
</html>