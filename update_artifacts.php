<?php

$connect = mysql_connect("localhost", "", "") or
die ("Hey loser, check your server connection.");

mysql_select_db("mark_1337");


$sql = "INSERT INTO artifacts (artifact_number, artifact_data) " .
	"VALUES (10, 'test')";

$results = mysql_query($sql)
or die(mysql_error());

				
?>