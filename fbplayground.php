<?php
// Copyright 2007 Facebook Corp.  All Rights Reserved. 
// 
// Application: 1337: A Videogame Novel about Videogames
// File: 'index.php' 
//   This is a sample skeleton for your application. 
// 

require_once 'facebook-platform/php/facebook.php';

$appapikey = '';
$appsecret = '';
$facebook = new Facebook($appapikey, $appsecret);
$connect = mysql_connect("localhost", "", "")
or die ("Hey loser, check your server connection");
mysql_select_db("mark_1337");

$user_id = $facebook->require_login();

// Greet the currently logged-in user!
echo "<p>Hello, <fb:name uid=\"$user_id\" useyou=\"false\" />!</p>";
echo $user_id;

// Print out at most 25 of the logged-in user's friends,
// using the friends.get API method
echo "<p>Friends:";
$friends = $facebook->api_client->friends_get('en_US');
$friends = array_slice($friends, 0, 200);
foreach ($friends as $friend) {
  echo "<br>$friend";
  echo "<fb:name uid=\"$friend\" useyou=\"false\" firstnameonly=\"false\" />";
  echo "<fb:pronoun uid=\"$friend\" useyou=\"false\" />";
  $gender = "<fb:pronoun uid=\"$friend\" useyou=\"false\" />";
  echo "|gender: ";
  echo $gender;
  echo "|if statement: ";
  if ($gender == 'she')
  {
  echo "girlygirl";
  }
}
echo "</p> <hr />";




// $sql = "UPDATE userdata SET 
//	user_page1 = $sex, 
//	user_level = user_level+1,
//	user_health = user_health-10
//	WHERE user_id='4'";
// 		$results = mysql_query($sql)
// or die(mysql_error());

?>