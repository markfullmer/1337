<?php
session_start(); 
require("head.php"); 
require("sidebar.php");

// checks if a page request has been sent from the archive page
$page = $_REQUEST['pagelevel'];
if (empty($page)) {
// Gets page choices based on user level
		$sql = "SELECT * " .
		" FROM pagechoices " .
		" WHERE page_id=$user_level";
		$result = mysql_query($sql)
		or die(mysql_error());
		
		while ($row = mysql_fetch_array($result)) {
		extract($row);
		}	
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
}
// adds an artifact notification iff this is the current page & the page includes an artifact
 if ($user_level == $page_id && $artifact == "true")
 { 
	$temp_artifact =++$user_artifacts;
	echo "<div class=\"fbinfobox\" style=\"width: 500px;\">You've unlocked a new <a href=\"artifact.php?number=";
	echo $temp_artifact;
	echo "\">artifact</a>!</div>"; 
	
}

// checks if no more pages & user's health, then spits out appropriate story page
if ($user_level >=4) {
require('preview.php');
}
elseif ($user_health < 10)
	{
	echo "<div class=\"fbinfobox\" style=\"width: 425px;\">Watch yer stats. Ya need to refresh yer <a href=\"refresh.php\">lustiness</a> to continue. (P.S. We dunno why we just slipped into Southern drawl)</div>"; 
	}
else
{

//displays the user's choice from the previous page.
$prevpage = $page_id-1;
$user_page ="user_page" . $page_id; 	
$prev_page ="user_page" . $prevpage;
$query = "SELECT $user_page,$prev_page FROM userdata WHERE user_id = $user_id ";
$results = mysql_query($query)
	or die(mysql_error());
	
while ($row = mysql_fetch_array($results)) {
extract($row);
}
$userchoice = "user_page" . $prevpage;
	echo $$userchoice;
	
// MAIN CONTENT OF PAGE -- THE STORY	
	echo $story;

	if ($user_level == $page_id) {
		$pagelevel=--$page_id;
		echo "<a href=\"index.php?pagelevel=";
		echo $pagelevel;
		echo "\">Previous Page</a>";
		require("options.php");
	}
	else
	{
		$pagelevel=++$page_id;
		echo "<a href=\"index.php?pagelevel=";
		echo $pagelevel;
		echo "\">Next Page</a>";
		require ("optionstats.php");
	}
}
require("foot.php");
?>