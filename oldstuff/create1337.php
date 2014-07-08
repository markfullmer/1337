<?php

$connect = mysql_connect("localhost", "", "") or
die ("Hey loser, check your server connection.");



mysql_select_db("mark_1337");

$stats = "CREATE TABLE pagechoices (
choice_id int(11) NOT NULL auto_increment,
choice_option1 varchar(255) NOT NULL default 0,
choice_option2 varchar(255) NOT NULL default 0,
choice_option3 varchar(255) NOT NULL default 0,
PRIMARY KEY (choice_id)
)";

$results = mysql_query($stats)
or die (mysql_error());

echo "1337 database successfully created!";

?>