<?php
// Copyright 2009 Mark Fullmer.  All Rights Reserved. 
// Application: 1337: A Videogame Novel about Videogames

// Logs us into facebook
require_once 'facebook-platform/php/facebook.php';

$appapikey = '';
$appsecret = '';
$facebook = new Facebook($appapikey, $appsecret);
$user_id = $facebook->require_login();

$connect = mysql_connect("localhost", "", "")
or die ("Hey loser, check your server connection");
mysql_select_db("mark_1337");

//



echo $user_id;

$query = "SELECT * " .
		"FROM userdata ".
		"WHERE user_id=$user_id";
		// note that when this is updated, update "WHERE user_id=1" in refresh.php, commit.php
$results = mysql_query($query);
// checks if this is a new user
if(mysql_num_rows($results)==0)
{
//adds new user to database with default values
$insert = "INSERT INTO userdata (user_id) " .
	"VALUES ($user_id)";
$results = mysql_query($insert)
	or die(mysql_error());
	
echo "Data inserted successfully!";
}
	
// Gets all data for the selected user, right now user#1
$query = "SELECT * " .
		"FROM userdata ".
		"WHERE user_id=$user_id ";
		// note that when this is updated, update "WHERE user_id=1" in refresh.php, commit.php
$results = mysql_query($query)
	or die(mysql_error());
	
while ($row = mysql_fetch_array($results)) {
extract($row);
}


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


</div>
</th></tr>