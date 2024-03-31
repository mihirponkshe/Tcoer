<?php
$name=$_POST['name'];
$visitior_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['messaage'];

$email_from='info@computerdept.com';
$email_subject='new form subbmission';
$email_body="User Name : $name.\n".
"User Email : $visitor_email.\n".
"Subject : $subject.\n".
"User Message : $message.\n";


$to='mihirponkshe2005@gmail.com';
$headers="From: $email_from \r\n";
$headers="Reply-to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);

header("location:  contact.html");

?>