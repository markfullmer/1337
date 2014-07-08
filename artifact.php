<?php
require("head.php"); 
require("sidebar.php");

$num = $_REQUEST['number'];

// Gets requested artifact data from table
$query = "SELECT * " .
		"FROM artifacts ".
		"WHERE artifact_number= $num";
$results = mysql_query($query)
	or die(mysql_error());
	
while ($row = mysql_fetch_array($results)) {
extract($row);
}

echo $artifact_data;

 require("foot.php"); ?>

