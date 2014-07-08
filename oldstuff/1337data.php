<?php

$connect = mysql_connect("localhost", "", "") or
die ("Hey loser, check your server connection.");


mysql_select_db("mark_1337");

$insert = "INSERT INTO pagechoices (choice_id, choice_option1, choice_option2, choice_option3) " .
	"VALUES (1, 'Wander around the forest', 'Struggle with the ties that bind', 'Believe in oneself stubbornly'), " .
	"(2, 'Do the right thing', 'Marry oneself to the goal', 'Read a fortune cookie'), " .
	"(3, 'Contemplate aphorisms', 'Mix metaphors masterfully', 'Westward ho')";
$results = mysql_query($insert)
	or die(mysql_error());
	
echo "Data inserted successfully!";
?>