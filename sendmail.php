<?php 
require("head.php"); 

$to = $_POST["to"];
$from = $_POST["from"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$headers = "From: " . $from . "\r\n";
$mailsent = mail($to, $subject, $message, $headers);

if ($mailsent) {
	echo "Congrats! The message was sent:<br />";
	echo $to;
	echo "<br />";
	echo $from;
	echo "<br />";
	echo $subject;
	echo "<br />";
	echo $message;
	}
	else {
	echo "there was an error...";
	}

?>


