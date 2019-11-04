<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$color = $_POST['color'];
$mailFrom = $_POST['mail'];
$value = $_POST['value'];

$mailTo = "kasfirahman@hotmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $txt, $headers);
header("Location: comission.html?mailsend");
}