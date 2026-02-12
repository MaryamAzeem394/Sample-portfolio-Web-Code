<?php
$name = $_POST['name'];
$visitor_email = $_POST['emaill'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_body = "User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "User Message: $message .\n";

$to = 'maryamazeem394@gmail.com';
$headers = "Form: $email_form \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_body,$headers); 
header("Location: index.html");
?>