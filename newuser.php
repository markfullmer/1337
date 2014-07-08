<?php
//adds new user to database with default values
$insert = "INSERT INTO userdata (user_id) " .
	"VALUES ($user_id)";
$results = mysql_query($insert)
	or die(mysql_error());
	
$query = "SELECT uid FROM user WHERE sex='female' AND uid<$user_id AND uid IN (SELECT uid2 FROM friend WHERE uid1 = $user_id  ORDER BY uid2 DESC)";
$female = $facebook->api_client->fql_query($query);
$ana = $female[0]['uid'];
$elle = $female[1]['uid'];

$query = "SELECT uid FROM user WHERE sex='male' AND uid<$user_id AND uid IN (SELECT uid2 FROM friend WHERE uid1 = $user_id ORDER BY uid2 DESC)";
$male = $facebook->api_client->fql_query($query);
$brendan = $male[0]['uid'];
$charlie = $male[1]['uid'];
$daniel = $male[2]['uid'];

$frienddata = "UPDATE userdata SET 
	user_ana = $ana,
	user_brendan = $brendan,
	user_charlie = $charlie,
	user_daniel = $daniel,
	user_elle = $elle
	WHERE user_id=$user_id";
$results = mysql_query($frienddata)
	or die(mysql_error());
	
echo "Successfully connected to server";
?>