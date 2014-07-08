<?php
function page_a() {
session_start(); 
$user_id=$_SESSION['uident'];
$sql = "UPDATE userdata SET 
	user_whimsy = user_whimsy+1,
	user_ennui = user_ennui,
	user_mania = user_mania + (100-user_mania)/2,
	user_introversion = user_introversion - user_introversion/2,
	user_optimism = user_optimism
	WHERE user_id=$user_id";
		$results = mysql_query($sql)
or die(mysql_error());
$_SESSION['w'] = "1";
$_SESSION['e'] = "0";
$_SESSION['m'] = "1";
$_SESSION['i'] = "-1";
$_SESSION['o'] = "0";
}
function page_b() {
session_start(); 
$user_id=$_SESSION['uident'];
$sql = "UPDATE userdata SET 
	user_whimsy = user_whimsy-1,
	user_ennui = user_ennui,
	user_mania = user_mania - user_mania/2,
	user_introversion = user_introversion + (100-user_mania)/2,
	user_optimism = user_optimism
	WHERE user_id=$user_id";
		$results = mysql_query($sql)
or die(mysql_error());
$_SESSION['w'] = "-1";
$_SESSION['e'] = "0";
$_SESSION['m'] = "-1";
$_SESSION['i'] = "1";
$_SESSION['o'] = "0";
}
function page_c() {
session_start(); 
$user_id=$_SESSION['uident'];
$sql = "UPDATE userdata SET 
	user_whimsy = user_whimsy-1,
	user_ennui = user_ennui+1,
	user_mania = user_mania,
	user_introversion = user_introversion + (100-user_introversion)/2,
	user_optimism = user_optimism
	WHERE user_id=$user_id";
		$results = mysql_query($sql)
or die(mysql_error());
$_SESSION['w'] = "-1";
$_SESSION['e'] = "1";
$_SESSION['m'] = "0";
$_SESSION['i'] = "+1";
$_SESSION['o'] = "0";
}
function page_d() {
session_start(); 
$user_id=$_SESSION['uident'];
$sql = "UPDATE userdata SET 
	user_whimsy = user_whimsy+1,
	user_ennui = user_ennui-1,
	user_mania = user_mania + (100-user_mania)/2,
	user_introversion = user_introversion,
	user_optimism = user_optimism
	WHERE user_id=$user_id";
		$results = mysql_query($sql)
or die(mysql_error());
$_SESSION['w'] = "1";
$_SESSION['e'] = "-1";
$_SESSION['m'] = "1";
$_SESSION['i'] = "0";
$_SESSION['o'] = "0";
}
?>