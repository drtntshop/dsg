<?php
$Name_for_Intro = $_POST["Intro Text"];
$Song_for_Intro = $_POST["Song"];
$visitor_email = $_POST["Email"];


$email_from = "drtnt.introhandler@gmail.com";

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".


$to = "drgametnt@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply To: $visitor_email \r\n";

mail($to,email_subject,$email_body,$headers);

header("Location: index.html");



?>