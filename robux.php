<?php
$Name_for_Intro = $_POST["Intro Text"];
$Song_for_Intro = $_POST["Song"];
$Email_for_Intro = $_POST["Email"];


$email_from = "drtnt.introhandler@gmail.com";

$email_subject = "New Form Submission";

$email_body = "User Name: $Name_for_Intro.\n".
"User Email: $visitor_email.\n".


$to = "drgametnt@gmail.com";

$headers = "From: $Email_for_Intro \r\n";

$headers .= "Reply To: $Email_for_Intro \r\n";

mail($to,email_subject,$email_body,$headers);

header("Location: robuxcomission.html");



?>