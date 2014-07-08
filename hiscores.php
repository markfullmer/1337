<?php
session_start(); 
require("head.php"); 
require("sidebar.php");

$query = "SELECT user_id,user_score,user_level,user_access FROM userdata ORDER BY user_score DESC LIMIT 0,25";
$results = mysql_query($query)
or die(mysql_error());

while ($row = mysql_fetch_array($results)) {
extract($row);
echo "<fb:name uid=\"" .  $user_id . "\" useyou=\"false\" firstnameonly=\"false\" />";
echo "|";
echo $user_level;
echo "|";
echo $user_score;
echo "|";
echo $user_access;
echo "<br />";
}
require("foot.php");
?>