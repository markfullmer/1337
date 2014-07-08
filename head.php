<?php
// Copyright 2009 Mark Fullmer.  All Rights Reserved. 
// Application: 1337: A Videogame Novel about Videogames

// Logs us into facebook
require_once 'facebook-platform/php/facebook.php';

$appapikey = '';
$appsecret = '';
global $facebook;
$facebook = new Facebook($appapikey, $appsecret);
$user_id = $facebook->require_login();
$connect = mysql_connect("localhost", "", "")
or die ("Hey loser, check your server connection");
mysql_select_db("mark_1337");

//

$_SESSION['uident'] = $user_id;

$query = "SELECT user_id " .
		"FROM userdata ".
		"WHERE user_id=$user_id";
$results = mysql_query($query);
// checks if this is a new user
if(mysql_num_rows($results)==0)
{
require ('newuser.php');
}

// Gets most data for the selected user
$query = "SELECT user_level,user_artifacts,user_repute,user_whimsy,user_cash,user_health,user_ennui,user_introversion,user_mania,user_optimism,user_ana,user_brendan,user_charlie,user_daniel,user_elle " .
		"FROM userdata ".
		"WHERE user_id=$user_id ";
$results = mysql_query($query)
	or die(mysql_error());
	
while ($row = mysql_fetch_array($results)) {
extract($row);
}

$anachavez = "<fb:name uid=\"" .  $user_ana . "\" useyou=\"false\" firstnameonly=\"false\" linked=\"false\" />";
$ana = "<fb:name uid=\"" .  $user_ana . "\" useyou=\"false\" firstnameonly=\"true\" linked=\"false\" />";
$brendanthresher = "<fb:name uid=\"" .  $user_brendan . "\" useyou=\"false\" firstnameonly=\"false\" linked=\"false\" />";
$brendan = "<fb:name uid=\"" .  $user_brendan . "\" useyou=\"false\" firstnameonly=\"true\" linked=\"false\" />";
$charliesherman = "<fb:name uid=\"" .  $user_charlie . "\" useyou=\"false\" firstnameonly=\"false\" linked=\"false\" />";
$charlie = "<fb:name uid=\"" .  $user_charlie . "\" useyou=\"false\" firstnameonly=\"true\" linked=\"false\" />";
$danielrutger = "<fb:name uid=\"" .  $user_daniel . "\" useyou=\"false\" firstnameonly=\"false\" linked=\"false\" />";
$daniel = "<fb:name uid=\"" .  $user_daniel . "\" useyou=\"false\" firstnameonly=\"true\" linked=\"false\" />";
$elleerpenbeck = "<fb:name uid=\"" .  $user_elle . "\" useyou=\"false\" firstnameonly=\"false\" linked=\"false\" />";
$elle = "<fb:name uid=\"" .  $user_elle . "\" useyou=\"false\" firstnameonly=\"true\" linked=\"false\" />";

?>
<head>
<style>
 <?php echo htmlentities(file_get_contents('style.css', true)); ?>
 </style>

</head>

<div class="fbbody">
<table width="720"><tr><th colspan="3">
<div>
	<a href="index.php" class="fbtab">Home</a> 
	<a href="archive.php" class="fbtab">Table of Contents</a>  
	<a href="artifacts.php" class="fbtab">Artifacts</a>
	<a href="map.php" class="fbtab">Maps</a>  
	<a href="http://real1stgames.com" class="fbtab">About</a>  
	<a href="http://real1stgames.com/forum/1" class="fbtab">Forums</a> 
	<a href="hiscores.php" class="fbtab">High Scores</a>


</div>
</th></tr>