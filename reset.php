<?php 
session_start(); 
$user_id=$_SESSION['uident'];
$connect = mysql_connect("localhost", "", "") or
die ("Hey loser, check your server connection.");
mysql_select_db("mark_1337");
$sql = "UPDATE userdata SET 
	user_level = '1',
	user_artifacts = '0',
	user_repute = 'n00b',
	user_health = '100',
	user_cash = '133.7',
	user_ennui = '0',
	user_whimsy = '0',
	user_mania = '50',
	user_introversion = '50',
	user_optimism = '50'
	WHERE user_id=$user_id";
$results = mysql_query($sql)
or die(mysql_error());
header('Location: http://markfullmer.com/1337/index.php');
?>


