<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$suhbject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@easyway.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name. \n".
              "User Email: $visitor_email. \n".
              "subject: $subject. \n".
              "User Message: $message .\n";


$to = 'wlrpublisher@gmail.com';

$headers = "From: $email_From \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.ht")
?>  