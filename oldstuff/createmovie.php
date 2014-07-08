<?php

$connect = mysql_connect("localhost", "", "") or
die ("Hey loser, check your server connection.");



mysql_select_db("mark_moviesite");

$movie = "CREATE TABLE movie (
movie_id int(11) NOT NULL auto_increment,
movie_name varchar(255) NOT NULL,
movie_type tinyint(2) NOT NULL default 0,
movie_year int(4) NOT NULL default 0,
movie_leadactor int(11) NOT NULL default 0,
movie_director int(11) NOT NULL default 0,
PRIMARY KEY (movie_id),
KEY movie_type (movie_type,movie_year)
)";

$results = mysql_query($movie)
or die (mysql_error());

echo "Movie database successfully created!";

?>