<?php

$connect = mysql_connect("localhost", "", "") or
die ("Hey loser, check your server connection.");


mysql_select_db("mark_moviesite");

$insert = "INSERT INTO movie (movie_id, movie_name, movie_type, " . 
	"movie_year, movie_leadactor, movie_director) " .
	"VALUES (1, 'Bruce Almighty', 5, 2003, 1, 2), " .
	"(2, 'Office Space', 5, 1999, 5, 6), " .
	"(3, 'Grand Canyon', 2, 1991, 4, 3)";
$results = mysql_query($insert)
	or die(mysql_error());
	
echo "Data inserted successfully!";
?>