<?php
session_start(); 
$user_id=$_SESSION['uident'];
$connect = mysql_connect("localhost", "", "") or
die ("Hey loser, check your server connection.");
mysql_select_db("mark_1337");
$query = "SELECT * " .
		"FROM userdata ".
		"WHERE user_id=$user_id ";
$results = mysql_query($query)
	or die(mysql_error());	
while ($row = mysql_fetch_array($results)) {
extract($row);
}
	$sql = "SELECT * " .
		" FROM pagechoices " .
		" WHERE page_id=$user_level";
		$result = mysql_query($sql)
		or die(mysql_error());
		while ($row = mysql_fetch_array($result)) {
		extract($row);
		}	
if ($artifact == "true"){	
$sql = "UPDATE userdata SET 
	user_artifacts = user_artifacts+1	
	WHERE user_id=$user_id";
$arti = mysql_query($sql)
or die(mysql_error());
	}
include('processpage.php');
if ($_POST['choicemake'] == $choice_option1) { page_a(); }
elseif ($_POST['choicemake'] == $choice_option2) { page_b(); }
elseif ($_POST['choicemake'] == $choice_option3) { page_c(); }
else { page_d(); }
$user_page ="user_page" . $user_level; 
if (empty($_POST['custom'])) {
$choice = addslashes($_POST['choicemake']);
}
else
{
$choice = addslashes($_POST['custom']);
}
$score = (($user_level+1)*100+$user_whimsy*10-$user_ennui*10)*($user_introversion/100);
$sql = "UPDATE userdata SET 
	$user_page = '" . $choice . "', 
	user_level = user_level+1,
	user_score = $score,
	user_health = user_health-10
	WHERE user_id=$user_id";
		$results = mysql_query($sql)
or die(mysql_error());
header('Location: http://markfullmer.com/1337/index.php');
?>
