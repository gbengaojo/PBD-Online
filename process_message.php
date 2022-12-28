<?php

if (!empty($_POST['submit'])) {
   $submitted = true;

   $mail_to  = "service@lucidmediaconcepts.com";
   $name = htmlspecialchars($_POST['name']);
   $email = htmlspecialchars($_POST['email']);
   $message = htmlspecialchars($_POST['message']);

   $valid_message = true;
   if (strlen($message) < 50)
      $valid_message = false;

   $headers = "MIME-Version: 1.0\r\n";
   $headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
   $headers .= "From: A Prospect<service@lucidmediaconcepts.com>\r\n";

   $message .= "\n\nName: $name";
   $message .= "\n\nEmail: $email";

   // regular expression email
   preg_match('/^(.+@.+\.[com|io|edu|gov|dev|eu|org])/i', $email, $matches);
   $valid_email = empty($matches[0]) ? false : true;

   if ($valid_email && $valid_message) {
/*
      if (mail($mail_to, $subject, $message, $headers)) {
         $error = false;
      } else {
         $error = true;
      }   
*/
   }
   $error = false;

}
?>
