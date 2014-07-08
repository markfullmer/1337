<?php

$page = $_REQUEST['pagelevel'];

$connect = mysql_connect("localhost", "", "")
or die ("Hey loser, check your server connection");

mysql_select_db("mark_1337");


if (empty($page)) {
echo "empty page, go to current user page";
}
else
{
// Gets page choices based on selected page
		$sql = "SELECT * " .
		" FROM pagechoices " .
		" WHERE page_id=$page";
		$result = mysql_query($sql)
		or die(mysql_error());
		
		while ($row = mysql_fetch_array($result)) {
		extract($row);
		}	
echo $story;
}	
?>

