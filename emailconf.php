<?php
session_start(); 
$user_id=$_SESSION['uident'];
$connect = mysql_connect("localhost", "", "") or
die ("Hey loser, check your server connection.");
mysql_select_db("mark_1337");
$email = $_POST['email'];
$sql = "UPDATE userdata SET 
	user_email = '" . $_POST['email'] . "'
	WHERE user_id=$user_id";
		$results = mysql_query($sql)
or die(mysql_error());
header('Location: http://markfullmer.com/1337/index.php');
?>